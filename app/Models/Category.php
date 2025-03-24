<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'order',
        'featured_image',
        'meta_data',
    ];

    protected $casts = [
        'meta_data' => 'json',
    ];

    // İlişkiler
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Alt kategoriler dahil tüm kategorileri almak için recursive ilişki
    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }
}
