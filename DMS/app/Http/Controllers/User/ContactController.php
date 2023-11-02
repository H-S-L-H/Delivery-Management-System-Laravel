<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'contact_name' => 'required|regex:/^[a-zA-Z ]*$/',
            'contact_phone' => 'required|numeric|regex:/^09/|digits:11',
            'contact_description' => 'required',
        ],[
            'contact_name.required' => 'ပေးပို့သူအမည်ဖြည့်ရန်လိုအပ်ပါသည်',
            'contact_name.regex' => 'Alphabetsနဲ့ white spaceသာဖြည့်လို့ရပါသည်',
            'contact_phone.required' => 'ပေးပို့သူဖုန်းနံပါတ်ဖြည့်ရန်လိုအပ်ပါသည်',
            'contact_phone.numeric' => 'နံပါတ်များသာဖြည့်လို့ရပါသည်',
            'contact_phone.regex' => '09ဖြင့်စသောဖုန်းနံပါတ်သာဖြည့်လို့ရပါသည်',
            'contact_phone.digits' => 'ဖုန်းနံပါတ်သည်နံပါတ်အလုံးရေ(၁၁)လုံးဖြစ်ရပါသည်',
            'contact_description.required' => 'ပေးပို့ချင်သည့်အကြောင်းအရာဖြည့်ရန်လိုအပ်ပါသည်',
        ]);
 
        if ($validator->fails()) {
            return redirect('/user/contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        $contact = new Contact();

        $contact->contact_name = $request->input('contact_name');
        $contact->contact_phone = $request->input('contact_phone');
        $contact->contact_description = $request->input('contact_description');

        $contact->save();

        // Retrieve the validated input...
        $validated = $validator->validated();
 
        // Retrieve a portion of the validated input...
        $validated = $validator->safe()->only(['contact_name', 'contact_phone', 'contact_description']);
        $validated = $validator->safe()->except(['contact_name', 'contact_phone', 'contact_description']);

        return view('user.contact');

    }
}
