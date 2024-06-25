<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\SendEmail;
use App\Models\OtpCode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class MailController extends Controller
{
    public function sendOtp(){
        $otpCode = Str::random(5);
        $email = Auth::user()->email;
        OtpCode::updateOrCreate([
            'email' => $email,
            'otp_code' => $otpCode,
            'expired_at' => Carbon::now()->addMinutes(10)
        ]);

        $detail = [
            'otp_code' => $otpCode,
        ];

        Mail::to($email)->send(new SendEmail($detail));

        return view('settings.lupapass')->with('succes', 'Kode OTP terkirim');
    }

    public function verifyOtp(Request $request){
        try {
            $request->validate([
                'otp_code' => 'required'
            ]);

            $otpCode = OtpCode::where('otp_code', $request->otp_code)->first();

            if ($otpCode == '') {
                return view('settings.lupapass')->with('errors', 'Kode OTP Tidak Valid');
            }else if(Carbon::now()->greaterThan($otpCode->expired_at)){
                return view('settings.lupapass')->with('errors', 'Kode OTP Sudah Tidak Valid');
            }else{
                return redirect()->route('settings.newpass');
            }
        }catch(ValidationException $th) {
            return view('settings.lupapass')->with('errors', $th->errors());
        }
    }
}
