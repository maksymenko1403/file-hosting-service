<?php

namespace App\Http\Controllers;

use App\Filters\FileFilters;
use App\Models\File;
use Illuminate\Http\Request;

class AutoCompleteController extends Controller
{
    public function __invoke(FileFilters $filters)
    {
        if(request()->ajax())
        {
            $result = File::public()->filter($filters)->pluck('name');
            return response()->json($result);
        }
        return redirect('/');
    }



}
