<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lga;
use App\Models\state;
use DB;
use App\Models\citizen;
use App\Http\Requests\StoreLGARequest;
class LgaController extends Controller
{
    //verifies if user is login
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      
        $lgas = LGA::with(['state', 'wards.citizen'])->get();
        $citizens = citizen::with(['ward'])->get();
        $data = [
            'lgas' => $lgas,
            'citizens' => $citizens
            
        ];


        return view("lga.index",$data);

    }

    public function create(){
        $states = DB::table('states')->get();
        $data = [

            'states' => $states
        ];

        return view("lga.create",$data);
    }


    public function store(StoreLGARequest $request){
       

        $lga = new lga();
        $lga->name = $request->name;
        $lga->state_id = $request->state;

        $lga->save();

        toastr()->success('LGA successfully created');

        return redirect()->route("lga");


    }
}
