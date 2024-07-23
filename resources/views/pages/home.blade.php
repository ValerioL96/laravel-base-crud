@extends('layouts.app')

@section('page-title','Laravel Base CRUD - Animal Reserve')

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
                            <img src="{{$animal->url_img}}" class="card-img-top mb-2" alt="img_animal">

                        </div>
                        <div class="card-footer card-link d-flex justify-content-center">

                            <a href="{{route('pages.show', ['animal' => $animal->id])}}" class="btn btn-primary" >Animal Detail</a>
                        </div>
                    </div>
                </article>
        @endforeach
    </div>
</section>
@endsection
