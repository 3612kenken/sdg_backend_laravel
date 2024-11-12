<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\environment;

class environmentController extends Controller
{
    public function createEnvironment(Request $request){
       $createEnvironmentfields =  $request->validate
            ([

                'environment_id'=>'required',
                'nature' => 'required',
                'industry' => 'required',
                'government' => 'required',
                'id' => 'required'

            ]);

           $environment = environment::create($createEnvironmentfields);

             //event(new Registered($useraccount));

             return 'Environment Created';
    }
}
