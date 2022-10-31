<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileStorage
{
    public function fileStorage(string $url): ?string
    {
        if (strpos($url, 'https:') === false) {
            $url = 'https:' . $url;
        }

        $contents = file_get_contents($url);
        $imagePath = uniqid() . '.' . pathinfo($url, PATHINFO_EXTENSION);

        if (!Storage::disk('public')->put($imagePath, $contents)) {
            return null;
        }

        return env('APP_URL') . Storage::url($imagePath);
    }
}
