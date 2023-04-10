<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class ContentCreatorEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "creator_id",
    ];

    public function creator(): BelongsTo
    {

        return $this->belongsTo(ContentCreator::class, 'creator_id');
    }

    public static function getCreatorEducation()
    {
        $creatorId = User::getCreatorId(Auth::user()->id);
        return ContentCreatorEducation::where('creator_id', $creatorId->id)->get();
    }

    public static function newEducation($data)
    {
        $creatorId = User::getCreatorId(Auth::user()->id);
        $data['creator_id'] = $creatorId->id;
        return ContentCreatorEducation::create($data);
    }

    public static function getEducationById($id)
    {
        return ContentCreatorEducation::find($id);
    }
}
