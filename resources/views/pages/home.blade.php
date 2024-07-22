@extends('layouts.app')

@section('page-title','homepage')

@section('main-content')
<section class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Animali della Riserva
            </h1>
        </div>
        @foreach ($animals as $animal)
                <article class="col-3 mb-3">
                    <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <h5 class="card-title">
                                {{$animal->id}}: {{$animal->nome}}
                            </h5>
                        </div>
                        <div class="card-body">
                            <img src="{{$animal->url_img}}" class="card-img-top" alt="img_animal">
                            <p class="card-text">
                                Specie: {{$animal->specie}}
                            </p>
                            <p class="card-text">
                                Età: {{$animal->eta}}
                            </p>
                            <p class="card-text">
                                Peso: {{$animal->peso}}
                            </p>
                            <p class="card-text">
                                Sesso: {{$animal->sesso}}
                            </p>
                            <p class="card-text">
                                Note: {{$animal->note}}
                            </p>
                        </div>
                    </div>
                </article>
        @endforeach
@endsection
