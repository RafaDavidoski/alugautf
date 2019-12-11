<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use App\Locador;

class ImovelController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imovel = Imovel::all();
        return view('imoveis',compact('imovel'));

    }
    public function indexhome()
    {
        $imovel = Imovel::all();
        return view('homepage',compact('imovel'));
    }
    public function indexrep()
    {
        $imovel = Imovel::all();
        return view('republicas',compact('imovel'));
    }
    public function indexqua()
    {
        $imovel = Imovel::all();
        return view('quartos',compact('imovel'));
    }
    public function indexpen()
    {
        $imovel = Imovel::all();
        return view('pensionato',compact('imovel'));
    }
    public function listagemrelacionados()
    {
        $results = DB::table('imovels')->select('nome', 'foto')
        ->where('tipo', '=', 'Republica')
        ->get();
        return view('productdetail',compact('results'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locador = Locador::all();
        return view('layouts.cadimovel',compact('locador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nomeImovel' => 'required',
            'tipoImovel' => 'required',
            'endereco' => 'required|unique:imovels',
            'valorImovel' => 'required',
            'ngaragem' => 'required',
            'nquartoImovel' => 'required',
            'nbanheiroImovel' => 'required',
            'locador_id' => 'required'
        ]);

        

        $path = $request->file('foto')->store('images','public');
        $imovel = new Imovel();
        $imovel->nome = $request->input('nomeImovel');
        $imovel->tipo = $request->input('tipoImovel');
        $imovel->telefone = $request->input('telefoneImovel');
        $imovel->endereco = $request->input('endereco');
        $imovel->valor = $request->input('valorImovel');
        $imovel->descricao = $request->input('descricaoImovel');
        $imovel->ngaragem = $request->input('ngaragem');
        $imovel->nquartos = $request->input('nquartoImovel');
        $imovel->nbanheiros = $request->input('nbanheiroImovel');
        $imovel->locador_id = $request->input('locador_id');
        $imovel->foto = $path;

        $imovel->save();

        return redirect('/imoveis');


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
    public function detalhes($id)
    {
        $imovel = Imovel::find($id);
        $related = Imovel::where('tipo', $imovel->tipo)->where('id', '!=', $id)->get();
        return view('productdetail',compact('imovel', 'related')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }
}
