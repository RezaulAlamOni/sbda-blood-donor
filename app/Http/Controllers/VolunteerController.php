<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Imports\UsersImport;
use App\Models\BloodGroup;
use App\Models\Volunteer;
use App\Models\VolunteerArea;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Maatwebsite\Excel\Facades\Excel;
use Excel;
use Illuminate\Support\Facades\Hash;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = new User();
        if (isset($request->type)) {
            $users = $users->where('type',$request->type);
        }

        $users = $users->with(['blood_group','area','v_area'])->get();

        return response()->json(['users'=>$users]);


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
        $path = $request->file('file')->getRealPath();
        $data = Excel::load($path)->get();
        $data__ = [];
        $type = $request->type;
        foreach ($data as $datum) {

            try {
                $a_id = VolunteerArea::query()->where('name',$datum->area)->first();
                $a_id = $a_id ? $a_id->id : null;
                $b_grp = BloodGroup::query()->where('name',$datum->blood)->first();
                $bg_id = $b_grp ? $b_grp->id  : null;
                if ($type == 'volunteer') {
                    $cond = [
                        'email' => trim($datum->email??$datum->phone),
                    ];
                } else {
                    $cond = [
                        'email' => trim($datum->email??$datum->phone),
                    ];
                }

                $user =  User::updateOrCreate( $cond,
                    [
                        'type' => $type,
                        'name' => $datum->name,
                        'email' => trim($datum->email??$datum->phone),
                        'blood_group_id' => $bg_id,
                        'areas_id' => $a_id,
                        'phone' => $datum->phone,
                        'address' => '',
                        'password' => Hash::make($datum->phone),
                    ]);

                if ($type == 'volunteer') {
                    Volunteer::updateOrInsert(['user_id' => $user->id],[
                        'user_id' => $user->id,
                        'v_area_id' => $a_id,
                        'v_type' => '',
                        'status' => 0,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                } else {
                    Donor::updateOrCreate(
                        [
                            'user_id' => $user->id
                        ],
                        [
                            'user_id' => $user->id,
                            'current_area_id' => 1
                        ]
                    );
                }


            } catch (\Exception $exception){
                $data__[] = [$datum,$exception->getMessage()];
            }
        }
        if (count($data__)  > 0) {
            return response()->json(['status' => 'some data not insert successfully','data' => $data__]);
        }
        return response()->json(['status' => 'success']);
    }


    public function csvReader($baseUrl)
    {
        $data = array_map('str_getcsv', file($baseUrl));
        return array_slice($data, 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
