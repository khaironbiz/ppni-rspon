<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function gender_code()
    {
        return $this->belongsTo(Code::class, 'gender');
    }
    public function pendidikan_code()
    {
        return $this->belongsTo(Code::class, 'pendidikan');
    }
    public function status_menikah_code()
    {
        return $this->belongsTo(Code::class, 'status_menikah');
    }
    public function agama_code()
    {
        return $this->belongsTo(Code::class, 'agama');
    }
    public function status_pekerjaan_code()
    {
        return $this->belongsTo(Code::class, 'status_pekerjaan');
    }
    public function role_code()
    {
        return $this->belongsTo(Code::class, 'role');
    }
    public function task()
    {
        return $this->hasMany(Task::class, 'teacher_id');
    }
    public function roles()
    {
        return $this->hasMany(UserRole::class, 'user_id');
    }
}
