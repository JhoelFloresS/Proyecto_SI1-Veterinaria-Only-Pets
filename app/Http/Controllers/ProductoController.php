<?php

namespace App\Http\Controllers;

use App\Models\NotaIngreso;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:productos.index')->only('index', 'show');
        $this->middleware('can:productos.create')->only('create', 'store');
        $this->middleware('can:productos.edit')->only('edit', 'update','datas');
        $this->middleware('can:productos.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $productos = Producto::where('nombre', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('precio', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('marca', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('costo', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'servicio' => $productos,
            'busqueda' => $busqueda,
        ];
        return view('productos.index', compact('productos'));
    }

    public function store(Request $request) 
    {
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'costo' => $request->costo,
            'precio' => $request->precio,
            'marca' => $request->marca,
            'cantidad' => 0,
           
        ]);
        return redirect(route('productos.index'));
    }

    public function datas($id){
        $producto = Producto::find($id);
        return $producto;
    }

    public function update(Request $request, $id) {
        $producto = producto::find($id);
        $data = [
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'NIT' => $request->NIT,
        ];
        $producto->update($data);
        return redirect(route('productos.index'));
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function comprar(Request $request) 
    {
        $fin = strpos($request->id_producto, ',');
        $id_producto = substr($request->id_producto, 0, $fin);
        NotaIngreso::create([
            'id_proveedor' => $request->id_proveedor,
            'id_administrativo' => @Auth::user()->id,
            'id_producto' => $id_producto,
            'monto_total' => $request->monto_total,
            'fecha' => date('Y-m-d'),
            'hora' => date('H:i:s'),
            'cantidad' => $request->cantidad
        ]);
        //Actualizando el stock del producto
        $producto = Producto::find($id_producto);
        $producto->cantidad = $producto->cantidad + $request->cantidad;
        $producto->save();

        return redirect(route('productos.index'));
    }

}
