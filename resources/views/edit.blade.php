@extends('layout')

@section('content')

{{-- ESTILOS--}}

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">



<div class="card push-top">
  <div class="card-header">
    Editar y actualizar
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cambios.update', $cambio->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="tc_compra">Compra</label>
              <input type="text" class="form-control" name="tc_compra" value="{{ $cambio->tc_compra }}"/>
          </div>
          <div class="form-group">
              <label for="tc_venta">Venta</label>
              <input type="text" class="form-control" name="tc_venta" value="{{ $cambio->tc_venta }}"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Editar TC</button>
      </form>
  </div>
</div>
@endsection