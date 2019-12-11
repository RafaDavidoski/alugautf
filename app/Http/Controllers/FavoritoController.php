<?php

namespace App\Http\Controllers;
use App\Favorito;
use Auth;

use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
      $favoritos = Favorito::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
      return view('favorito', compact('user', 'favoritos'));
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
       
      $this->validate($request, array(
        'imovel_id' =>'required',
      ));

    $favorito = new Favorito;

    $favorito->user_id = Auth::user()->id;
    $favorito->imovel_id = $request->imovel_id;


    $favorito->save();

    return redirect()->to('imoveis/'.$request->get('imovel_id'))->with('flash_message',
        'Item, '. $favorito->imovel->title.' Adicionado aos seus favoritos!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favorito = Favorito::findOrFail($id);
        $favorito->delete();

      return redirect()->route('favorito.index')
          ->with('flash_message',
           'Favorito removido com sucesso');
    }
}
