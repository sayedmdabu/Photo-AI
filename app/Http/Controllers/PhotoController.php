<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PhotoController extends Controller
{
    public function photoAdd(){
        dd("ok");
    }

    public function photoStore(Request $request){
        dd($request->all());
    }

    public function photoDownload($id){
        dd($id);
    }
}
