<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check() && Auth::user()->role_id == 1)
        {   
            $this->redirectTo = route('user.home');
        }
        else
        {   
            $this->redirectTo = route('admin.dashboard');
        }
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => ['required'],
            'password' => ['required'],
        ],[
            'email.required' => 'အီးမေးလ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'password.required' => 'လျှို့ဝှက်နံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin.dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

//    protected function sendFailedLoginResponse(Request $request)
//{
//    throw ValidationException::withMessages([
//           'username or password is incorrect!!!'
//        ]);
//}

}
