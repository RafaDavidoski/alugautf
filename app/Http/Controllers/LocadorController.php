<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locador;

class LocadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locador = Locador::all();
        return view('locadores',compact('locador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.cadlocador');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Locador $locador)
    {
        $locador->nome = $request->input('nomeLocador');
        $locador->endereco = $request->input('endLocador');
        $locador->cpflocador = $request->input('cpfLocador');
        $locador->telefonelocador = $request->input('telLocador');
        $locador->save();
        return redirect('/locadores');
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
        $locador = Locador::find($id);
        return view('locadordetail',compact('locador')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locador = Locador::find($id);
        if(isset($locador))
        {
            return view('layouts.editarlocador',compact('locador')); 
        }
        return redirect('/locadores');
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
        $locador = Locador::find($id);
        if(isset($locador))
        {
            $locador->nome = $request->input('nomeLocador');
            $locador->endereco = $request->input('endLocador');
            $locador->cpflocador = $request->input('cpfLocador');
            $locador->telefonelocador = $request->input('telLocador');
            $locador->save();
        }
        return redirect('/locadores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locador = Locador::find($id);
        if(isset($locador))
        {
            $locador->delete();
        }
        return redirect('/locadores');
    }
}
