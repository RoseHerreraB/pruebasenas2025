@extends('layouts.app')
@section('titulo', 'Pagina Principal')

@section('contenido')
    {{-- Botón para crear un producto nuevo --}}
    <div class="flex justify-end m-4">
      <a href="{{ route('productos.create') }}" class="btn btn-outline">Nuevo producto</a>
    </div>
    <div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
  @foreach ($productos as $producto)
    
     <div class ="card bg-base-100 w-96 shadow-xl m-8">

      <div class="card bg-base-100 w-96 shadow-xl">
       <figure>
        <img
          src="https://picsum.photos/id/{{$producto->id}}/240"  
          alt={{$producto->asignatura}} />
      </figure>
      <div class="card-body">
        <h2 class="card-title">{{$producto->asignatura}}</h2>
        <p>{{$producto->descripcion}}</p>
        precio: <div class="badge badge-outline">{{ $producto->precio_hora}}</div>
        cantidad: <div class="badge badge-outline">{{ $producto->cantidad_horas}}</div>
        <div class="card-actions justify-end">
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-outline btn-xs" >Edit</a>
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
             </form>
          
        </div>
     </div>
  </div>
</div>

  @endforeach
</div>
@endsection
