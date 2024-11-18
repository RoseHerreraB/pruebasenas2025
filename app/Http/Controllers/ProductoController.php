<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{                                                                                                               
   
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        return view('productos.index', compact('productos')); // Retornar la vista con los productos
    }

    
    public function create()
    { 
        //echo "Hola esqtoy aqui create";   
        return view("productos.create");
    }


    public function store(Request $request)
    {
    // Validar Productos
   // $datos = $request->validate([
   //'asignatura' =>['required', 'string', 'max:100'],
   //'descripcion' =>['nullable','string', 'max:255'],
   //'precio_hora' =>['required', 'integer', 'min:1000'],
   //'cantidad_horas' =>['required', 'integer','min:1'],
    //]);
    
     Producto::create($request->all());
     return redirect()->route('productos.index');                                                                                              


  //Guardar Datos
   // $producto = Producto::create($datos);
   // Respuesta al Cliente
   //return response()->json(['success' => true, 'message' => 'Producto creado'], 201);

    }

  

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return response()->json($producto, 200); //200: OK
        //
    }

    public function edit(Producto $producto)
    {
        return view("productos.edit", compact('producto') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {  
         // Validar datos de entrada
       
       
       
         // $datos = $request->validate([
         //   'asignatura' =>['required', 'string', 'max:100'],
           // 'descripcion' =>['nullable','string', 'max:255'],
           // 'precio_hora' =>['required', 'integer', 'min:1000'],
            //'cantidad_horas' =>['required', 'integer','min:1'],
         //]);
          // Actualizar Producto
     //$producto->update($datos);
 // Respuesta al Cliente
 //return response()->json(['success' => true,'message' => 'Producto actualizado'], 200); 

        $producto->update($request->all());
        return redirect()->route('productos.index');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        // Eliminar Producto
        $producto->delete();
        // Respuesta al Cliente
       // return response()->json(['success' => true,'message' => 'Producto eliminado'], 200);
       return redirect()->route ('productos.index');

    }
}
