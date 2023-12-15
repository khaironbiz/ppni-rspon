<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskAnswerDetail extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasUlids;

    public function task_answer()
    {
        return $this->belongsTo(TaskAnswer::class);
    }
    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function answer()
    {
        return $this->hasMany(QuestionAnswer::class, 'question_id');
    }
}
