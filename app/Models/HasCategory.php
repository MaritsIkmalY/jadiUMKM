<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class HasCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "creator_id",
        "category_id",
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(ContentCreator::class, 'creator_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ContentCreatorCategory::class, 'category_id');
    }

    public static function getCreatorCategory()
    {
        $creator_id = User::getCreatorId(Auth::user()->id);
        return HasCategory::where('creator_id', $creator_id->id)->get();
    }

    public static function newCreatorCategory($data)
    {
        $creatorId = User::getCreatorId(Auth::user()->id);
        $data['creator_id'] = $creatorId->id;
        return HasCategory::create($data);
    }

    public static function getCreatorCategoryById($id)
    {
        return HasCategory::find($id);
    }
}
