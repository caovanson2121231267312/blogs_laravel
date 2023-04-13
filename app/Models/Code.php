<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Code extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'keywords',
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

    public function products()
    {
        return $this->HasMany(Product::class);
    }
}