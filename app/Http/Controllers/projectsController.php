<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\projects;


class projectsController extends Controller
{
    public function index(){
        $projects = projects::select(
            [

            'id',
            'image',
            'title',
            'subtitle',
            'author',
            'proj_date',
            'link',
            'logo',
            'background',
            'conclusion',
            'cta'

            ])->get();

        $data =[
            'projects' => $projects

        ];
        return response()->json($data, 200);
    }
    public function upload(Request $request){

        
        $validator= Validator::make($request->all(),
        [
           

            'id'=>'required',
            'image'=>'required',
            'title'=>'required',
            'subtitle'=>'required', 
            'author'=>'required',
            'proj_date'=>'required',
            'link'=>'required'
            'logo'=>'required',
            'background'=>'required',
            'conclusion'=>'required'
            'cta'=>'required'
        ]);
        
        if($validator->fails())
        {

            $data=[
                "status"=>422,
                "message"=>$validator->messages()
            ];
            
            return response()->json($data, 422);
          

        }else{
            $projects =  new projects;

            $projects->id=$request->id;
            $projects->image=$request->image;
            $projects->title=$request->title;
            $projects->subtitle=$request->subtitle; 
            $projects->author=$request->author;
            $projects->proj_date=$request->proj_date;
            $projects->link=$request->link;
            $projects->logo=$request->logo; 
            $projects->background=$request->background;
            $projects->conclusion=$request->conclusion;
            $projects->cta=$request->cta;

            $projects->save();

            $data=[
                "status"=>200,
                "message"=>'Data Uploaded'
            ];

            return response()->json($data, 200);

        }
    }
    public function edit(Request $request, $id){
        $validator= Validator::make($request->all(),
        [

            'id'=>'required',
            'image'=>'required',
            'title'=>'required',
            'subtitle'=>'required', 
            'author'=>'required',
            'proj_date'=>'required',
            'link'=>'required'
            'logo'=>'required',
            'background'=>'required',
            'conclusion'=>'required'
            'cta'=>'required'
            
        ]);
        
        if($validator->fails())
        {

            $data=[
                "status"=>422,
                "message"=>$validator->messages()
            ];
            
            return response()->json($data, 422);
          

        }else{
            $projects =  projects::find($id);

            $projects->id=$request->id;
            $projects->image=$request->image;
            $projects->title=$request->title;
            $projects->subtitle=$request->subtitle; 
            $projects->author=$request->author;
            $projects->proj_date=$request->proj_date;
            $projects->link=$request->link;
            $projects->logo=$request->logo; 
            $projects->background=$request->background;
            $projects->conclusion=$request->conclusion;
            $projects->cta=$request->cta;

            $projects->save();

            $data=[
                "status"=>200,
                "message"=>'Data Updated'
            ];

            return response()->json($data, 200);

        }
    }
    public function delete($id){
        $projects =  projects::find($id);
        $projects->delete();
        $data=[
            "status"=>200,
            "message"=>'Data Deleted'
        ];

        return response()->json($data, 200);
    }
}
