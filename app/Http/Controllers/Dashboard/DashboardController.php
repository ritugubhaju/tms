<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
     
        return view('teacher.index');
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name'          => 'required|string',
            'gender'        => 'required|string',
            'phone'         => 'required|digits:10',
            'email'         => 'required|email',
            'address'       => 'required|string',
            'nationality'   => 'required|string',
            'dob'           => 'required|date',
        ]);
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
