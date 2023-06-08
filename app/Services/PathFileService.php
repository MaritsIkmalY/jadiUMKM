<?php

namespace App\Services;

class PathFileService
{
    public function getPath($request): string
    {
        $filename = $request->file('photo')->getClientOriginalName();
        return $request->file('photo')->storeAs('/assets/images', $filename, 'public');
    }
}
