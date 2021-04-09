<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            return $file;
            $filename = $file->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('upload/'.$folder, $filename);
            return $folder;
        }
        return'';
    }
}
