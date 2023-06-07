<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'photo',
        'link',
        'is_done',
    ];

    public static function getWebinar()
    {
        return Webinar::where('is_done', false)->get();
    }

    public static function newWebinar(mixed $data, $path)
    {
        $data['created_at'] = $data['updated_at'] = \now();
        $data['photo'] = $path;
        return Webinar::create($data);
    }

}
