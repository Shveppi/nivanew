<?php

namespace App\Http\Controllers;

use Validator;
use App\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class SlideController extends Controller
{



    public function showForm() {
    	return view('pages.gallery-form');
    }




    public function save(Request $request) {

    	//return Str::slug($request->title);

    	if(!$request->hasFile('pic')) {
    		return redirect()
    				->back()
    				->withErrors('Дружище, без картинки слайдер не слайдер, добавь пожалуйста картинку в поле фото')
    				->withInput();
    	}

    	/*$data = [

    		'title' => $request->title,
    		'alttitle' => Str::slug($request->title),
    		'description' => $request->description,
    		'url' => $request->url,
    		'pic' => '',


    	];


	
		$rules = array(
			'pic' => 'image',
			'title' => 'required|unique:slides|max:255',
		);
		
		$validator = Validator::make($request->all(), $rules);


		
		if ($validator->fails()) {
			return redirect()
						->back()
                        ->withErrors($validator)
                        ->withInput();
		} else {
			return redirect()
						->back()
						->with( 'message', 'Вы добавили слайдер, просто умничко!' );
		}
*/


    	/*$pic = "";

    	if($request->hasFile('pic')) {
    		$destinationPath = "photo";
    		$file = $request->file('pic');
    		$extension = $file->GetClientOriginalExtension();
    		$fileName = rand(1111,9999).".".$extension;
    		$file->move($destinationPath, $fileName);
    		$pic = $fileName;
    	}*/

    	//$pic = "";




    		$filepath = 'slide/'.rand(11111,99999) . '.jpg'; // простая переменная с путем к папке и рандомным наименованием картинки.

	    	$image = Image::make($request->file('pic'))->greyscale();

	    	$image->resize(	null,
    					 	300, 
    					 	function ($constraint) {
    								$constraint->aspectRatio();
							})->save( $filepath, 90 ); // Сохранение картинки размеры (ширина: авто высота: 300)


	    	/*$pic = $image->filename.'.'.$image->extension;

	    	$slide = new Slide;
	    	$slide->user_id = 1;
	    	$slide->title = $request->title;
	    	$slide->description = $request->description;
	    	$slide->url = $request->url;
	    	$slide->church = $request->church;
	    	$slide->user_id = 1;
	    	$slide->active = 1;
	    	$slide->published_at = \Carbon\Carbon::now();
	    	$slide->pic = $pic;


	    	$slide->save();*/


    	


    	//return redirect()->back()->with('message', 'Пёрфект');

    	//return dd($request->file('pic'));
    }


}
