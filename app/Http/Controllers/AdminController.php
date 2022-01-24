<?php

namespace App\Http\Controllers;

use App\Filters\FileFilters;
use App\Models\File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(FileFilters $filters){
        $this->authorize('admin',File::class);
        return view('admin.index', ['files'=>File::filter($filters)->paginate(10)]);
    }
}
