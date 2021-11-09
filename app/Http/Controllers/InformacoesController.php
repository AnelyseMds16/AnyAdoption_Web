<?php

namespace App\Http\Controllers;

use App\Models\Informacoes;
use Illuminate\Http\Request;

class InformacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("paginas/informacoes");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informacoes  $informacoes
     * @return \Illuminate\Http\Response
     */
    public function show(Informacoes $informacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informacoes  $informacoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Informacoes $informacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informacoes  $informacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informacoes $informacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informacoes  $informacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informacoes $informacoes)
    {
        //
    }
}
