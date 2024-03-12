<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ManyProductsInSubcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_subcategory',
        'id_product',
    ];
    public function subcategories(): BelongsToMany
    {
        return $this->belongsToMany(Subcategory::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}

