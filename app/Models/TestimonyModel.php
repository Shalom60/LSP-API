<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonyModel extends Model
{
    protected $table = 'testimonies';
    public $timestamps = false;
    
        protected $fillable = [
            'testimony'
        ];
}
