<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    public static $ruels = [
        'title_en'          => 'required',
        'description_en'    => 'required'
    ];

}
