<?php

// for image create file in Traits

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;


trait FileUploadTrait
{
    public function handleFileUpload(Request $request, string $fieledNmae, ?string $oldPath = null, string $dir = 'uploads'): ?string
    {

        // check request to file
        if (!$request->hasFile($fieledNmae)) {
            return null;
        }

        // check old path and delete old image
        if ($oldPath && File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }

        $file = $request->file($fieledNmae);
        $extension = $file->getClientOriginalExtension();
        $updatedFileName = Str::random(30) . '.' . $extension;
        $filePath = $dir . '/' . $updatedFileName;

        // Move the file to the desired directory with the new file name
        $file->move(public_path($dir), $updatedFileName);

        return $filePath;
    }

    /* HANDLE DELETE FILE  */
    public function deleteFile(string $path)
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
