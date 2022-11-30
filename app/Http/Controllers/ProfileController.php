<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
    public function updateProfile(Request $request)
    {
        $file = $request->profile_photo;
        if ($file) {
            $type = 'profile';
            $extension = $file->extension();
            $name = pathinfo($file->getClientOriginalName(),PATHINFO_FILENAME).time().mt_rand();
            $destinationPath = public_path().'/images/'.$type ;
            $file->move($destinationPath,$name.'.'.$extension);

            $user = User::query()->where('id',auth()->id())
                ->update([
                    'name' => $request->name,
                    'profile_photo' => $name.'.'.$extension,
                ]);

        }

        if (strlen($request->password) > 0) {
            $user = User::query()->where('id',auth()->id())
                ->update([
                    'password' => Hash::make(($request->password))
                ]);
        }

        return response()->json(['success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
