<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Choice;
use App\User;
use App\Meta;

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
    public function articls($new){
        $choice_one = Meta::where('link', $new)->first();

        // var_dump($new);
        return view('article', compact('choice_one'));
    }


    public function newArticls(){

        return view('newart');
    }
    public function pastArticls(Request $request){
        $wsx = $request['foto'];
        $path = Storage::disk('public')->put('uploads', $wsx);

        $new = new Meta;
        $new->title = $request['title'];
        $new->link = $request['link'];
        $new->descrip = $request['descrip'];
        $new->keyword = $request['keyword'];
        $new->h1 = $request['h1'];
        $new->h2_link = $request['h2_link'];
        $new->file = $path;
        $new->text = $request['text'];
        $new->save();
         $choice_one = 'Стстья добавлена!';
        return view('newart', compact('choice_one'));
    }
}
