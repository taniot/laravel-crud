<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PastaRequest;
use App\Models\Pasta;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastas = Pasta::all();
        return view('pasta.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pasta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PastaRequest $request)
    {

        //salvo dati in arrivo dal form
        $data = $request->validated();
        //creo un modello Pasta
        $newPasta = new Pasta();

        //mapping dei campi
        // $newPasta->src = $data["src"];
        // $newPasta->titolo = $data["titolo"];
        // $newPasta->tipo = $data["tipo"];
        // $newPasta->cottura = $data["cottura"];
        // $newPasta->peso = $data["peso"];
        // $newPasta->descrizione = $data["descrizione"];

        //non abbiamo ID

        //salvataggio in tabella
        $newPasta->fill($data);
        $newPasta->save();

        // return redirect()->route('pastas.show', $newPasta->id);
        return to_route('pastas.show', $newPasta->id);

}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pasta $pasta)
    {
      //$pasta = Pasta::find($id);

      return view('pasta.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasta $pasta) //Pasta $pasta
    {
        return view('pasta.edit', compact('pasta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PastaRequest $request, Pasta $pasta)
    {
        //$request->validated();

        //prendiamo i dati del modulo
        $data =  $request->validated();;

        // //mapping dei campi
        // $pasta->src = $data["src"];
        // $pasta->titolo = $data["titolo"];
        // $pasta->tipo = $data["tipo"];
        // $pasta->cottura = $data["cottura"];
        // $pasta->peso = $data["peso"];
        // $pasta->descrizione = $data["descrizione"];

        // //save
        // $pasta->save();

        $pasta->update($data);

        //return redirect()->route('pastas.show', $pasta->id);
        return to_route('pastas.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasta $pasta)
    {
        $pasta->delete();
        return to_route('pastas.index');
    }
}
