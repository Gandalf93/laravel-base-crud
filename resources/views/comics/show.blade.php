@extends('layouts.app')
@section('title', 'dettaglio prodotto')
@section('content')
@endsection

<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{ $comic->title }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="col-md-6">
            <p>{!!$comic->description!!}</p>
        </div>
    </div>
</div>