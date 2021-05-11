@extends('layouts/layout')

@section('Acceso')
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/Logo.png')}}" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </div>
</nav> --}}
@endsection

@section('Portada')
<div class="gallery">
    <div class="gallery-container">
      <img class="gallery-item gallery-item-1" src="https://www.disok.com/8517-large_default/lote-50-mascarillas-higienicas-infantiles-algodon-cartoon.jpg" data-index="1">
      <img class="gallery-item gallery-item-2" src="http://fakeimg.pl/300/?text=2" data-index="2">
      <img class="gallery-item gallery-item-3" src="http://fakeimg.pl/300/?text=3" data-index="3">
      <img class="gallery-item gallery-item-4" src="http://fakeimg.pl/300/?text=4" data-index="4">
      <img class="gallery-item gallery-item-5" src="http://fakeimg.pl/300/?text=5" data-index="5">
    </div>
    <div class="gallery-controls"></div>
  </div>


@endsection