<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Movie extends Model
{
    //
    protected $fillable = ['name','release_date'];
//
    public function theatres(){
        return $this->belongsToMany(Theatre::class);
    }
    public function showtimes(){
        return $this->belongsToMany(Showtime::class);
    }

//    public function reviews(){
//        return $this->hasMany(Review::class);
//    }
//    public function genres(){
//        return $this->belongsToMany(Genre::class);
//    }
//
//    public function addReview($body,$rating){
//        Review::create([
//            'user_id' => auth()->user()->id,
//            'body' => $body,
//            'movie_id' => $this->id,
//            'rating' => $rating
//        ]);
//    }

//    public function addArtist($artist_id,$role_id){
//        ArtistMovie::create([
//            'artist_id' => $artist_id,
//            'movie_id' => $this->id,
//            'role_id' => $role_id
//        ]);
//    }


}
