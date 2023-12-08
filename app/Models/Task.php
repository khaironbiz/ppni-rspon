<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasUlids;

    public function class()
    {
        return $this->belongsTo(ClassEvent::class,'class_event_id');
    }

    public function task_answer()
    {
        return $this->hasMany(TaskAnswer::class);
    }
    public function jenis_tugas_code()
    {
        return $this->belongsTo(Code::class,'jenis_tugas');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'teacher_id');
    }
    public function training()
    {
        return $this->belongsTo(Training::class,'training_id');
    }
}
