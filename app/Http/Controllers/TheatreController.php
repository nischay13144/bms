<?php

namespace App\Http\Controllers;

use App\Showtime;
use App\Theatre;
use Illuminate\Http\Request;

class TheatreController extends Controller
{
    //
    public function index(){
        $theatres = Theatre::all();
        return view('theatres.index',compact('theatres'));
    }
    public function show($id){

        $theatre = Theatre::find($id);
        $showtime = Showtime::all();
        $user = auth()->user();
        //dd($user);
        return view('theatres.show',compact('theatre','user'));
    }

//    public function create(){
////        $genres = Genre::all();
////        $artists = Artist::all();
//        //dd($genres);
//        return view('movies.create');
//    }

}
