<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ResservationNotif;

class Restocontroller extends Controller
{
     function index(){
        return view('index');
    }
     function about(){
        return view('pages.about');
    }
     function menu(){
        return view('pages.menu');
    }
     function reservation(){
        return view('pages.reservation');
    }
     function specialdishes(){
        return view('pages.special-dishes');
    }
    function team(){
        return view('pages.team');
    }



     function store(Request $request){
        
      //  $user=$request;
       // $user->notify(new ResservationNotif());
       Mail::to("mdswac37@gmail.com")->send(new ReservationMail($request));
    
       return view('index');

    }




}
