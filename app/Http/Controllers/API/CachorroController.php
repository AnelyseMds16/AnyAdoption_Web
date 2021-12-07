<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cachorro;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CachorroController extends Controller
{
  use ApiResponse;
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cachorros = Cachorro::all();
    return $this->success($cachorros);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
        'user_id' => 'required|integer|exists:App\Models\User,id',
        'nome' => 'required|max:255',
        'idade' => 'required|max:255',
        'raca' => 'required|max:255',
        'genero' => 'required|max:255',
        'imagem' => 'image',
    ]);
    if ($validated) {
        $cachorro = new Cachorro();
        $cachorro->user_id = $request->get('user_id');
        $cachorro->nome = $request->get('nome');
        $cachorro->idade = $request->get('idade');
        $cachorro->raca = $request->get('raca');
        $cachorro->genero = $request->get('genero');
        $cachorro->save();
        return $this->success("cachorro");
    }
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