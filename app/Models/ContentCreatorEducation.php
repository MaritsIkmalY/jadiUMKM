<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContentCreatorEducation extends Model
{
    use HasFactory;

    public function creator(): BelongsTo
    {
        return $this->belongsTo(ContentCreator::class, 'creator_id');
    }
}
