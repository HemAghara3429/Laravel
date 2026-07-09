<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        // Store the file in storage/app/public
        $path = $request->file('file')->store('public');

        // Remove "public/" from the path
        $imagePath = str_replace('public/', '', $path);

        // Save path in database
        Image::create([
            'path' => $imagePath
        ]);

        return redirect('/listphoto');
    }

    public function listimage()
    {
        $images = Image::all();

        return view('display', [
            'imageData' => $images
        ]);
    }
}
