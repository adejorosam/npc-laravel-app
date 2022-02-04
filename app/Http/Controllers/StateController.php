<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;
use App\Http\Requests\StoreStateRequest;
use DB;
use App\models\citizen;

class StateController extends Controller
{
    //verifies if user is login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      

        $states = State::with(['lgas.wards'])->get();
        $citizens = citizen::with(['ward'])->get();

        $data = [
            'citizens' => $citizens,
            'states' => $states
        ];

        return view("state.index",$data);


    }

    public function create(){
        $lgas = DB::table('lgas')->get();

        $data = [

            'states' => $lgas
        ];
        return view("state.create",$data);
    }


    public function store(StoreStateRequest $request){
      

        $state = new state();
        $state->name = $request->name;

        $state->save();
       
        toastr()->success('State successfully created');

        return redirect()->route("state");

    }
}
