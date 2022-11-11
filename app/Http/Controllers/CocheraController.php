<?php

namespace App\Http\Controllers;

use App\Models\Cochera;
use Illuminate\Http\Request;

/**
 * Class CocheraController
 * @package App\Http\Controllers
 */
class CocheraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cocheras = Cochera::paginate();

        return view('cochera.index', compact('cocheras'))
            ->with('i', (request()->input('page', 1) - 1) * $cocheras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cochera = new Cochera();
        return view('cochera.create', compact('cochera'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cochera::$rules);

        $cochera = Cochera::create($request->all());

        return redirect()->route('cocheras.index')
            ->with('success', 'Cochera Creado Exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cochera = Cochera::find($id);

        return view('cochera.show', compact('cochera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cochera = Cochera::find($id);

        return view('cochera.edit', compact('cochera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cochera $cochera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cochera $cochera)
    {
        request()->validate(Cochera::$rules);

        $cochera->update($request->all());

        return redirect()->route('cocheras.index')
            ->with('success', 'Cochera Actualizado Exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cochera = Cochera::find($id)->delete();

        return redirect()->route('cocheras.index')
            ->with('success', 'Cochera Eliminado Exitosamente');
    }
}
