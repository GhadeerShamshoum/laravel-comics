@extends('layouts.app')
@section('content')
    <main>
        <div class="comics">
            <div class="container main">  
                @foreach ($comics as $index => $format)
                <div class="card">
                    <div class="containerImg">
                    <img src="{{$format['thumb']}}" >
                    </div> 
                    <div class="containerText">
                        {{ $format['series'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection