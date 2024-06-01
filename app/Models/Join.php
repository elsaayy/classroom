<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;
    protected $table = 'joined';
    protected $fillable = [
        'id',
        'description',
        'teacher',
        'title',
        'token',
        'user_id',
        'image',
    ];

    public function users(){
        return $this->hasMany(User::class, 'class_id', 'class_id');
    }

}
