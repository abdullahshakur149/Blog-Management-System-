<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $primaryKey = 'testimonials_id';

    protected $fillable = [
        'testimonials_title',
        'testimonials_description',
        'testimonials_summernote',
    ];
}
