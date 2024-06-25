<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Email;

class OtpCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'email',
        'otp_code',
        'expired_at',
    ];
}
