<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\financial;

class financialController extends Controller
{
    public function createFinancial(Request $request){
        $createFinancialfields =  $request->validate
            ([

                'financial_id'=>'required',
                'financials' => 'required',
                'resource_id' => 'required'

            ]);

           $financial = financial::create($createFinancialfields);

             //event(new Registered($useraccount));

             return 'Mechanism Created';
    }
}
