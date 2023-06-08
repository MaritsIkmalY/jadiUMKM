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
}
