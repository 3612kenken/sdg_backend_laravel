<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Validator;

class GalleryController extends Controller
{
    public function CreateGallery(Request $request){
        
        $createGalleryfields =  $request->validate
        ([

            'gallery_image' => 'required',
            'gallery_caption' => 'required',
            'gallery_alt' => 'required'

        ]);

       $gallery = Gallery::create($createGalleryfields);

         //event(new Registered($useraccount));

         return 'Gallery Created';
        
    }
}
