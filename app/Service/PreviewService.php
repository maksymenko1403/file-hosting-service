<?php


namespace App\Service;


use App\Models\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PreviewService
{
    public function getPreviewResponse(File $file)
    {
        $preview = Storage::get($file->file_path);
        $type = Storage::mimeType($file->file_path);

        $response = Response::make($preview, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
