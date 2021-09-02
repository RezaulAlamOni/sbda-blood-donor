<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->type;
        $files = $request->file;
        if (count($files) > 0) {
            $photos = [];
            foreach ($files as $file) {
//                dd($file);
                $extension = $file->extension();
                $name = pathinfo($file->getClientOriginalName(),PATHINFO_FILENAME).time().mt_rand();
                $file->storeAs('/public/images/gallery', $name .".".$extension);
                $file_ = Storage::url($name .".".$extension);
                if ($file_) {
                    array_push($photos,[
                        'photo' => $name,
                        'type' => $type,
                        'description' => 'Gallery Image Uploaded',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }

            }
            if (count($photos) > 0){
                if (Photo::insert($photos)) {
                    return response(['status' => 'success']);
                }
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
