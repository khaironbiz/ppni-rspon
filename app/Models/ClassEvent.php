<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ClassEvent extends Model
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

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function training()
    {
        return $this->belongsTo(Training::class,'training_id');
    }
    public function toc_user()
    {
        return $this->belongsTo(User::class,'toc');
    }
    public function mot_user()
    {
        return $this->belongsTo(User::class,'mot');
    }
    public function curriculumVersion()
    {
        return $this->belongsTo(CurriculumVersion::class, 'curriculum_version_id');
    }
    public function subjectStudy()
    {
        return $this->hasMany(SubjectStudy::class, 'class_event_id');
    }
    public function enrollment()
    {
        return $this->hasMany(TrainingEnroll::class, 'class_event_id');
    }
    public function task()
    {
        return $this->hasMany(Task::class,'class_event_id');
    }
    public function schedule(){
        return $this->hasMany(Schedule::class,'class_event_id');
    }
}
