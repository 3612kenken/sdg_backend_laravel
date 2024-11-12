<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resources;

class resourcesController extends Controller
{
     public function createResources(Request $request){
        $createResourcesfields =  $request->validate
          ([

                'resource_id'=>'required',
                'id' => 'required'

            ]);

           $resources = resources::create($createResourcesfields);

             //event(new Registered($useraccount));

             return 'Impact Created';
    }
}
