<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'photo', 'price', 'marketplace_id'
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(MarketPlace::class, 'marketplace_id');
    }
}
