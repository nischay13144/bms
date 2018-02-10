@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>Create a Movie</h1>
        <form method="POST" action="/movies">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>

            <div class="form-group">
                <label for="release_date">Release Date:</label>
                <input type="date" class="form-control" id="release_date" placeholder="Release Date" name="release_date">
            </div>

            <div class="form-group">
                {{--<label for="genre_id">Genres:</label>--}}
                {{--<input type="text" class="form-control" id="genre_id" placeholder="Genre" name="genre_id">--}}
            Select Theatres<br>
                @foreach($theatres as $theatre)
                <input type='checkbox' name='theatres[]' value="{{$theatre->id}}">{{$theatre->name}}<br>
                @endforeach

                Select Showtimes<br>
                @foreach($showtimes as $showtime)
                    <input type='checkbox' name='showtimes[]' value="{{$showtime->id}}">{{$showtime->slots}}<br>
                @endforeach

            </div>



            <button type="submit" class="btn btn-primary">Add Movie</button>


        </form>
    </div>
@endsection