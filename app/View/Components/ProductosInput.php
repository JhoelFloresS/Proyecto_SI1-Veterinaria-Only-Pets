<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductosInput extends Component
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
        return view('components.forms.productos-input');
    }


    public function categorias(){
        
        return  \App\Models\Categoria::get();
    }

}