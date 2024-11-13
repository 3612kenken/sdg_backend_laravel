<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleReminder;

class ArticleReminderController extends Controller
{
    $createArticleReminderfields =  $request->validate
        ([

            'reminder' => 'required',
            'article_id' => 'required'

        ]);

       $ArticleReminder = ArticleReminder::create($createArticleReminderfields);

         //event(new Registered($useraccount));

         return 'Article Reminder Created';
        
    }
}
