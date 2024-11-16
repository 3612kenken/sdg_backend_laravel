<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Highlights;

class HighlightsController extends Controller
{
    public function createHighlight(Request $request){
        $createHighlightfields =  $request->validate
            ([
                'highlight_id'=>'required',
                'highlight' => 'required',
                'id' => 'required'

            ]);

           $highlights = Highlights::create($createHighlightfields);

             //event(new Registered($useraccount));

             return 'Highlights Created';
    }
}
