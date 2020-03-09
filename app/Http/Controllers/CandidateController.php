<?php

namespace App\Http\Controllers;
use App\Candidate;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCandidateRequest;
class CandidateController extends Controller
{
    public function index(){
        $candidates = Candidate::all();

        return view('candidate.index',compact('candidates'));
    }

    public function create(){
        return view('candidate.create');
    }
    public function store(StoreCandidateRequest $request){
        // $data = request() -> validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'birthday' => 'required',
        //     'gender' => 'required',
        //     'email' => 'required|email|unique:candidates,email',
        //     'phone_number' => 'required|numeric|unique:candidates,phone_number',
        //     'identify_number' => 'required|numeric|unique:candidates,identify_number',
        //     'password'  => 'required|confirmed',
        //     'priority' => 'required',
        //     'admission' => 'required',
        //     'highschool_name' => 'required',
        //     'province' => 'required',
        //     'district' => 'required',
        //     'ward' => 'required',

        // ]);
        // Candidate::create($data);

        Candidate::create($request -> validated());
            
        return redirect('/candidates');
    }
}
