@extends('layouts.app')
@section('title','Comics')

@section('content')

<div class="container">

<p>
    {{-- sssione update --}}
    @if (session('update'))
    <div class="alert alert-success">
      {{ session('update') }}
    </div>
    @endif

    {{-- sessione delete --}}
    @if (session('delete'))
    <div class="alert alert-danger">
      {{ session('delete') }}
    </div>
    @endif
  </p>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Type</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
     @foreach($comics as $comic)
        <tr>
        <th scope="row">{{$comic->id}}</th>
        <td>{{$comic->title}}</td>
        <td>{{$comic->type}}</td>
        <td>
            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">show</a>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success">edit</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
            
            
        </td>
        </tr>
     @endforeach   
    </tbody>
    </table>
    <!-- <div>
        {{$comics->links()}}
    </div> -->
</div>
@endsection