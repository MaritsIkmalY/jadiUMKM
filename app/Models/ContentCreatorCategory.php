<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class ContentCreatorCategory extends Model
{
    use HasFactory;

    public function hasCategory(): HasMany
    {
        return $this->hasMany(HasCategory::class);
    }

    public static function getAllCategory()
    {
        return ContentCreatorCategory::all();
    }
}
