<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageable extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['photo_id', 'imageable_id', 'imageable_type'];
}
