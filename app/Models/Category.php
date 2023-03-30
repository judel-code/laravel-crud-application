<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
      
        'name',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];


}
