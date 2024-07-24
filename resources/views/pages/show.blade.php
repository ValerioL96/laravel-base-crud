@extends('layouts.app')

@section('page-title')
{{$animal->nome}}
@endsection

@section('main-content')
<section class="container">
    <div class="row justify-content-center">
        <article class="col-3 my-4">
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
                <div class="card-footer card-link d-flex justify-content-center">

                    <a href="{{route('pages.home')}}" class="btn btn-secondar">Back to do animal list</a>
                    <a href="{{route('pages.edit', ['animal' => $animal->id])}}" class="btn btn-warnig">Edit animal list</a>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection
