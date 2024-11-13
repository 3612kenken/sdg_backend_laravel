<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcomes;

class OutcomesController extends Controller
{
    public function createOutcome(Request $request){
     $createOutcomefields =  $request->validate
        ([

            'outcome_id'=>'required',
            'outcome' => 'required',
            'id' => 'required'

        ]);

       $outcomes = Outcomes::create($createOutcomefields);

         //event(new Registered($useraccount));

         return 'Outcome Created';
    }
}
