@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <div class="cds-container">
        @foreach ($data as $album)
            <div class="cd">
                <img src="{{$album['poster']}}" />
                <h2>{{$album['title']}}</h2>
                <h3>{{$album['author']}}</h3>
                <h5>{{$album['year']}}</h5>
            </div>
        @endforeach
        </div>
    </div>
@endsection