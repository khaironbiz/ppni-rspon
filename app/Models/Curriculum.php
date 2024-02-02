<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Curriculum extends Model
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

    public function curriculum_version()
    {
        return $this->belongsTo(CurriculumVersion::class,'curriculum_version_id');
    }
    public function module()
    {
        return $this->hasMany(Module::class, 'curriculum_id');
    }
    public function question()
    {
        return $this->hasMany(Question::class, 'curriculum_id');
    }
    public function task_answer_detail()
    {
        return $this->hasMany(TaskAnswerDetail::class, 'curriculum_id');
    }
}
