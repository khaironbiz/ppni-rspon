<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class QuestionAnswer extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasUlids;

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
    public function task_answer_detail()
    {
        return $this->belongsTo(TaskAnswerDetail::class, 'question_id');
    }
}
