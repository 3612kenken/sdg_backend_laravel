<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags;

class TagsController extends Controller
{
   public function createTags(Request $request){
        
        $createTagfields =  $request->validate
        ([
            'tags_id'=>'required',
            'tag_name' => 'required',
            'tag_icon' => 'required',
            'id' => 'required'
        ]);

       $article = Tags::create($createTagfields);

         //event(new Registered($useraccount));

         return 'Tags Created';
        
    }
}
