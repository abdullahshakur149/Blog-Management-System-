<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    use HasFactory;

    protected $primaryKey = 'thumbnail_id';
    protected $fillable = ['thumbnail_title'];

    public function thumbnail_images()
    {
        return $this->hasMany(ThumbnailImage::class, 'thumbnail_id', 'thumbnail_id');
    }
}
