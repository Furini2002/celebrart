@extends('layouts.main')
@section('title','Celebrart')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-tile-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container"></div>
@if(count(events)> 0 )
@else
<p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>

@endsection
