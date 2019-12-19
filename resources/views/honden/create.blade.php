@extends('layout')

@section('content')

<div class="flex-row">
    <h1>Voeg een hond toe</h1>
</div>


<form action="/honden" method="post" enctype="multipart/form-data">
    
        @include('honden.form')

    <div class="row align-items-center justify-content-center m-3">
        <button class="btn btn-primary mr-2" type="submit">Toevoegen</button> <a href="/honden">Terug</a>
    </div>
</form>

@endsection