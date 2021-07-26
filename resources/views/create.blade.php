@extends('layout')

@section('content')

{{-- ESTILOS--}}

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">



<div class="card push-top">
  <div class="card-header">
    Crear nuevo TC
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
      <form method="post" action="{{ route('cambios.store') }}">
          <div class="form-group">
              @csrf
              <label for="tc_compra">Compra</label>
              <input type="text" class="form-control" name="tc_compra"/>
          </div>
          <div class="form-group">
              <label for="tc_venta">Venta</label>
              <input type="text" class="form-control" name="tc_venta"/>
          </div>

          <button type="submit" class="btn btn-block btn-danger">Crear TC</button>
      </form>
  </div>
</div>
@endsection