<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function __invoke(File $file)
    {
        $this->authorize('view',$file);

        return response()->download(Storage::path($file->file_path));
    }}
