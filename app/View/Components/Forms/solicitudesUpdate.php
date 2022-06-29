<?php

namespace App\View\Components\Forms;

use App\Models\Cliente;
use App\Models\Recibo;
use App\Models\Servicio;
use Illuminate\View\Component;

class solicitudesUpdate extends Component
{


    public $id;    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.solicitudes-update');
    }

    public function clientes(){
        return Cliente::get();
    }

    public function servicios(){
        return Servicio::get();
    }

    public function recibos(){
        return Recibo::get();
    } 
}
