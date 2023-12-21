<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
    use HasFactory;

    protected $table = 'grievances';
    protected $primaryKey = 'grievance_id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];
}
