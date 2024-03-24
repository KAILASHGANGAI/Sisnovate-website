<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'content', 'slug', 'meta_title', 'meta_description', 'tags', 'image'];

    # relation with category 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    # tags  relation
    public function tags()
    {
        return $this->hasMany(Tag::class, 'blog_id', 'tag_id');
    }
}
