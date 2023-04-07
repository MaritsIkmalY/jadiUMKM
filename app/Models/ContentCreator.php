<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContentCreator extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(ContentCreatorCategory::class, 'category_id');
    }
}
