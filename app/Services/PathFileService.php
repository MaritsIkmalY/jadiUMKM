<?php

namespace App\Services;

class PathFileService
{
    public function getPath($request): string
    {
        $filename = $request->getClientOriginalName();
        return $request->storeAs('/assets/images', $filename, 'public');
    }
}
