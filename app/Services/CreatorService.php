<?php

namespace App\Services;

use App\Models\ContentCreator;

class CreatorService extends PathFileService
{
    public function getCreatorId(int $id): int
    {
        $creatorId = ContentCreator::where('user_id', $id)->first('id');
        return $creatorId->id;
    }
}
