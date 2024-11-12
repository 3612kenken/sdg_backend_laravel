<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Validator;

class ArticleController extends Controller
{
     public function CreateArticle(Request $request){
        
        $createArticlefields =  $request->validate
        ([

            'headline' => 'required',
            'sub_headline' => 'required',
            'by_line' => 'required',
            'lead_paragraph' => 'required',
            'background_information' => 'required',
            'highlights' => 'required',
            'impact' => 'required',
            'future_plans' => 'required',
            'conclusion' => 'required',
            'call_to_action' => 'required',
            'add_reminder_id' => 'required'

        ]);

       $article = Article::create($createArticlefields);

         //event(new Registered($useraccount));

         return 'Article Created';
        
    }
}
