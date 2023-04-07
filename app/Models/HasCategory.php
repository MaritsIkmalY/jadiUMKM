<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasCategory extends Model
{
    use HasFactory;

    public function creator(): BelongsTo
    {
        return $this->belongsTo(ContentCreator::class, 'creator_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ContentCreatorCategory::class, 'category_id');
    }
}
