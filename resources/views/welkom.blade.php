@extends('layouts.header')

@section('content')
<div class="w-screen welkom_bg">
    <div class="container text-center div-center">
        <h1>“Ik zorg niet alleen voor Guusje, <br> Guusje zorgt ook voor mij”</h1>
            <p>Henk en zijn hond Guusje werden gematcht via Find a Paw.  <a class="btn btn-link"> Lees hun volledige verhaal</a></p>
            <div class="container text-center mt-5">
                <button type="submit" class="btn btn-primary" href="{{ route('login') }}"> 
                Vind jouw match
                </button>
                <button type="submit" class="btn btn-secondary"> 
                Lees meer ervaringen
                </button>
            </div>
    </div>
</div>
@include('layouts.footer')
@endsection