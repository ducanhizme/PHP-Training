<?php

namespace App\Http\Controllers;

use App\Mail\UploadedImage;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UploadImageController extends Controller
{
    public function store(Request $request){
        $file = $request->file('image')->store(
            'images','public'
        );
        if ($file){
            Mail::to('ninhducanhninh@gmail.com')->send(new UploadedImage('Image uploaded successfully'));
        }
        return [
            'public_url'=>Storage::url($file),
            'path'=>$file,
            'size'=> $request->file('image')->getSize(),
            'mime_type'=>$request->file('image')->getMimeType(),
            'extension' =>$request->file('image')->getClientOriginalExtension(),
        ];

    }
}
