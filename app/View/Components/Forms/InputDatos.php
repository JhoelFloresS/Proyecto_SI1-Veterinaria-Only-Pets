<?php

namespace App\View\Components\Forms;

use App\Models\Servicio;
use App\Models\Turno;
use Illuminate\View\Component;

class InputDatos extends Component
{

    public $id;

    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input-datos');
    }

    public function getTurnos(){
        return Turno::get();
    }

    public function getServicios(){
        return Servicio::get();
    }	
}
