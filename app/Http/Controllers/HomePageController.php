<?php

namespace App\Http\Controllers;

use App\Models\File;

class HomePageController extends Controller
{

    public function __invoke()
    {
        return view('index',['count' => File::public()->count(),'files'=>File::public()->orderByDesc('created_at')->limit(5)->get()]);
    }

}
