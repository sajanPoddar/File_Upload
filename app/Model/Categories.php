<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['category_title', 'category_description', 'parent_Category', 'category_slug'];
    protected $table = 'categories';
}
