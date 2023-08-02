<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NomorIndukBerusaha extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function marketplace(): BelongsTo
    {
        return $this->belongsTo(MarketPlace::class, 'marketplace_id');
    }
}
