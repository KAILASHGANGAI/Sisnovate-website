<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $fillable = ['blog_id', 'name', 'slug'];

    public function blog()
    {
        return $this->belonhasgsTo(Blog::class, 'blog_id', 'id');
    }
}
