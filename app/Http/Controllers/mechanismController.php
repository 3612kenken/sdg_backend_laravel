<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mechanism;

class mechanismController extends Controller
{
    public function createMechanism(Request $request){
        $createMechanismfields =  $request->validate
            ([

                'mechanism_id'=>'required',
                'planning' => 'required',
                'design' => 'required',
                'installation' => 'required',
                'testing' => 'required',
                'monitoring' => 'required',
                'id' => 'required'

            ]);

           $mechanism = mechanism::create($createMechanismfields);

             //event(new Registered($useraccount));

             return 'Mechanism Created';
    }
}
