<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Storage;

class downloadController extends Controller
{
    public function download(Request $request)
    {
       return Storage::disk('public')->download("public\storage\pdf\c7bXvI60Zwz03bRpD4mPqOMv8zw3ySB6mKhxL7oD.pdf");
    }

  
    public function viewpdf()
    {
        $files = Storage::allFiles("/pdf");
        $fileList = [];
        foreach ($files as $file) {
            $fileName = Str::slug(pathinfo($file, PATHINFO_FILENAME)) . '.' . 'pdf'; 
            $files = explode("/", $file);
            $name = $files[count($files) - 1];
            $url = str_replace('public/', '', $file);
            $fullUrl = asset('storage/' . $url);
            array_push($fileList, ['url' => $fullUrl]);

        }

        return view('pdf.student' , ['path'=> $fileList]);
    }

}
