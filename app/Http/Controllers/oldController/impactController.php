<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\impact;

class impactController extends Controller
{
    public function createImpact(Request $request){
        $createImpactfields =  $request->validate
            ([
                'impact_id'=>'required',
                'impact' => 'required',
                'id' => 'required'
            ]);

           $impact = impact::create($createImpactfields);

             //event(new Registered($useraccount));

             return 'Impact Created';
    }
}
