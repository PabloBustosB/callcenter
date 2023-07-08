<?php

namespace App\Http\Controllers;

use App\Models\PlanTvCable;
use Illuminate\Http\Request;

/**
 * Class PlanTvCableController
 * @package App\Http\Controllers
 */
class PlanTvCableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planTvCables = PlanTvCable::paginate();

        return view('plan-tv-cable.index', compact('planTvCables'))
            ->with('i', (request()->input('page', 1) - 1) * $planTvCables->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planTvCable = new PlanTvCable();
        return view('plan-tv-cable.create', compact('planTvCable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PlanTvCable::$rules);

        $planTvCable = PlanTvCable::create($request->all());

        return redirect()->route('plan-tv-cables.index')
            ->with('success', 'Plan de tv cable creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planTvCable = PlanTvCable::find($id);

        return view('plan-tv-cable.show', compact('planTvCable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planTvCable = PlanTvCable::find($id);

        return view('plan-tv-cable.edit', compact('planTvCable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PlanTvCable $planTvCable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanTvCable $planTvCable)
    {
        request()->validate(PlanTvCable::$rules);

        $planTvCable->update($request->all());

        return redirect()->route('plan-tv-cables.index')
            ->with('success', 'Plan de tv cable actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planTvCable = PlanTvCable::find($id)->delete();

        return redirect()->route('plan-tv-cables.index')
            ->with('success', 'Plan de tv cable eliminado.');
    }
}
