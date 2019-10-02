<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use Request;

use App\Video;


class VideosControler extends Controller
{
    /**
     * Pobieramy liste filmów
     */

     public function index()
     {
        $videos = Video::latest()->get(); 
        return view('videos.index')->with('videos', $videos);

     }

     /**
      * jeden film
      */
    public function show($id)
    {

        $video = Video::findOrFail($id);
        return view('videos.show')->with('video', $video);
    }

    /**
     * formularz tworzenia video
     */

     public function create()
    {
        return view('videos.create');
    }

    /**
     * zapisuje film do bazy
     */

    public function store(CreateVideoRequest $request)
    {
        
        Video::create($request->all());
        return redirect('videos');
    }

    /**
     * edycja
     */

     public function edit($id)
     {
        $video = Video::findOrFail($id);
        return view('videos.edit')->with('video', $video);
     }
}
