<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    
    protected $fillable = [
        'category',
        'name',
        'sub_name',
        'no_urut',
        'is_active'
    ];
}
