<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'stock'
    ];

    // Definicja relacji do komentarzy
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Definicja relacji do ocen
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
