<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $visita;
    public $problema;
    public $estado;
    public $descripcion;
    public $longitud;
    public $latitud;

    public function __construct($id,$visita,$problema,$estado,$descripcion,$longitud,$latitud)
    {
        $this->id = $id;
        $this->visita = $visita;
        $this->problema = $problema;
        $this->estado = $estado;
        $this->descripcion = $descripcion;
        $this->longitud = $longitud;
        $this->latitud = $latitud;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-modal');
    }
}
