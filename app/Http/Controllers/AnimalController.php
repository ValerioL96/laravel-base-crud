<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();

        return view('pages.home', compact("animals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newAnimal=Animal::create($data);

        /*
        $newAnimal= new Animal();
        $newAnimal->nome = $data['nome'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->eta = $data['eta'];
        $newAnimal->peso = $data['peso'];
        $newAnimal->sesso = $data['sesso'];
        $newAnimal->url_img = $data['url_img'];
        $newAnimal->note = $data['note'];
        $newAnimal->save()
        */

        ;

        return redirect()->route('pages.show', $newAnimal)->with('message_nuovo_animale', $newAnimal->nome . " è stato Creato con successo!!");;
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.show', compact("animal"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $data = $request->except('_token');
        $data = $request->validated();


        $animal->update($data);

        return redirect()->route('pages.show', ['animal' => $animal->id])->with('message', $animal->nome . " è stato modificato con successo!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal->delete();
        return redirect()->route('pages.index')->with('message_delete', $animal->nome . " è stato cancellato con successo!!");
    }

    /* pagina con gli animali nel cestino */
    public function deletedIndex()
    {
        $animals = Animal::onlyTrashed()->get();

        return view('pages.deleteindex', compact('animals'));
    }

    /* ripristinare elementi dal cestino */
    public function restore(string $id)
    {
        $animal = Animal::onlyTrashed()->findOrFail($id);
        $animal->restore();

        return redirect()->route('pages.index')->with('message_restore', $animal->nome . " è stato ripristinato con successo!!");
    }

    /* cancellare definitivamente un'elemento */
    public function delete(string $id)
    {
        $animal = Animal::onlyTrashed()->findOrFail($id);
        $animal->forceDelete();
        return redirect()->route('pages.deleted.index')->with('message_delete', $animal->nome . " è stato cancellato permanentemente con successo!!");
    }
}
