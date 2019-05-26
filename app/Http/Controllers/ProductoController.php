<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
   
    function index(Request $request)
    {
        // if($request->isJson())
        // {
            $pro = Producto::all();
            // $form = Formulario::all();
            return response()->json($pro,200);
            // dd($form);
        // }
        // return response()->json(['error' => 'No Autorizado'], 401);
    }

    function select($id)
    {
        $pro = Producto::where('codigo',$id)->get();
        // dd($pro);

        
        return response($pro,200);

    }

}
