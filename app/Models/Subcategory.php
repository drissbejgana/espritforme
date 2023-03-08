<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Typesubcategory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Subcategory extends Model
{
    use HasFactory;

    public function typesubcategories(): HasMany
    {
        return $this->hasMany(Typesubcategory::class);
    }


}
