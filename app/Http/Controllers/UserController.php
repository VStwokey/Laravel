<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios = User::orderBy('name')->paginate(20);
        // dd($usuarios);
        return view('usuario.index')->with(compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuario = null;
        return view('usuario.form')->with(compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:4'
        ]);
        $usuario = User::create($request->all());
        // $usuario = new User();
        // $usuario->fill($request->all());
        // $usuario->save();

        return redirect()->route('usuario.show', ['id'=>$usuario->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = User::find($id);
        return view('usuario.show')->with(compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id);
        return view('usuario.form')->with(compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario =  User::find($id);
        $usuario->update($request->all());

        return redirect()
            ->route('usuario.show',['id' => $usuario->id])
            ->with('success','Atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::find($id);
        $usuario->destroy($id);


        return redirect()->back()->with('danger', 'Excluído com sucesso!');
    }
}
