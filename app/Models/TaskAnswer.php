<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskAnswer extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasUlids;

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
    public function task_answer_detail()
    {
        return $this->hasMany(TaskAnswerDetail::class);
    }
}
