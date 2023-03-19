<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Work extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $guarded = [];
    public $translatedAttributes = [
        'description'
    ];

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
}
