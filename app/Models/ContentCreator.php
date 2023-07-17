<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContentCreator extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function getUser(int $id)
    {
        return ContentCreator::where('user_id', $id)->first();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): HasMany
    {
        return $this->hasMany(HasCategory::class, 'creator_id');
    }

    public function portofolio(): HasMany
    {
        return $this->hasMany(ContentCreatorPortofolio::class, 'creator_id');
    }

    public function skill(): HasMany
    {
        return $this->hasMany(ContentCreatorSkill::class, 'creator_id');
    }

    public function education(): HasMany
    {
        return $this->hasMany(ContentCreatorEducation::class, 'creator_id');
    }
}
