<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MarketPlace extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function getUser(int $id)
    {
        return MarketPlace::where('user_id', $id)->first();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class,'marketplace_id');
    }
}
