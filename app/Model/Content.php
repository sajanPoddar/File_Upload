<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['content_name', 'content_slug', 'content_description', 'content_file', 'category_id', 'content_status', 'published_at'];
    protected $table = 'contents';

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
