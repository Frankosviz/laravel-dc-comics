<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request)
    {
        // metodo per far funzionare la searchbar
        if (!empty($request->query("search"))) {
            $condition = $request->query("search");
            $comics = Comic::where("condition", $condition)->get();
        } else {
            $comics = Comic::all();    
        }
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Prelevo i dati del form dalla request
        // $form_data = $request->all();
        // // Creo il nuovo Comic della classe Comic
        // $new_comic = new Comic();
        // // Vado a prendere dal form solo i valori che sono nel model scritti nel $fillable
        // $new_comic->fill($form_data);
        // // Salvo
        // $new_comic->save();
        $form_data = $request->all();
        // // dd($form_data);

        // $new_comic = new Comic();
        // $new_comic->title = $form_data['title'];
        // $new_comic->author = $form_data['author'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->condition = $form_data['condition'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->release_date = $form_data['release_date'];
        // $new_comic->rare = $form_data['rare'];
        // $new_comic->save();

        $new_comic = Comic::create($form_data);
        return redirect()->route("comics.index");

        // $new_comic = Comic::create($form_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  object Comic $id
     * 
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
     {
    //     $comic -> delete();
    //     // Ritorna la index ma insieme ad un messaggio flash che scomparirà dopo un refresh
    //     return redirect()->route("comics.index")->with("message", "Hai cancellato con successo il comic $comic->title");
     }
}
