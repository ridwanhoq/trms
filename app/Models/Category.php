<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $rules = [
        "title_en"  => "required|unique:categories",
        "title_bn"  => "unique:categories"
    ];

}
