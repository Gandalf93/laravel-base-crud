@extends('layouts.app')

@section('title', 'creazione comics')

@section('content')

<div class="container">
<form action="{{ route('comics.store') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="tit" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="tit" >
  </div>
  
  <div class="mb-3">
    <label for="img" class="form-label">Image</label>
    <input type="text" name="thumb" class="form-control" id="img">
  </div>

  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="desc" cols="30" rows="10"></textarea>
  </div>

  <div class="mb-3">
    <label for="serie" class="form-label">Series</label>
    <input type="text" name="series" class="form-control" id="serie">
  </div>
  
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" name="type" class="form-control" id="type">
  </div>

  <div class="mb-3">
    <label for="prc" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="prc">
  </div>

  <div class="mb-3">
    <label for="sale" class="form-label">Sale Date</label>
    <input type="text" name="sale_date" class="form-control" id="sale">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection