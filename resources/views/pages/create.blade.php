@extends('layouts.app')

@section('page-title')

@endsection

@section('main-content')
<form action="{{route('pages.store')}}" method="POST">
    @csrf
    <div class="row justify-content-center">
        <div class="mb-3 col-4 ">
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
        <div class="d-flex justify-content-around">

            <input class="btn btn-primary" type="submit" value="crea un nuovo animale">
            <input class="btn btn-warning" type="reset" value="resetta campi">

        </div>
    </div>

</form>
@endsection
