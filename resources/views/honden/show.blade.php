@extends('layout')

@section('content')

<h1>Hond details</h1>

<div>
    <a href="/honden">Terug</a>
</div>

@if($dog->image)
    <div class="row">
        <div class="col-12"><img src="{{ asset('storage/' . $dog->image) }}" alt="" class="img-thumbnail"></div>
    </div>
@endif



<strong>Naam</strong>
<p>{{ $dog->name }}</p>

<strong>Leeftijd</strong>
<p>{{ $dog->age }}</p>

<strong>Ras</strong>
<p>{{ $dog->breed }}</p>

<strong>Geslacht</strong>
<p>{{ $dog->gender }}</p>

<strong>Koppel</strong>
<p>{{ $dog->pair }}</p>

<strong>Kan met andere honden</strong>
<p>{{ $dog->other_dogs }}</p>

<strong>Kan met andere katten</strong>
<p>{{ $dog->other_cats }}</p>

<strong>Kan met kinderen</strong>
<p>{{ $dog->with_kids }}</p>

<strong>Gecastreerd/gesterilliseerd</strong>
<p>{{ $dog->castrated }}</p>

<strong>Kan alleen thuis blijven</strong>
<p>{{ $dog->home_alone }}</p>

<strong>Kan in de auto</strong>
<p>{{ $dog->car_rides }}</p>

<strong>Kent de basiscommando's</strong>
<p>{{ $dog->commands }}</p>

<strong>Zindelijk</strong>
<p>{{ $dog->housebroken }}</p>

<strong>Kan loslopen</strong>
<p>{{ $dog->independent }}</p>

<div class="row">
    <a href="/honden/{{ $dog->id }}/edit">Bewerken</a>


<form action="/honden/{{ $dog->id }}"  method="post">
        @method('DELETE')
        @csrf

        <button>Delete</button>
    </form>
</div>

@endsection