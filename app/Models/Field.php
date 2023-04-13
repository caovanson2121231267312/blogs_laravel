<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Field extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'unique' => true,
                'onUpdate' => true,
            ]
        ];
    }

    public function jobs()
    {
        return $this->HasMany(Freelancer::class);
    }
}