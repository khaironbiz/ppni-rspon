<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nira extends Model
{
    protected $table = "nira";
    protected $guarded = ['id', 'created_at', 'updated_at'];
    use HasFactory;
}
