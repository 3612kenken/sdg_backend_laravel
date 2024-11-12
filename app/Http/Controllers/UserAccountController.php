<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserAccount;

class UserAccountController extends Controller
{
    public function register(Request $request){
        
        $registerfields =  $request->validate
        ([
        
            'fullname' => ['required', 'min:3', 'max:100'],
            'username' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:6', 'max:100'],
            'designation' => ['required']

        ]);
$registerfields['password'] = bcrypt($registerfields['password']);
       $user = UserAccount::create($registerfields);

         //event(new Registered($useraccount));

         return 'Hello Kenneth';
        
    }
}

