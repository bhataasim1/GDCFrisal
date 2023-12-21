<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'image_title', 
        'image_file'
    ];
}
