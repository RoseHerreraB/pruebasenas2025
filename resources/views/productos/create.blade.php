@extends('layouts.app')
@section('titulo', 'Mis productos')
@section('cabecera', 'Crear producto')
@section('contenido')
 <div class="flex justify-center my-6">
 <div class="card bg-base-100 w-96 shadow-2xl">
 <form class="card-body" action="{{ route('productos.store') }}" method="POST">
 @csrf
 {{-- asignatura--}}
 <div class="form-control">
 <label class="label">
 <span class="label-text">Asignatura</span>
 </label>
 <input type="text" name="asignatura" placeholder="Nombre de la asignatura"
class="input input-bordered" required />
 </div>
 {{-- Descripción --}}
 <div class="form-control">
 <label class="label">
 <span class="label-text">Descripción</span>
 </label>
 <input type="text" name="descripcion" placeholder="Descripción"
class="input input-bordered" />
 </div>
 {{-- Precio --}}
 <div class="form-control">
 <label class="label">
 <span class="label-text">Precio por hora</span>
 </label>
 <input type="number" name="precio_hora" placeholder="Precio" class="input
input-bordered" required />
 </div>
 {{-- cantidad_horas --}}
 <div class="form-control">
 <label class="label">
 <span class="label-text">Cantidad de horas</span>
 </label>
 <input type="number" name="cantidad_horas" placeholder="Cantidad de horas" class="input inputbordered" required />
 </div>
 {{-- botones --}}
 <div class="form-control mt-6">
 <button type="submit" class="btn btn-primary">Crear producto</button>
 <a href="{{ route('productos.index')}}" class="btn btn-outline mt-4"
>Cancelar</a>
 </div>
 </form>
 </div>
 </div>
@endsection
