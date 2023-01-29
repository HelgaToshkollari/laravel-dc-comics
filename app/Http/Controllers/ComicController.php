<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use DateTime;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

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

        return view ("comics.index", [
            "comics" => $comics
        ]

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $comic= new Comic();
        $comic->title = $data['title'];
        $comic->thumb = $data['thumb'];
        $comic->price =(float)$data['price'];
        $comic->series =$data['series'];
        $comic->type=$data['type'];
        $comic->sale_date = $data['sale_date'];
        $comic->save();

        return redirect()->route("comics.show",$comic->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $comic = Comic::findOrFail($id);
        return view ("comics.show",  [
            "comic" => $comic
        ]);

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

        if(!$comic){
           abort(404);

        }
        return view ("comics.edit",  [
            "comic" => $comic
        ]);

        

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
        $data=$request->all();
        $comic= new Comic();
        $comic->title = $data['title'];
        $comic->thumb = $data['thumb'];
        $comic->price =(float)$data['price'];
        $comic->series =$data['series'];
        $comic->type=$data['type'];
        $comic->sale_date = $data['sale_date'];
        $comic->save();

        return redirect()->route("comics.show",$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        
        return redirect()->route("comics.index");
    }
}
