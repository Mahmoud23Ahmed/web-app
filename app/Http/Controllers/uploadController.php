<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

       return Storage::disk('public')->put("pdf",$req->file('file'));
    }


    public function uploadFiles(Request $request)
    {

            $fileName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . 'pdf'; 

            $file->storeAs('/pdf', $fileName, 'public'); 

            $files = Storage::files('/pdf'); 

            $fileList = [];
            foreach ($files as $file) {
                $files = explode("/", $file);
                $name = $files[count($files) - 1];
                array_push($fileList, ['url' => Storage::url($file)]);
            }
            return back()->with('files', $fileList);

    }
}
