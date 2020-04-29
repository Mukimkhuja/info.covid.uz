<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function submit(HomeRequest $var){
        /* $validation=$var->validate([
            'name'=>'required|min:3|max:25',
            'message'=>'required|min:15|max:500',
            'date'=>'required|date|after:tomorrow'
        ]
        );*/
    }
}
