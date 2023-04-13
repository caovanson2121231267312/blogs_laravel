<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Freelancer extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'title',
        'check',
        'description',
        'skill',
        'time_limit',
        'work_type',
        'pay_type',
        'min_price',
        'max_price',
        'user_id',
        'field_id',
        'view',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'unique' => true,
                'onUpdate' => true,
            ]
        ];
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
