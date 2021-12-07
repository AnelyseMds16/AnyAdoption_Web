<?php

namespace App\Http\Controllers;

use App\Models\Cachorro;
use Illuminate\Http\Request;
use App\Models\User;

class CachorroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cachorros = Cachorro::all();
        return view("paginas/cachorro", compact('cachorros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view("paginas/cachorro/create", compact('users'));
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
            'user_id' => 'required|integer',
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
            
            /*$path = $request->file('imagem')->store('', 's3');
            Storage::disk('s3')->setVisibility($path, 'public');
            $url = Storage::disk('s3')->url($path);
            $cachorro->imagem = $url; */

            $cachorro->save();
            return redirect("cachorro");
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cachorro  $cachorro
     * @return \Illuminate\Http\Response
     */
    public function show(Cachorro $cachorro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cachorro  $cachorro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cachorro $cachorro)
    {
        $users = User::all();
        return view("paginas/cachorro/edit", compact('users', 'cachorro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cachorro  $cachorro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cachorro $cachorro)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'nome' => 'required|max:255',
            'idade' => 'required|max:255',
            'raca' => 'required|max:255',
            'genero' => 'required|max:255',
            'imagem' => 'image',
          ]);
          if ($validated) {
            $cachorro->user_id = $request->get('user_id');
            $cachorro->nome = $request->get('nome');
            $cachorro->idade = $request->get('idade');
            $cachorro->raca = $request->get('raca');
            $cachorro->genero = $request->get('genero');
            $cachorro->save();
            return redirect("cachorro");
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cachorro  $cachorro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cachorro $cachorro)
    {
        $cachorro->delete();
        return redirect("cachorro");
    }
}
