<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Article;

use Validator;

class ArticleController extends Controller
{
     public function CreateArticle(Request $request){
        
        $createArticlefields = Validator::make($request->all(),
        [
           

            'article_id' => 'required',
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
            'reminder' => 'required'

        ]);



        if($createArticlefields->fails())
        {

            $data=[
                "status"=>422,
                "message"=>$createArticlefields->messages()
            ];
            
            return response()->json($data, 422);
          

       }else{
            $article =  new Article;

            $article->article_id=$request->article_id;
            $article->headline=$request->headline;
            $article->sub_headline=$request->sub_headline;
            $article->by_line=$request->by_line;
            $article->lead_paragraph=$request->lead_paragraph; 
            $article->background_information=$request->background_information;
            $article->highlights=$request->highlights;
            $article->impact=$request->impact;
            $article->future_plans=$request->future_plans; 
            $article->conclusion=$request->conclusion;
            $article->call_to_action=$request->call_to_action;
            $article->reminder=$request->reminder;
            
            $article->save();

            $data=[
                "status"=>200,
                "message"=>'Data Uploaded'
            ];

            return response()->json($data, 200);

        }

         //event(new Registered($useraccount));

         //return 'Article Created';
        
    }

    function splitArray($concatenatedString, $separator = ':*+!/:') {
        if (strpos($concatenatedString, $separator) === false) {
            return $concatenatedString;
        }
        return explode($separator, $concatenatedString);
    }

    public function ShowArticle(){
        $articles = Article::all();

        $article_form = [];
        foreach ($articles as $article) {

             $article_form[] = [
                'article_id' => $article->article_id,
                'headline' => $article->headline,
                'sub_headline' => $article->sub_headline,
                'by_line' => $article->by_line,
                'lead_paragraph' => $article->lead_paragraph,
                'background_information' => $article->background_information,
                'highlights' => $article->highlights,
                'impact' => $article->impact,
                'future_plans' => $article->future_plans,
                'conclusion' => $article->conclusion,
                'call_to_action' => $article->call_to_action,
                'reminder' => $this->splitArray($article->reminder),
                
            ];

        };
        /*$article = Article::select(
            [
            'article_id',
            'headline',
            'sub_headline',
            'by_line',
            'lead_paragraph',
            'background_information',
            'highlights',
            'impact',
            'future_plans',
            'conclusion',
            'call_to_action',
            
        
           
            ])->get();*/
        

        $data =[
            'article' => $article_form,
        ];
        return response()->json($data, 200);
        
    }



    public function EditArticle(Request $request){

        $article_id = request()->route('article_id');
        $article = Article::where('article_id', $article_id)->first();   
        if ($article == null) {
            $data = [
                "status" => 404,
                "message" => "Id does not exist"
            ];
            return response()->json($data, 404);
        }


         $validator= Validator::make($request->all(),
        [
          
            'headline' => 'required',
            'sub_headline' => 'required',
            'lead_paragraph' => 'required',
            'background_information' => 'required',
            'highlights' => 'required',
            'impact' => 'required',
            'future_plans' => 'required',
            'conclusion' => 'required',
            'call_to_action' => 'required',
            'reminder' => 'required'
        ]);
          if($validator->fails())
        {

            $data=[
                "status"=>422,
                "message"=>$validator->messages()
            ];
            
            return response()->json($data, 422);
          

        }else{

            $article =  Article::find($article_id);
            $article->article_id=$request->article_id;
            $article->headline=$request->headline;
            $article->sub_headline=$request->sub_headline;
            
            $article->by_line=$request->by_line;
            $article->lead_paragraph=$request->lead_paragraph; 
            $article->background_information=$request->background_information;
            $article->highlights=$request->highlights;
            $article->impact=$request->impact;
            $article->future_plans=$request->future_plans; 
            $article->conclusion=$request->conclusion;
            $article->call_to_action=$request->call_to_action;
            $article->reminder=$request->reminder;

            $article->save();

            $data=[
                "status"=>200,
                "message"=>'Data Edited'
            ];
             return response()->json($data, 200);
        }
    }

     public function DeleteArticle($article_id){
        $article =  Article::find($article_id);
        $article->delete();
        $data=[
            "status"=>200,
            "message"=>'Data Deleted'
        ];

        return response()->json($data, 200);
    }
}
