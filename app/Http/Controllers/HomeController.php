<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Choice;
use App\User;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        $id_one = Auth::id();
        $choice_one = User::where('id', $id_one)->first();

        $choice_two = Choice::where('user_id', $id_one)->first();
         if (isset($choice_two)) {
            $one_r = $choice_two->status;
            if ($one_r !== 0) {
                $choice_tre = User::where('id', $one_r)->first();
                return view('user', compact('choice_one', 'choice_tre'));
            }else{
                return view('user', compact('choice_one'));
                } 
                
            }else{
        return view('user', compact('choice_one'));
        } 
        
    }
}
