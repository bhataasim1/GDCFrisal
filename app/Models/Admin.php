<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Admin extends Model implements Authenticatable
{
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'admins';
    protected $primarykey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password'
    ];
}
