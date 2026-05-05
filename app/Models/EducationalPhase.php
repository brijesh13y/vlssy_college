<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationalPhase extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'description',
        'features',
        'order',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
