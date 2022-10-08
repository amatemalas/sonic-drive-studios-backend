<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Song extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sample',
        'work_id',
    ];

    public function work()
    {
        return $this->belongsTo(Work::class);
    }

    public function getSlugAttribute()
    {
        return \Str::slug($this->title);
    }

    public function getPathAttribute()
    {
        return Storage::url($this->sample);
    }
}
