@extends('layout')

@section('content')

<div class="flex-row">
    <h1>Voeg een hond toe</h1>
</div>


<form action="/honden" method="post" enctype="multipart/form-data">
    
        @include('honden.form')

    <div class="col text-center m-3">
        <a href="/honden">Terug</a> <button class="btn btn-primary" type="submit">Toevoegen</button> 
    </div>
</form>

@endsection