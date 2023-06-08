<?php

namespace App\Services;

use App\Models\ContentCreator;

class CreatorService
{
    public function getCreatorId(int $id): int
    {
        $creatorId = ContentCreator::where('user_id', $id)->first('id');
        return $creatorId->id;
    }

    public function getPath($request): string
    {
        $filename = $request->file('photo')->getClientOriginalName();
        return $request->file('photo')->storeAs('/assets/images', $filename, 'public');
    }
}
