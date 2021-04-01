<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
     
        
        $teachers = Teacher::get();
        return view('teacher.index',compact('teachers'));
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store( Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required|min:10|numeric',
            'email' => 'required|email',
            'nationality' => 'required',
            'DOB' => 'required',
            'faculty' => 'required'
                   
        ]);
        // dd($request->all());
        $input = $request->except('subject');
        $createteacher = Teacher::create($input);
        $subjects = [];
        foreach ($request->subject as $subjects){
            $data['subject_title'] = $subjects;
            $data['teacher_id'] = $createteacher->id;
            $data['row'] = Subject::create($data);
        }
        return redirect()->route('teacher.index');

    }
}
