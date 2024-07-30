@extends('layouts.app')

@section('page-title','Laravel Base CRUD - Animal Reserve')

@section('main-content')
<section class="container">
    <div class="row my-5">
        @if (session('message_delete'))
        <div class="alert alert-success">
            {{ session('message_delete') }}
        </div>
        @elseif (session('message_restore'))
        <div class="alert alert-success">
            {{ session('message_restore') }}
        </div>
        @endif
        <article class="row d-flex justify-content-center">
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

@section('custom-scripts')
    @vite('resources/js/delete_confirm.js')
    @endsection
