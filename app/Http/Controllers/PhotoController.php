<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;
use Zip;
use ZipArchive;
use Illuminate\Support\Facades\DB;
class PhotoController extends Controller
{
    public function photoAdd(){
        // dd("ok");
        return view('pages.photo.create');
    }

    public function photoList(){
        // dd("photoList");
        $user_id=Auth::user()->id;
        $row_lenght=0;
        $total=0;
        // $photos=Photo::where('user_id',$user_id)->groupBy('serial_number')->get();
        $photos=Photo::where('user_id',$user_id)->groupBy('serial_number')->select('serial_number', DB::raw('count(*) as total'))->get();
        // dd($photos[0]->serial_number);
        // $photos=Photo::all()->where('user_id',$user_id)->groupBy('serial_number')->sortKeysDesc();
        // dd($photos);
        return view('pages.photo.index',compact('photos','row_lenght','total'));
    }

    public function photoView($serial_number){
        // dd($serial_number);
        $user_id=Auth::user()->id;
        // $row_lenght=0;
        // $total=0;
        // $photos=Photo::where('user_id',$user_id)->groupBy('serial_number')->get();
        $photos=Photo::where('user_id',$user_id)->where('serial_number',$serial_number)->get();
        // dd($photos);
        // dd($photos[0]->serial_number);
        // $photos=Photo::all()->where('user_id',$user_id)->groupBy('serial_number')->sortKeysDesc();
        // dd($photos);
        return view('pages.photo.view',compact('photos','serial_number'));
    }

    public function photoStore1(Request $request){
        // dd($image_array);
        $request->validate([
            'photo' => 'required',
            'photo.*' => 'required|image',
        ]);

        // $order_id =substr(now()->timestamp, 3);
        // dd($order_id);
        // dd($request->all());
        $images=$request->file('photo');
        $user_id=Auth::user()->id;
        $serial_no=Photo::where('user_id',$user_id)->latest()->first();
        if(empty($serial_no)){
            $serial_no=1;
        }else{
            $serial_no=$serial_no->serial_number+1;
        }


        $order_id =substr(now()->timestamp, 3);

        foreach($images as $key => $image){
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = '/photo_ai/user_'.$user_id.'/serial_'.$serial_no.'/';
            // $image_url =$upload_path . $image_full_name;
            // dd($image_url);
            $image->move(public_path() . '/' . $upload_path, $image_full_name);

            $image_url = public_path() . '/' . $upload_path. $image_full_name;

            $insert=new Photo();
            $insert->order_id=$order_id;
            $insert->user_id=$user_id;
            $insert->serial_number=$serial_no;
            $insert->photo=$image_full_name;
            // $insert->save();

            
            
            // echo $response;

            sleep(1);
        }

        // $files = array(
        //     'image_ls1' => new \CurlFile('/home/sayed/Documents/Python/photo/datasets/benffshsh/slnisd (1).jpg', 'image/jpg', 'slnisd (1).jpg'),
        //     'image_ls2' => new \CurlFile('/home/sayed/Documents/Python/photo/datasets/benffshsh/slnisd (2).jpg', 'image/jpg', 'slnisd (2).jpg'),
        // );
        // dd($files);


        // photo send post
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'http://localhost:8000/reqform',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => array('order_id' => $order_id,'gpu_id' => '0','style_ls' => 'st001','train' => 'True','infer' => 'True','image_format' => 'jpg',$files),
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: multipart/form-data'
        //     ),
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);


        // dd($user_id);
        return redirect()->route('photoList')->with('success','You have successfully upload image.');
    }

    public function photoDownload($serial_no){
        // dd($serial_no);
        $user_id=Auth::user()->id;
        // dd($user_id);
        $fileName='user_'.$user_id.'_serial_'.$serial_no.'.zip';
        $upload_path = '/photo_ai/user_'.$user_id.'serial_'.$serial_no;
        $upload_zip = '/photo_ai/';
        $do = '/photo_ai/';

        $photos=Photo::where('user_id',$user_id)->where('serial_number',$serial_no)->get();
        $upload_zip = '/photo_ai/';
        $download = '/photo_ai/'.$fileName;
        // dd(url('/').$upload_path);
        $zip = new ZipArchive;
        if ($zip->open($fileName, ZipArchive::CREATE) ===TRUE)
        {
                foreach($photos as $photo){
                    $upload_path = '/photo_ai/user_'.$user_id.'/serial_'.$photo->serial_number.'/'.$photo->photo;
                    $url=public_path($upload_path);
                    $name = basename($url);
                    $zip->addFile($url, $name);
                }
            $zip->close();
        }

        return response()->download($fileName);

    }

    public function photoSingleDownload($photo){
        // dd($photo);
        $user_id=Auth::user()->id;

        $photo_get=Photo::where('user_id',$user_id)->where('photo',$photo)->first();
        $upload_path = public_path().'/photo_ai/user_'.$photo_get->user_id.'/serial_'.$photo_get->serial_number.'/'.$photo;
        // dd($upload_path);
        return response()->download($upload_path);
    }



    public function photoStore(Request $request)
    {
        // $images=$request->file('photo');

        $url = 'http://localhost:8000/reqform';

        // Get the files from the request
        $files = $request->file('photo');
        $order_id =substr(now()->timestamp, 3);

        // dd($files);

        // Data to send along with the file
        $data = [
            'order_id' => $order_id,
            'gpu_id' => 0,
            'style_ls' => 'st001',
            'train' => 'True',
            'infer' => 'True',
            'image_format' => 'jpg'
        ];

        // dd($data);

        $curl = curl_init();

        // Prepare the files for upload
        $boundary = uniqid();
        $delimiter = '-------------' . $boundary;
        $payload = '';

        foreach ($data as $name => $value) {
            $payload .= "--$delimiter\r\n";
            $payload .= "Content-Disposition: form-data; name=\"$name\"\r\n\r\n";
            $payload .= "$value\r\n";
        }
        // dd($payload);

        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $fileData = file_get_contents($file->getRealPath());

            $payload .= "--$delimiter\r\n";
            $payload .= "Content-Disposition: form-data; name=\"image_ls\"; filename=\"$fileName\"\r\n";
            $payload .= "Content-Type: application/octet-stream\r\n";
            $payload .= "\r\n$fileData\r\n";
            // dd($payload);
        }
        // dd($payload);
        $payload .= "--$delimiter--\r\n";

        // dd($payload);
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => [
                "Content-Type: multipart/form-data; boundary=$delimiter",
                'Content-Length: ' . strlen($payload)
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);


        // save local database
        $user_id=Auth::user()->id;
        $serial_no=Photo::where('user_id',$user_id)->latest()->first();
        if(empty($serial_no)){
            $serial_no=1;
        }else{
            $serial_no=$serial_no->serial_number+1;
        }
        
        foreach($files as $key => $image){
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = '/photo_ai/user_'.$user_id.'/serial_'.$serial_no.'/';
            // $image_url =$upload_path . $image_full_name;
            // dd($image_url);
            $image->move(public_path() . '/' . $upload_path, $image_full_name);

            $image_url = public_path() . '/' . $upload_path. $image_full_name;

            $insert=new Photo();
            $insert->order_id=$order_id;
            $insert->user_id=$user_id;
            $insert->serial_number=$serial_no;
            $insert->photo=$image_full_name;
            $insert->save();

            // echo $response;

            sleep(1);
        }

        // return response()->json($response, 200);
        return redirect()->route('photoList')->with('success','You have successfully upload image.');
    }

}
