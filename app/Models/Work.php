<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Work extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function getPathAttribute()
    {
        return Storage::url($this->image);
    }

    public function getSlugAttribute()
    {
        return \Str::slug($this->name);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
