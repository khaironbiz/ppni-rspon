<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Code extends Model
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
    public function child()
    {
        return $this->hasMany(Code::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Code::class, 'parent_id');
    }

    public function module()
    {
        return $this->hasMany(Model::class, 'metode');
    }
    public function gender_user()
    {
        return $this->hasMany(User::class, 'gender');
    }
    public function jenis_tugas()
    {
        return $this->hasMany(Task::class, 'jenis_tugas');
    }
    public function pekerjaan()
    {
        return $this->hasMany(User::class, 'pekerjaan');
    }
    public function agama()
    {
        return $this->hasMany(User::class, 'agama');
    }
    public function user_roles()
    {
        return $this->belongsToMany(User::class);
    }
    public function user_education(){
        return $this->hasMany(UserEducation::class, 'user_id');
    }
    public function curriculum(){
        return $this->hasMany(Curriculum::class, 'user_id');
    }

}
