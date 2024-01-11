<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['filename'];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'imageable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'imageable');
    }
}
