

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (Auth::user()->is_admin == 1)
                    <div class="text-center">
                            Je bent ingelogd als admin!
                    </div>
                    @else
                    <div class="text-center">
                            Je bent ingelogd!
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Background image-->
    <div class="container w-screen mt-4 dashboard_bg">
    </div>

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

    
    <!-- Adding dogs button-->
    <div class="container">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Dier toevoegen +</button>
            </div>
        </div>
    </div>
    <!-- Popup -->
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Popup content-->
    <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title text-left">Dier toevoegen</h4>
        <button type="button text-right" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">

          <form action="/honden" method="post" enctype="multipart/form-data">
    
                @include('honden.form')

                <div class="row align-items-center justify-content-center m-3">
                    <button class="btn btn-primary mr-2" type="submit">Toevoegen</button> <a href="/honden">Terug</a>
                </div>
            </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  

    @endsection

