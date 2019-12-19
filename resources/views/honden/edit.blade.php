@extends('layout')

@section('content')

<h1>Bewerken</h1>

<form action="/honden/{{ $dog->id }}" method="POST" enctype="multipart/form-data">
    
    @method('PATCH')

    @include('honden.form')

    <button class="btn btn-primary" type="submit">Opslaan</button> <a href="/honden/{{ $dog->id }}">Terug</a>

</form>

@endsection