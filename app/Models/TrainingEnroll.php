<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingEnroll extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
    use HasUlids;

    public function class()
    {
        return $this->belongsTo(ClassEvent::class, 'class_event_id');
    }
    public function training()
    {
        return $this->belongsTo(Training::class, 'training_id');
    }
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
