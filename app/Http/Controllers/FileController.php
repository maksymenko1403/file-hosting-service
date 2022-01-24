<?php

namespace App\Http\Controllers;

use App\Filters\FileFilters;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;
use FileService;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('userFiles','create','store','edit','update','destroy');
    }

    public function index(FileFilters $filters)
    {
        return view('files.index',
            ['files'=>File::public()->filter($filters)->paginate(10)->withQueryString()]);
    }

    public function show(File $file)
    {
        $this->authorize('view',$file);

        return view('files.show',['file'=>$file]);
    }
    public function create()
    {
        return view('files.create');
    }

    public function store(StoreFileRequest $request)
    {
        $createdFile = FileService::uploadFile($request->validated());
        return redirect(route('files.show',$createdFile->id))->with('message','File has been uploaded');
    }

    public function edit(File $file)
    {
        $this->authorize('update',$file);

        return view('files.edit', ['file' => $file]);
    }

    public function update(UpdateFileRequest $request,File $file)
    {
        $this->authorize('update',$file);
        FileService::updateFile($file,$request->validated());

        return redirect(route('files.show',$file))->with('message','File has been updated');
    }

    public function destroy(File $file)
    {
        $this->authorize('delete',$file);
        $file->delete();
        return redirect(route('home'))->with('message','File has been deleted');
    }


    public function userFiles()
    {
        return view('files.userfiles', ['files'=>File::where('user_id',auth()->id())->paginate(10)]);
    }
}
