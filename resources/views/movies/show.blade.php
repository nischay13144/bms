@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">


        <h1>{{$movie->name}}</h1>
        <p>{{$movie->release_date}}</p>
        <p>

        Theatres - @foreach($movie->theatres->pluck('id') as $theatre )
        <a href="/theatres/{{ $theatre }}" >{{ $theatre }}</a>
            @endforeach
        </p>
        {{--<p>--}}
        {{--Cast - @foreach($movie->artists->pluck('name') as $artist_name)--}}
            {{--<a href="/movies/artists/{{ $artist_name }}" >{{ $artist_name }}</a>--}}
            {{--@endforeach--}}
        {{--</p>--}}
        {{--<hr>--}}

        {{--<div class="comments">--}}
            {{--<h4 align="right">Reviews</h4>--}}
            {{--<ul class="list-group">--}}
                {{--@foreach($movie->reviews as $review)--}}

                    {{--<li class="list-group-item">--}}

                        {{--{{ $review->body }} <br>--}}
                        {{--<p align="right">{{ $review->rating }}</p>--}}
                        {{--<strong>--}}
                            {{--by: {{$user->name}} - {{$review->created_at->diffForHumans()}}--}}
                        {{--</strong>--}}
                    {{--</li>--}}

                {{--@endforeach--}}
            {{--</ul>--}}

        {{--</div>--}}
        {{--<br><br>--}}
        {{--<div class="card">--}}
            {{--<div class="card-block">--}}
                {{--<form method="POST" action="/movies/{{ $movie->id }}/reviews">--}}
                    {{--{{ csrf_field() }}--}}

                    {{--<div class="form-group">--}}
                        {{--<textarea placeholder= "Stars" class="form-control" name="rating" rows="1" required></textarea>--}}
                        {{--<br><textarea placeholder= "Your Review Here" class="form-control" name="body" rows="3"></textarea>--}}

                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<button type="submit" class="btn btn-primary">Add Review</button>--}}
                    {{--</div>--}}




                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>



@endsection