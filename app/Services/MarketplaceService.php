<?php

namespace App\Services;

use App\Models\MarketPlace;

class MarketplaceService extends PathFileService
{
    public function getMarketplaceId(int $id): int
    {
        $marketplaceId = MarketPlace::where('user_id', $id)->first('id');
        return $marketplaceId->id;
    }
}
