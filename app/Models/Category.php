<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    protected $fillable = ['category_title', 'category_image', 'category_description'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'category_id');
    }
}
