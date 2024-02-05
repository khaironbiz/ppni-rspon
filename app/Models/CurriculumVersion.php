<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CurriculumVersion extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasSlug;
    use HasUlids;
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title') // field to generate the slug from
            ->saveSlugsTo('slug'); // field to save the slug to
    }

    public function training()
    {
        return $this->belongsTo(Training::class,'training_id');
    }
    public function curriculum()
    {
        return $this->hasMany(Curriculum::class, 'curriculum_version_id');
    }
    public function class()
    {
        return $this->hasMany(ClassEvent::class, 'curriculum_version_id');
    }
}
