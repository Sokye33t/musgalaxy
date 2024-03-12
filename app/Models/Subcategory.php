<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "desc",
        "photo",
        "id_category",
    ];
    // public function manysubcategoriesincategories(): HasMany
    // {
    //     return $this->hasMany(ManySubcategoriesInCategory::class, "id_category");
    // }
    // public function manyproductsinsubcategories(): HasMany
    // {
    //     return $this->hasMany(Subcategory::class);
    // }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "id_category", "id");
    }
}
