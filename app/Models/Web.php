<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;
    use HasUlids;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function pic(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
