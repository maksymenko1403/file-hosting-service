<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Preview;

class PreviewController extends Controller
{
    public function __invoke(File $file)
    {
        $this->authorize('view',$file);

        return Preview::getPreviewResponse($file);
    }
}
