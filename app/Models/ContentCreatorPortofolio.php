<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContentCreatorPortofolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(ContentCreator::class, 'creator_id');
    }
}
