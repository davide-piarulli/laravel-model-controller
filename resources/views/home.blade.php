@extends('layout.main')

@section('content')
  <div class="container my-5 ">
    <h1>I miei film</h1>
    <div class="row">

      @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h6>ID: {{ $movie->id }}</h6>
            <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
            <h6 class="card-title">Titolo Originale: {{ $movie->original_title }}</h6>
            <h6 class="card-title">Nazionalità: {{ $movie->nationality }}</h6>
            <h6 class="card-title">Data uscita: {{ $movie->date }}</h6>
            <h6 class="card-title">Voto: {{ $movie->vote }}</h6>
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
