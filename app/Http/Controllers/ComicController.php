<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->comicsValidationRules());

        $form_data = $request->all();
        $new_comic = new Comic;
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
        // return view('comics.store', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->comicsValidationRules());

        $form_data = $request->all();

        $comic_to_update = Comic::findOrFail($id);

        $comic_to_update->update($form_data);

        return redirect()->route('comics.show', $comic_to_update->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();

        return redirect()->route('comics.index');
    }

    protected function comicsValidationRules() {
        return [
            'title' => 'required|max:100',
            'description' => 'required|max:20000',
            'thumb' => 'required|max:20000',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50'
        ];
    }
}
