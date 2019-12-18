@extends('layout')

@section('content')
<h1>Hier worden honden weergegeven.</h1>

<a href="honden/create">Nieuwe hond toevoegen</a>

@forelse($dogs as $dog)
    
            @if($dog->image)
                <div class="row">
                    <a href="honden/{{ $dog->id }}">
                    <div class="col-12"><img src="{{ asset('storage/' . $dog->image) }}" alt="" class="img-thumbnail" style="height: 200px; widht:200px;"></div>
                    </a>
                </div>
            @endif

            <p><strong>
            <a href="honden/{{ $dog->id }}">{{ $dog->name }}</a><br>
                </strong>{{ $dog->breed }}, {{ $dog->gender }}, {{ $dog->age }}</p>
                     
            @empty
                <p>Geen honden beschikbaar.</p>
            @endforelse

    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $dogs->links() }}
        </div>
    </div>

@endsection