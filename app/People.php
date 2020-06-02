<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['nama', 'email', 'alamat'];
    
    protected $table = 'peoples';
}
