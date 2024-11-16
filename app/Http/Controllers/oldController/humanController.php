<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\human;

class humanController extends Controller
{
    public function createHuman(Request $request){
        $createHumanfields =  $request->validate
            ([

                'human_id'=>'required',
                'humans' => 'required',
                'resource_id' => 'required'

            ]);

           $human = human::create($createHumanfields);

             //event(new Registered($useraccount));

             return 'Mechanism Created';
    }
}
