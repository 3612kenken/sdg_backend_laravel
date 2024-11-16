<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;

class PlansController extends Controller
{
    public function createPlan(Request $request){
     $createPlanfields =  $request->validate
        ([

            'plan_id'=>'required',
            'plan' => 'required',
            'id' => 'required'

        ]);

       $plans = Plans::create($createPlanfields);

         //event(new Registered($useraccount));

         return 'Plan Created';
    }
}
