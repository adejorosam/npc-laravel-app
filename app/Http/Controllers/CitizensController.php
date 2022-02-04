<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCitizenRequest;
use App\Models\citizen;
use App\Models\ward;
use App\Models\state;
use App\Models\lga;

class CitizensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){


        $citizens = citizen::with('ward')->get();
        $data = [
            'citizens' => $citizens,
            
        ];

        return view("citizens.index",$data);

    }

    public function create(){
      
        $data['wards'] = ward::all();
        return view("citizens.create",$data);
    }
     /**
     * Add a new citizen 
     *
     * @param Request 
     *
     * @author Samson Adejoro <samsonadejoro@gmail.com>
     *
     * @return Object of citizen
     */


    public function store(StoreCitizenRequest $request){
        

        $citizen = new citizen();
        $citizen->name = $request->name;
        $citizen->gender = $request->gender;
        $citizen->address = $request->address;
        $citizen->phone = $request->phone;
        $citizen->ward_id = $request->ward;

        $citizen->save();
      

        toastr()->success('Citizen successfully created');

        return redirect()->route('citizen');
        

    }

 
}
