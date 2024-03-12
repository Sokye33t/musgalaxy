<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        "name",
        "articule",
        "desc",
        "id_brand",
        "stock",
        "specifications",
        "id_category",
        "photo",
        "price",
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "id_category", "id");
    }
    public function manyproductsinsubcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, "id_brand");
    }
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'articule' => $this->articule
        ];
    }
}
