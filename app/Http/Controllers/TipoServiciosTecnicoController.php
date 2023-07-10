<?php

namespace App\Http\Controllers;

use App\Models\TipoServiciosTecnico;
use Illuminate\Http\Request;

/**
 * Class TipoServiciosTecnicoController
 * @package App\Http\Controllers
 */
class TipoServiciosTecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoServiciosTecnicos = TipoServiciosTecnico::paginate();

        return view('tipo-servicios-tecnico.index', compact('tipoServiciosTecnicos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoServiciosTecnicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoServiciosTecnico = new TipoServiciosTecnico();
        return view('tipo-servicios-tecnico.create', compact('tipoServiciosTecnico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoServiciosTecnico::$rules);

        $tipoServiciosTecnico = TipoServiciosTecnico::create($request->all());

        return redirect()->route('tipo-servicios-tecnicos.index')
            ->with('success', 'TipoServiciosTecnico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoServiciosTecnico = TipoServiciosTecnico::find($id);

        return view('tipo-servicios-tecnico.show', compact('tipoServiciosTecnico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoServiciosTecnico = TipoServiciosTecnico::find($id);

        return view('tipo-servicios-tecnico.edit', compact('tipoServiciosTecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoServiciosTecnico $tipoServiciosTecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoServiciosTecnico $tipoServiciosTecnico)
    {
        request()->validate(TipoServiciosTecnico::$rules);

        $tipoServiciosTecnico->update($request->all());

        return redirect()->route('tipo-servicios-tecnicos.index')
            ->with('success', 'TipoServiciosTecnico actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoServiciosTecnico = TipoServiciosTecnico::find($id)->delete();

        return redirect()->route('tipo-servicios-tecnicos.index')
            ->with('success', 'TipoServiciosTecnico deleted successfully');
    }
}
