<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class subjectController extends Controller
{
    public function createSubject(Request $request){
      $createSubjectfields =  $request->validate
        ([

            'subject_id'=>'required',
            'initiator' => 'required',
            'leader' => 'required',
            'id' => 'required'

        ]);

       $article = subject::create($createSubjectfields);

         //event(new Registered($useraccount));

         return 'Subject Created';
    }
}
