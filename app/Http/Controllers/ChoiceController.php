<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Choice;
use App\User;

class ChoiceController extends Controller
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
        if ($this->supportTime()) {
            $item = "Подбор возможен не чаще чем один раз в 7 дней!";
            return view('choice', compact('item'));
        }
        $choice_one = Choice::where('status', 0)->first();
        $id_one = Auth::id();
        if (isset($choice_one)) {
            
            $id_two = $choice_one->user_id;

            if ($id_one == $id_two) {
                $item = "Для вас еще не подобран партнер!";
                return view('choice', compact('item'));
            }}
        if (isset($choice_one)) {  /*Если да, то нужно задать соответствие и создать/редактировать пользователя.*/
            
            

            $choice_one->status = $id_one;
            $choice_one->save();
            $choice_two = Choice::where('user_id', $id_one)->first();
            if (isset($choice_two)) {
                $choice_two->status = $id_two;
                $choice_two->save();
            }else{
                $choice_tre = new Choice;
                $choice_tre->user_id = $id_one;
                $choice_tre->status = $id_two;
                $choice_tre->save();
            }
            $item = "Партнер подобран!";
                return view('choice', compact('item'));
            
        }else{
            $choice_tyu = Choice::where('user_id', $id_one)->first();
            if (isset($choice_tyu)) {
                $choice_tyu->status = '0';
                $choice_tyu->save();
            }else{
            $choice_for = new Choice;
                $choice_for->user_id = Auth::id();
                $choice_for->save();

                
            }
            $item = "Заявка на подбор создана! Ожидание партнера.";
                return view('choice', compact('item'));
        }
  
    }

    //  Проверка есть ли 7 дней с последнего подбора или нет
    public function supportTime()
    {   

        $id_one = Auth::id();
        $choice_two = Choice::where('user_id', $id_one)->first();
         if (isset($choice_two)) {
                 $one_time = $choice_two->updated_at;
        $ydh = Carbon::now()->addDays(-7);
        if ($one_time >= $ydh) {
            return true;
        }}
       
        return false;
        
    }
}

