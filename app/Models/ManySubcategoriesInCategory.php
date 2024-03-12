<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ManySubcategoriesInCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_subcategory',
        'id_category',
    ];
    public function subcategories(): BelongsToMany
    {
        return $this->belongsToMany(Subcategory::class);
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
