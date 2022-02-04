<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ward;
use App\Models\lga;
use App\Http\Requests\StoreWardRequest;
use DB;

class WardController extends Controller
{
    //verifies if user is login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      
        $wards = ward::with(['citizen','lga.state'])->get();
        $title = "List of wards";
        $data = [
            'wards' => $wards,
            "title" => $title
        ];

        return view("ward.index",$data);

    }

    public function create(){
        $lgas = lga::all();
        $title = "Create ward";
        $data = [
            'lgas' => $lgas,
            'title' => $title
        ];
        return view("ward.create",$data);
    }


    public function store(StoreWardRequest $request){
        

        $ward = new ward();
        $ward->name = $request->name;
        $ward->lga_id = $request->lga;

        $ward->save();
        
        toastr()->success('Ward successfully created');

        return redirect()->route("ward");


    }

 


}
