<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThumbnailImage extends Model
{
    use HasFactory;

    protected $primaryKey = 'thumbnail_image_id';
    protected $fillable = ['thumbnail_id', 'thumbnail_image_url'];

    public function thumbnail()
    {
        return $this->belongsTo(Thumbnail::class, 'thumbnail_id', 'thumbnail_id');
    }
}
