<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{

    protected $table = 'users';
public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'address',
        'password'
    ];
}
