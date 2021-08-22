<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function childcategories()
    {
        return $this->hasMany(Childcategory::class);
    }
}
