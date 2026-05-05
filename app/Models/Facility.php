<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'description',
        'order',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
