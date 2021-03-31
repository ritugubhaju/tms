<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
     
        return view('index');
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
       
    }
}
