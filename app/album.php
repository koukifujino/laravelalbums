<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $fillable = ['content'];

    public static $rules = [
        'profile_img' => 'image|file',
    ];
}
