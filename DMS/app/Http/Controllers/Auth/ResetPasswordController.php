<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    public function __construct()
    {
        $this->redirectTo = route('login');
    }

    protected function validationErrorMessages()
    {
        return [
            'email.required' => 'အီးမေးလ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'email.email' => 'အီးမေးလ်ပုံစံအမှန်ဖြည့်ရန်လိုအပ်ပါသည်',
            'password.required' => 'လျှို့ဝှက်နံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'password.min' => 'လျှို့ဝှက်နံပါတ်အနည်းဆုံး၈လုံးဖြည့်ရန်လိုအပ်ပါသည်',
            'password.confirmed' => 'ပြန်ရိုက်ထည့်သောလျှို့ဝှက်နံပါတ်နှင့်မတူပါ',
        ];
    }
}
