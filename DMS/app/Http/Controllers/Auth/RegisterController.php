<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'regex:/^[a-zA-Z ]*$/', 'max:20'],
            'phone' => ['required', 'numeric', 'regex:/^09/', 'digits:11'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required','min:8','same:password'],
        ], [
            'name.required' => 'အမည်ဖြည့်ရန်လိုအပ်ပါသည်',
            'name.regex' => 'Alphabetsနဲ့ white spaceသာဖြည့်လို့ရပါသည်',
            'name.max' => 'အလုံးရေအများဆုံး (20)လုံးသာဖြည့်လို့ရပါသည်',
            'phone.required' => 'ဖုန်းနံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'phone.numeric' => 'နံပါတ်များသာဖြည့်လို့ရပါသည်',
            'phone.regex' => '09ဖြင့်စသောဖုန်းနံပါတ်သာဖြည့်လို့ရပါသည်',
            'phone.digits' => 'ဖုန်းနံပါတ်သည်နံပါတ်အလုံးရေ(၁၁)လုံးဖြစ်ရပါမည်',
            'email.required' => 'အီးမေးလ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'email.email' => 'အီးမေးလ်ပုံစံအမှန်ဖြည့်ရန်လိုအပ်ပါသည်',
            'email.unique' => 'ရှိပြီးသားအီးမေးလ်ဖြစ်ပါသည်',
            'password.required' => 'လျှို့ဝှက်နံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'password.min' => 'လျှို့ဝှက်နံပါတ်အနည်းဆုံး၈လုံးဖြည့်ရန်လိုအပ်ပါသည်',
            'password.confirmed' => 'ပြန်ရိုက်ထည့်သောလျှို့ဝှက်နံပါတ်နှင့်မတူပါ',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'role_id' => 1,
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

//        $this->guard()->login($post);
//
//        return $this->registered($data, $post)
//                        ?: redirect($this->redirectPath());

        //return redirect()->route('user.home', $post);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        
        return redirect('/');
    }
}
