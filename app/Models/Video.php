<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public static function getFreeVideos()
    {
        return Video::where('is_subscribe', false)->get();
    }
}
