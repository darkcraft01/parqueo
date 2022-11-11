<?php

namespace App\Http\Controllers;

use App\Models\Estadia;
use App\Models\Cochera;
use App\Models\Vehiculo;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class EstadiaController
 * @package App\Http\Controllers
 */
class EstadiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadias = Estadia::paginate();

        return view('estadia.index', compact('estadias'))
            ->with('i', (request()->input('page', 1) - 1) * $estadias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadia = new Estadia();

        $cocheras = Cochera::pluck('numero_cochera','id');
        $vehiculos = Vehiculo::pluck('placa_vehiculo','id');
        $users = User::pluck('name','id');
        $cocheraprecio = Cochera::pluck('precio','id');

        return view('estadia.create', compact('estadia', 'cocheras', 'vehiculos', 'users', 'cocheraprecio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadia::$rules);

        $estadia = Estadia::create($request->all());

        return redirect()->route('estadias.index')
            ->with('success', 'Estadia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadia = Estadia::find($id);

        return view('estadia.show', compact('estadia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadia = Estadia::find($id);

        $cocheras = Cochera::pluck('numero_cochera','id');
        $vehiculos = Vehiculo::pluck('placa_vehiculo','id');
        $users = User::pluck('name','id');
        $cocheraprecio = Cochera::pluck('precio','id');

        return view('estadia.edit', compact('estadia', 'cocheras', 'vehiculos', 'users', 'cocheraprecio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadia $estadia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadia $estadia)
    {
        request()->validate(Estadia::$rules);

        $estadia->update($request->all());

        return redirect()->route('estadias.index')
            ->with('success', 'Estadia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadia = Estadia::find($id)->delete();

        return redirect()->route('estadias.index')
            ->with('success', 'Estadia deleted successfully');
    }
}
