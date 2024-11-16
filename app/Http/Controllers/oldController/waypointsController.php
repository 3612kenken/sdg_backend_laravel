<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\waypoints;

class waypointsController extends Controller
{
     public function createWaypoints(Request $request){
        
        $createWaypointsfields =  $request->validate
        ([
            'waypoint_id'=>'required',
            'waypoint' => 'required',
            'id' => 'required'
        ]);

       $waypoints = waypoints::create($createWaypointsfields);

         //event(new Registered($useraccount));

         return 'Waypoints Created';
        
    }
}
