<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'content',
        'user_id'
    ];

    public function users(){
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
