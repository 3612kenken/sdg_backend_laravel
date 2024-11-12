<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\technical;

class technicalController extends Controller
{
    public function createTechnical(Request $request){
        $createTechnicalfields =  $request->validate
            ([

                'technical_id'=>'required',
                'technicals' => 'required',
                'resource_id' => 'required'

            ]);

           $technical = technical::create($createTechnicalfields);

             //event(new Registered($useraccount));

             return 'Mechanism Created';
    }
}
