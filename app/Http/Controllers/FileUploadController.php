<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request){
        try {
            $request->validate([
                'file' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            ]);
            $fileName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move('storage/appartements/', $fileName);
            return response()->json(['response'=>"success"]); 
        } catch (\Throwable $th) {
           return response()->json(['response'=>"error"]);
        }

    }

    public function getFiles(Request $request){
        $images = [];
        foreach(Storage::disk('public')->allFiles($request->folder) as $file){
            array_push($images,  Storage::url($file) );
        }
        return $images;
    }
}
