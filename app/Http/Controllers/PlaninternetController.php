<?php

namespace App\Http\Controllers;

use App\Models\Planinternet;
use Illuminate\Http\Request;

/**
 * Class PlaninternetController
 * @package App\Http\Controllers
 */
class PlaninternetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planinternets = Planinternet::paginate();

        return view('planinternet.index', compact('planinternets'))
            ->with('i', (request()->input('page', 1) - 1) * $planinternets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planinternet = new Planinternet();
        return view('planinternet.create', compact('planinternet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Planinternet::$rules);

        $planinternet = Planinternet::create($request->all());

        return redirect()->route('planinternets.index')
            ->with('success', 'Plan de internet creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planinternet = Planinternet::find($id);

        return view('planinternet.show', compact('planinternet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planinternet = Planinternet::find($id);

        return view('planinternet.edit', compact('planinternet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Planinternet $planinternet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planinternet $planinternet)
    {
        request()->validate(Planinternet::$rules);

        $planinternet->update($request->all());

        return redirect()->route('planinternets.index')
            ->with('success', 'Plan de internet actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planinternet = Planinternet::find($id)->delete();

        return redirect()->route('planinternets.index')
            ->with('success', 'Plan de internet eliminado');
    }
}
