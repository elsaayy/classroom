<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'id',
        'user_id',
        'description',
        'teacher',
        'title',
        'token',
        'image',
    ];

    public function users(){
        return $this->hasMany(User::class, 'class_id', 'id');
    }
}
