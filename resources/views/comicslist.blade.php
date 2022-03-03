@extends('layouts.app')
@section('content')
    <div class="comics">
        <div class="container">
        
            @foreach ($comics as $index => $format)
            <div class="card">
                <img src="{{$format['thumb']}}" >
                <div class="overlay">
                    {{ $format['title'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection