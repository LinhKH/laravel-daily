<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photoable_id',
        'photoable_type',
        'filename'
    ];

    public function photoable()
    {
        return $this->morphTo();
    }
}
