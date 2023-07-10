<?php

namespace App\Http\Controllers;

use App\Models\PlanLlamada;
use Illuminate\Http\Request;

/**
 * Class PlanLlamadaController
 * @package App\Http\Controllers
 */
class PlanLlamadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planLlamadas = PlanLlamada::paginate();

        return view('plan-llamada.index', compact('planLlamadas'))
            ->with('i', (request()->input('page', 1) - 1) * $planLlamadas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planLlamada = new PlanLlamada();
        return view('plan-llamada.create', compact('planLlamada'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PlanLlamada::$rules);

        $planLlamada = PlanLlamada::create($request->all());

        return redirect()->route('plan-llamadas.index')
            ->with('success', 'PlanLlamada created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planLlamada = PlanLlamada::find($id);

        return view('plan-llamada.show', compact('planLlamada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planLlamada = PlanLlamada::find($id);

        return view('plan-llamada.edit', compact('planLlamada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PlanLlamada $planLlamada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanLlamada $planLlamada)
    {
        request()->validate(PlanLlamada::$rules);

        $planLlamada->update($request->all());

        return redirect()->route('plan-llamadas.index')
            ->with('success', 'PlanLlamada actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planLlamada = PlanLlamada::find($id)->delete();

        return redirect()->route('plan-llamadas.index')
            ->with('success', 'PlanLlamada deleted successfully');
    }
}
