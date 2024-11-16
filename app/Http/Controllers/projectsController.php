<?php

namespace App\Http\Controllers;
use App\Models\Tags;
use App\Models\Content;
use App\Models\Project;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class projectsController extends Controller
{

    function concatenateArray($strings, $separator = ':*+!/:') {
        if (is_string($strings)) {
            return $strings;
        }
        return implode($separator, $strings);
    }

    function splitArray($concatenatedString, $separator = ':*+!/:') {
        if (strpos($concatenatedString, $separator) === false) {
            return $concatenatedString;
        }
        return explode($separator, $concatenatedString);
    }

    public function index(){
        $projects = Project::all();

        $fetch_form = [];
        foreach ($projects as $project) {

            $gallery_form = [];
            foreach ($project->gallery as $gallery) {
                $gallery_form[] = [
                    'id' => $gallery->id,
                    'image' => "sdg/project/{$project->title}/ched-marsu.jpg",
                    'caption' => $gallery->caption,
                    'alt' => $gallery->alt,
                ];
            }

            $fetch_form[] = [
                'id' => $project->id,
                'image' => $project->image,
                'title' => $project->title,
                'subtitle' => $project->subtitle,
                'author' => $project->author,
                'date' => $project->proj_date,
                'link' => "/sdg/project/{$project->id}/" . urlencode($project->title),
                'logo' => "/sdg/project/marsu-" . urlencode($project->title) . ".jpg",
                'cotent' => [
                    ['background' => $project->content->background],
                    ['highlights' => $this->splitArray($project->content->highlights)],
                    ['impact' => $this->splitArray($project->content->impact)],
                    ['outcomes' => $this->splitArray($project->content->outcomes)],
                    ['plans' => $this->splitArray($project->content->plans)],
                ],
                'conclusion' => $project->conclusion,
                'cta' => $project->cta,  
                'tag' => [
                    'name' => $this->splitArray($project->tag->name),
                    'icons' => $this->splitArray($project->tag->icons)
                ],
                'gallery' => $gallery_form
            ];
        };

        return response()->json($fetch_form, 200);
    }

    public function upload(Request $request){
        $validator= Validator::make($request->all(),
        [
            'image'=>'required',
            'title'=>'required',
            'subtitle'=>'required', 
            'author'=>'required',
            'proj_date'=>'required|date',
            'content_background' => 'required',
            'content_highlights' => 'required',
            'content_impact' => 'required',
            'content_outcomes' => 'required',
            'content_plans' => 'required',
            'conclusion'=>'required',
            'cta'=>'required',
            'tags_name' => 'required',
            'tags_icons' => 'required',
            'galleries' => 'required',
            'galleries.*.caption' => 'required',
            'galleries.*.alt' => 'required'
        ]);
        
        if($validator->fails())
        {
            $message = $validator->messages()->all()[0];
            $data = [
                "status" => 422,
                "message" => $message
            ];
            return response()->json($data, 422);
          
        }else {
            $projects = new Project;
            $projects->image=$request->image;
            $projects->title=$request->title;
            $projects->subtitle=$request->subtitle;
            $projects->author=$request->author;
            $projects->proj_date=$request->proj_date;
            $projects->conclusion=$request->conclusion;
            $projects->cta=$request->cta;
            $projects->save();

            $content_form = [
                'projects_id' => $projects->id,
                'background' => $request->content_background,
                'highlights' => $this->concatenateArray($request->content_highlights),
                'impact' => $this->concatenateArray($request->content_impact),
                'outcomes' => $this->concatenateArray($request->content_outcomes),
                'plans' => $this->concatenateArray($request->content_plans)
            ];
            Content::create($content_form);

            $tag_form = [
                'projects_id' => $projects->id,
                'name' => $this->concatenateArray($request->tags_name),
                'icons' => $this->concatenateArray($request->tags_icons),
            ];
            Tags::create($tag_form);

            foreach ($request->galleries as $gallery) {
                $gallery_form = [
                    'projects_id' => $projects->id,
                    'caption' => $gallery['caption'],
                    'alt' => $gallery['alt']
                ];
                Gallery::create($gallery_form);
            }

            $data=[
                "status"=>200,
                "message"=>'Data Uploaded'
            ];

            return response()->json($data, 200);

        }
    }


    public function edit(Request $request){
        
        $id = request()->route('id');
        $project = Project::where('id', $id)->first();   
        if ($project == null) {
            $data = [
                "status" => 404,
                "message" => "Id does not exist"
            ];
            return response()->json($data, 404);
        }

        $validator= Validator::make($request->all(),
        [
            'image'=>'required',
            'title'=>'required',
            'subtitle'=>'required', 
            'author'=>'required',
            'proj_date'=>'required|date',
            'content_background' => 'required',
            'content_highlights' => 'required',
            'content_impact' => 'required',
            'content_outcomes' => 'required',
            'content_plans' => 'required',
            'conclusion'=>'required',
            'cta'=>'required',
            'tags_name' => 'required',
            'tags_icons' => 'required',
            'galleries' => 'required',
            'galleries.*.caption' => 'required',
            'galleries.*.alt' => 'required'
        ]);
        
        if($validator->fails())
        {
            $data=[
                "status"=>422,
                "message"=>$validator->messages()
            ];
            
            return response()->json($data, 422);

        }else{
            $project->image=$request->image;
            $project->title=$request->title;
            $project->subtitle=$request->subtitle;
            $project->author=$request->author;
            $project->proj_date=$request->proj_date;
            $project->conclusion=$request->conclusion;
            $project->cta=$request->cta;
            $project->save();

            $content_form = [
                'background' => $request->content_background,
                'highlights' => $this->concatenateArray($request->content_highlights),
                'impact' => $this->concatenateArray($request->content_impact),
                'outcomes' => $this->concatenateArray($request->content_outcomes),
                'plans' => $this->concatenateArray($request->content_plans)
            ];
            $content = Content::where('projects_id', $project->id);
            $content->update($content_form);

            $tag_form = [
                'name' => $this->concatenateArray($request->tags_name),
                'icons' => $this->concatenateArray($request->tags_icons),
            ];
            $tags = Tags::where('projects_id', $project->id);
            $tags->update($tag_form);

            Gallery::where('projects_id', $id)->delete();
            foreach ($request->galleries as $gallery) {
                $gallery_form = [
                    'projects_id' => $id,
                    'caption' => $gallery['caption'],
                    'alt' => $gallery['alt']
                ];
                Gallery::create($gallery_form);
            }

            $data=[
                "status"=>200,
                "message"=>'Data Updated'
            ];
            return response()->json($data, 200);

        }
    }
    public function delete($id){
        $projects =  Project::find($id);
        $projects->delete();
        $data=[
            "status"=>200,
            "message"=>'Data Deleted'
        ];

        return response()->json($data, 200);
    }
}
