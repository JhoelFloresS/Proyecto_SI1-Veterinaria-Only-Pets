<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use App\Models\Bitacora;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    
    public function index(Request $request){
        // if($id == null){
           // $bitacoras = Bitacora::all()->orderby('id','desc');
           $filtro = $request->filtro;
           if($filtro == "usuario"){
             $palabras = $this->separateWords($request->busqueda.'');
             $personas = new Collection;
             foreach($palabras as $key => $palabra){
                if($key == 0)
                      $personas = $personas->concat(Persona::where('nombre','LIKE','%'.$palabra.'%')->get());
                elseif($key == 1)
                        $personas = $personas->concat(Persona::where('apellido_paterno','LIKE','%'.$palabra.'%')
                                    ->orWhere('nombre','LIKE','%'.$palabra.'%')->get());
                else{
                    $personas = $personas->concat(Persona::where('apellido_materno','LIKE','%'.$palabra.'%')
                                ->orWhere('apellido_paterno','LIKE','%'.$palabra.'%')->get());
                }
            }
            $usuarios = Usuario::whereIn('id_persona',$personas->pluck('id'))->get();
            $bitacoras = Bitacora::whereIn('id_usuario',$usuarios->pluck('id'))->get();
            $acciones = Accion::whereIn('id_bitacora',$bitacoras->pluck('id'))->orderBy('id','desc')->paginate(7);
             return view('bitacora.index', ['acciones' => $acciones ,'busqueda'=>$request->busqueda.'','filtro'=>$filtro]);

           }elseif($filtro == "fecha_hora"){

           }

           $busqueda = $request->busqueda;
            $acciones = Accion::where('accion','LIKE','%'.$busqueda.'%')
            ->orWhere('descripcion','LIKE','%'.$busqueda.'%')
            ->latest('id')
            ->orderBy('id','desc')->paginate(10);
            $acciones->load('bitacora');
            return view('bitacora.index', compact('acciones'));

        
    }

    public static function registrar($id_user, $accion, $descripción){
        Accion::create([
            'id_usuario' => $id_user,
            'accion' => $accion,
            'descripcion' => $descripción,
            'fecha' => date('Y-m-d'),
            'hora' => date('H:i:s'),
            'id_bitacora' => $id_user
        ]);
    }


    //get words of the string
    public function separateWords($string){
        $string = strtolower($string);
        $string = preg_replace('/[^a-z0-9]+/i', ' ', $string);
        $string = trim($string);
        $string = preg_replace('/\s+/', ' ', $string);
        $string = explode(' ', $string);
        return $string;
    }

    //inverted words in a string
    public function invertedString($string){
        $string = strtolower($string);
        $string = preg_replace('/[^a-z0-9]+/i', ' ', $string);
        $string = trim($string);
        $string = preg_replace('/\s+/', ' ', $string);
        $string = explode(' ', $string);
        $string = array_reverse($string);
        $string = implode(' ', $string);
        return $string;
    }


}
