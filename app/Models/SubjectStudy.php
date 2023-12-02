<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class SubjectStudy extends Model
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
    public function class()
    {
        return $this->belongsTo(ClassEvent::class, 'class_event_id');
    }

    public function topic()
    {
        return $this->hasMany(EventTopic::class, 'subject_study_id');
    }
}
