<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;
use Zip;
use ZipArchive;
class PhotoController extends Controller
{
    public function photoAdd(){
        // dd("ok");
        return view('pages.photo.create');
    }
    public function photoList(){
        $user_id=Auth::user()->id;
        $photos=Photo::where('user_id',$user_id)->get();
        return view('pages.photo.index',compact('photos'));
    }

    public function photoStore(Request $request){
        $request->validate([
            'photo' => 'required',
            'photo.*' => 'required|image',
        ]);
        // dd($request->all());
        $images=$request->file('photo');
        $user_id=Auth::user()->id;
        $serial_no=Photo::where('user_id',$user_id)->latest()->first();
        if(empty($serial_no)){
            $serial_no=1;            
        }else{
            $serial_no+=1;
        }

        foreach($images as $image){
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = '/photo_ai/user_'.$user_id.'/serial_'.$serial_no.'/';
            $image_url =$upload_path . $image_full_name;
            // dd($image_url);
            $image->move(public_path() . '/' . $upload_path, $image_full_name);

            $insert=new Photo();
            $insert->user_id=$user_id;
            $insert->serial_number=$serial_no;
            $insert->photo=$image_full_name;
            $insert->save();
            sleep(1);
        }
        // dd($user_id);
        return redirect()->route('photoList')->with('success','You have successfully upload image.');
    }

    public function photoDownload(){
        // $zip = new ZipArchive;   
        $user_id=Auth::user()->id;
        $fileName='user_'.$user_id.'.zip';
        $upload_path = '/photo_ai/user_'.$user_id.'serial_1';
        $upload_zip = '/photo_ai/';
        $do = '/photo_ai/';

        $photos=Photo::where('user_id',$user_id)->get();
        $fileName='user_'.$user_id.'.zip';
        $upload_zip = '/photo_ai/';
        $download = '/photo_ai/'.$fileName;
        // dd(url('/').$upload_path);
        $zip = new ZipArchive;
        if ($zip->open($fileName, ZipArchive::CREATE) ===TRUE)
        {      
            // $zip->addFile(url('/').$upload_path);
                foreach($photos as $photo){
                    // $url=url('').$photo->photo;
                    // $name = basename($url);
                    $upload_path = '/photo_ai/user_'.$user_id.'/serial_'.$photo->serial_number.'/'.$photo->photo;
                    // dd($upload_path);
                    $url=public_path($upload_path);
                    $name = basename($url);
                    // dd($name);              
                    $zip->addFile($url, $name);
                }
            $zip->close();
        }

        return response()->download($fileName);

    }
}
