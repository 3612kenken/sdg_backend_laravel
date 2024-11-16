<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;
use App\Models\objectives;


class objectivesController extends Controller
{
    public function createObjective(Request $request){
     $createObjectivefields =  $request->validate
        ([

            'objective_id'=>'required',
            'objective' => 'required',
            'id' => 'required'

        ]);

       $objectives = objectives::create($createObjectivefields);

         //event(new Registered($useraccount));

         return 'Objective Created';
    }
}
