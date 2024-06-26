@extends('layouts.main') 

@section('title',$event->title)

@section('content')

    <div class="col-md10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}" srcset="">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"> <ion-icon class="location-outline"></ion-icon>{{ $event->city }}</p>
            </div>
        </div>
    </div>


@endsection