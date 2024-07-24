@extends('layouts.app')

@section('page-title')
Edit_animal
@endsection

@section('main-content')
<div class="bg-dark m-5 rounded-pill opacity-75">
    <form action="{{route('pages.store')}}" method="POST" >
        @csrf
        <div class="row justify-content-center">
            <div class="mb-3 col-4 ">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome animale" id="nome" name="nome"
                value="{{ $animal->nome }}">

                <label for="specie">specie</label>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="specie dell'animale" id="specie" name="specie"
                value="{{ $animal->specie }}">

                <label for="eta">Età</label>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Età dell'animale" id="eta" name="eta"
                value="{{ $animal->eta}}">

                <label for="peso">Peso</label>
                <input type="number"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Peso dell'animale in kg" id="peso" name="peso"
                value="{{ $animal->peso}}">

                <label for="sesso">Sesso</label>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Sesso dell'animale" id="sesso" name="sesso"
                value="{{ $animal->sesso}}">

                <label for="url_img">Immagine</label>
                <input type="url" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="URL dell'immagine dell'animale" id="url_img" name="url_img"
                value="{{ $animal->url_img}}">

                <label for="note">Note</label>
                <textarea class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Note aggiuntive sull'animale" id="note" name="note"
                value="{{ $animal->note}}">
                </textarea>


            </div>
            <div class="d-flex justify-content-center ">

                <input class="btn btn-primary mx-2" type="submit" value=" Modifica{{ $animal}}">
                <input class="btn btn-warning mx-2" type="reset" value="Resetta campi">

            </div>
        </div>

    </form>
</div>

@endsection
