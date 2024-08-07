@extends('layouts.app')

@section('page-title')
Added_new_animal
@endsection

@section('main-content')
<div class="bg-dark m-5 rounded-5 opacity-75">
    <form action="{{route('pages.store')}}" method="POST" >
        @csrf
        <div class="row justify-content-center">
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <div class="mb-3 col-3 ">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome animale" id="nome" name="nome">

                <label for="specie">specie</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="specie dell'animale" id="specie" name="specie">

                <label for="eta">Età</label>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Età dell'animale" id="eta" name="eta">

                <label for="peso">Peso</label>
                <input type="number"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Peso dell'animale in kg" id="peso" name="peso">

                <label for="sesso">Sesso</label>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Sesso dell'animale" id="sesso" name="sesso">

                <label for="url_img">Immagine</label>
                <input type="url" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="URL dell'immagine dell'animale" id="url_img" name="url_img">

                <label for="note">Note</label>
                <textarea class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Note aggiuntive sull'animale" id="note" name="note"></textarea>


            </div>
            <div class="d-flex justify-content-center mb-3 ">

                <input class="btn btn-primary mx-2" type="submit" value="crea un nuovo animale">
                <input class="btn btn-warning mx-2" type="reset" value="resetta campi">

            </div>
        </div>

    </form>
</div>

@endsection

@section('custom-scripts')
@vite('resources/js/alert_confirm.js')
@endsection
