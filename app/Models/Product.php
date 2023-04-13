<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Jobs\UserActivities;

class Product extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'keywords',
        'video',
        'view',
        'like',
        'download',
        'type',
        'image',
        'link',
        'hot',
        'commit',
        'detail',
        'tutorial',
        'code_id',
        'user_id',
        'checked'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($data) {
            $message = " đã tải lên <a target='_blank' class='s-title-code' href='/" . $data->slug . "'>" . $data->title . "</a>";
            dispatch(new UserActivities(auth()->user()->id, $message, "table: " . $data->getTable() . " - id: " . $data->id))->delay(1);
        });
        static::updated(function ($data) {
            // do something after the product is updated
        });
        static::deleted(function ($data) {
            // do something after the product is deleted
        });
    }

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

    public function code()
    {
        return $this->belongsTo(Code::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}