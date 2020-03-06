<?php

namespace App\Http\Controllers;
use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        $candidates = Candidate::all();

        return view('candidate.index',compact('candidates'));
    }

    public function create(){
        return view('candidate.create');
    }
    public function store(){
        $data = request() -> validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'identify_number' => 'required',
            
            'priority' => 'required',
            'admission_form' => 'required',
            'highschool_name' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',

        ]);
        Candidate::create($data);
            
        return redirect('/candidates');
    }
}
