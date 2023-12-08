<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Question extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasUlids;

    public function training_question()
    {
        return $this->belongsTo(TrainingQuestion::class,'training_question_id');
    }
    public function answer()
    {
        return $this->hasMany(QuestionAnswer::class,'question_id');
    }
    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class,'curriculum_id');
    }

}
