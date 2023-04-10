<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "subtitle",
        "link",
        "is_subscribe",
    ];

    public static function getFreeVideos()
    {
        return Video::where('is_subscribe', false)->get();
    }

    public static function newVideo(mixed $data)
    {
        $data['created_at'] = $data['updated_at'] = \now();
        return Video::create($data);
    }

    public static function getVideoById($id)
    {
        return Video::find($id);
    }
}
