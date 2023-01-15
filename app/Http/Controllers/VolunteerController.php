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
        $search = $request->get('search');
        $filter = $request->get('filter');
        $filter_type = $request->get('filter_type');
        $users = new User();
        if (isset($request->type)) {
            if ($request->type == 'donor') {
                $users_id = Donor::get()->pluck('user_id');
            } else {
                $users_id = Volunteer::get()->pluck('user_id');
            }

        }
        $users = $users->whereIn('id', $users_id)
            ->with(['blood_group', 'area', 'v_area', 'donor', 'volunteer'])
            ->orderBy($filter_type, $filter);
        if ($search) {
            $users = $users->where('email', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')
                ->with([
                    'blood_group' => function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    },
                    'area' => function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    }
                ])
                ->orWhere('phone', 'like', '%' . $search . '%');
        }

        $users = $users->paginate(50);

        return response()->json(['users' => $users]);


        //
    }

    public function index1(Request $request)
    {
        $users = new User();
        $search = $request->get('search');
        $filter = $request->get('filter');
        $filter_type = $request->get('filter_type');
        if (isset($request->type)) {
            if ($request->type == 'donor') {
                $users_id = Donor::get()->pluck('user_id');
            } else {
                $users_id = Volunteer::get()->pluck('user_id');
            }

        }

        $users = $users->whereIn('id', $users_id)->with(['blood_group', 'area', 'v_area', 'donor', 'volunteer']);

        if ($filter_type == 'area') {
            $users = $users->orderBy('areas_id', $filter);
        } else if ($filter_type == 'blood_group') {
            $users = $users->orderBy('blood_group_id', $filter);;
        } else {
            $users = $users->orderBy($filter_type, $filter);
        }
        if ($search) {
            $users = $users->where('email', 'like', '%' . $search . '%')
                ->orWhere('name', 'like', '%' . $search . '%')
                ->with([
                    'blood_group' => function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    },
                    'area' => function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    }
                ])
                ->orWhere('phone', 'like', '%' . $search . '%');
        }

        $users = $users->paginate(50);

        return response()->json(['users' => []]);


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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        $data = Excel::load($path)->get();
        $data__ = [];
        $type = $request->type;
        foreach ($data as $datum) {
            if (strlen($datum['phone']) > 0 && $datum->blood != null) {
                try {
                    $a_id = VolunteerArea::query()->where('name', $datum->area)->first();
                    $a_id = $a_id ? $a_id->id : null;
                    $b_grp = BloodGroup::query()->where('name', $datum->blood)->first();
                    $bg_id = $b_grp ? $b_grp->id : null;
                    if ($type == 'volunteer') {
                        $cond = [
                            'email' => trim($datum->email ?? $datum->phone),
                            'phone' => $datum->phone,
                        ];
                    } else {
                        $cond = [
                            'email' => trim($datum->email ?? $datum->phone),
                            'phone' => $datum->phone,
                        ];
                    }

                    $user = User::updateOrCreate($cond,
                        [
                            'type' => $type,
                            'name' => $datum->name,
                            'dob' => $datum->dob ?? null,
                            'email' => trim($datum->email ?? $datum->phone),
                            'blood_group_id' => $bg_id,
                            'areas_id' => $a_id,
                            'phone' => $datum->phone,
                            'address' => '',
                            'password' => Hash::make($datum->phone),
                        ]);

                    if ($type == 'volunteer') {
                        Volunteer::updateOrInsert(['user_id' => $user->id], [
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


                } catch (\Exception $exception) {
                    $data__[] = [$datum, $exception->getMessage()];
                }
            }
        }
        if (count($data__) > 0) {
            return response()->json(['status' => 'some data not insert successfully', 'data' => $data__]);
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
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Volunteer $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
