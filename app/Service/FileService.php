<?php


namespace App\Service;


use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileService
{
    /**
     * Uploads file to storage and creates File model
     * @param array $requestData
     * @return mixed
     */
    public function uploadFile(array $requestData)
    {
        $folderNum = (int)(File::max('id') / 10); //folder name = id/10
        $requestData['file_path'] = request()->file('file_path')->store("upload/$folderNum");
        $requestData['user_id'] = auth()->id();

        return File::create($requestData);
    }


    /**
     * Updates file info in database and deletes original file if new one is uploaded
     * @param File $file
     * @param array $requestData
     * @return bool
     */
    public function updateFile(File $file, array $requestData)
    {
        if (request()->has('file_path')) {
            Storage::delete($file->file_path);//delete original file
            $folderNum = (int)($file->id / 10);
            $requestData['file_path'] = request()->file('file_path')->store("upload/$folderNum");
        }

        if(auth()->user()->is_admin == 1)
        {
            $requestData['user_id'] = $file->user_id;
        }
        else{
            $requestData['user_id'] = auth()->id();
        }
        return $file->update($requestData);
    }

    /**
     * Deletes file from storage and database
     * @param File $file
     */
    public function deleteFile(File $file)
    {
        Storage::delete($file->file_path);
        return $file->delete();
    }
}
