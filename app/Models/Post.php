<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Post extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d.m.Y H:i');
    }

    public function scopeActive($query)
    {
        return $query->where('created_at','<=', now());
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function getKeyName(): string
    {
        return 'slug';
    }

    public function path()
    {
        return route('post.show',$this->slug);
    }

    public function isTrashed()
    {
        return $this->trashed();
    }
}
