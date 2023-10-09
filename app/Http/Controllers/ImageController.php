<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function displayPrivateImage($dir,$filename)
    {
        $path = storage_path("app/media/{$dir}/{$filename}");

        if (!file_exists($path)) {
            abort(404);
        }

        $file = Storage::get($path);
        $type = Storage::mimeType($path);

        $response = response($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
