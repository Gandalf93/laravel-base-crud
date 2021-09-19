@extends('layouts.app')

@section('title', 'creazione comics')

@section('content')

<div class="container">
    <h2>Modifica Fumetto {{ $comic->id }}</h2>
<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="tit" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="tit" value="{{ $comic->title }}" >
  </div>
  
  <div class="mb-3">
    <label for="img" class="form-label">Image</label>
    <input type="text" name="thumb" class="form-control" id="img" value="{{ $comic->thumb }}">
  </div>

  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="desc" cols="30" rows="10" >{!! $comic->description !!}</textarea>
  </div>

  <div class="mb-3">
    <label for="serie" class="form-label">Series</label>
    <input type="text" name="series" class="form-control" id="serie" value="{{ $comic->series }}">
  </div>
  
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" name="type" class="form-control" id="type" value="{{ $comic->type }}">
  </div>

  <div class="mb-3">
    <label for="prc" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="prc" value="{{ $comic->price }}">
  </div>

  <div class="mb-3">
    <label for="sale" class="form-label">Sale Date</label>
    <input type="text" name="sale_date" class="form-control" id="sale" value="{{ $comic->sale_date }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection