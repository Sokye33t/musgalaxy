<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "desc",
        "photo",
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "id_category");
    }
    // public function manysubcategoriesincategories(): HasMany
    // {
    //     return $this->hasMany(ManySubcategoriesInCategory::class, "id_subcategory", 'id');
    // }
    public function subcategories(): HasMany
    {
        return $this->HasMany(Subcategory::class, "id_category", "id");
    }
}
