@extends('layouts.app')

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
    
    @include('honden.index')

    @if (Auth::user()->is_admin == 1)
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
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  @endif
</div>

@endsection



