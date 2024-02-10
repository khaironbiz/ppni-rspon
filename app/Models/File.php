<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class File extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory, SoftDeletes, HasUlids;
    public function class()
    {
        return $this->hasMany(ClassEvent::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
