<?php

namespace App\Http\Controllers;

use App\ArtistMovie;
//use App\GenreMovie;
use App\Theatre;
use App\User;
use App\MovieTheatre;
use Illuminate\Http\Request;
use App\Movie;
//use App\Genre;
//use App\Artist;

use App\Repositories\Movies;
class MovieController extends Controller
{
    //
    public function index(){
        $movies = Movie::all();
        return view('movies.index',compact('movies'));
    }
    public function show($id){
        $movie = Movie::find($id);
        $user = auth()->user();
        //dd($user);
        return view('movies.show',compact('movie','user'));
    }

    public function create(){
//        $genres = Genre::all();
//        $artists = Artist::all();
        $theatres = Theatre::all();
        //dd($genres);
        return view('movies.create',compact('theatres'));
    }

    public function store(){
        //dd(request()->all());
        $movie = Movie::create([
            'name' => request('name'),
            'release_date' => request('release_date')
        ]);

    foreach (request('theatres') as $theatreId){

        $movie_theatre = MovieTheatre::create([
           'movie_id' => $movie->id,
           'theatre_id' => $theatreId
        ]);
    }

//        $movie->theatres()->sync(request('theatres'));
//        foreach (request('artists') as $artistId){
//
//        $artist_movie = ArtistMovie::create([
//           'movie_id' => $movie->id,
//           'artist_id' => $artistId
//        ]);
//    }

//        $movie->artists()->sync(request('artists'));
//
//        $artist_movie = ArtistMovie::create([
//            'artist_id' => request('artist_id'),
//            'movie_id' => $movie->id,
//            'role_id' => request('role_id')
//        ]);
//
//        dd($artist_movie);

        return redirect()->home();
    }

}
