<?php

namespace Database\Factories;

use App\Models\User;
use File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $files = Storage::allFiles('upload/seeding');
        $fileIndex = rand(0, count($files) - 1);
        $newFile = 'upload/tmp/'.Str::random(6).Str::afterLast($files[$fileIndex],'/');
        Storage::copy($files[$fileIndex],$newFile);

        return [
            'name' => $this->faker->sentence(2),
            'user_id' => User::all()->random()->id,
            'description' => $this->faker->paragraph(),
            'is_private' => $this->faker->boolean(10),
            'file_path' => $newFile,
        ];
    }
}
