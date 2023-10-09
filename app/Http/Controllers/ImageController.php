<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function displayPrivateMedia($filename)
    {
        $filePath = storage_path('app/media/' . $filename);

        if (file_exists($filePath)) {
            $file = Storage::disk('local')->get('media/' . $filename);
            $type = Storage::disk('local')->mimeType('media/' . $filename);

            return response($file, 200)->header('Content-Type', $type);
        }

        abort(404);
    }
}
