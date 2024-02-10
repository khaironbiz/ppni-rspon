<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    use HasFactory;
    use HasUlids;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function code_pendidikan()
    {
        return $this->belongsTo(Code::class, 'jenjang_pendidikan_id');
    }

}
