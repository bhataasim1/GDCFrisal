<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    
    protected $table = 'notice';
    protected $primaryKey = 'notice_id';
    public $timestamps = true;

    protected $fillable = [
        'notice_title',
        'notice_date',
        'notice_file'
    ];

    protected $casts = [
        'notice_date' => 'datetime', // Cast notice_date to a datetime object
    ];
}
