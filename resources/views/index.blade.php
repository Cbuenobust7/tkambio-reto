@extends('layout')

@section('content')

{{-- ESTILOS--}}

<link rel="stylesheet" type="text/css" href="{{ URL::asset('scss/style.scss'); }}">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" type="text/javascript"></script>


<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif



  <div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table class="table display mb-4 dataTablesCard table-responsive-xl card-table">
								<thead>
									<tr>

										<th>ID</th>
										<th>Compra</th>
										<th>Venta</th>
                    <th>Creado</th>

                    <th class="text-center">Opciones</th>

									</tr>
								</thead>



    <tbody>
        @foreach($cambio as $cambios)
        <tr>
            <td>{{$cambios->id}}</td>
            <td>{{$cambios->tc_compra}}</td>
            <td>{{$cambios->tc_venta}}</td>
            <td>{{$cambios->created_at}}</td>
            <td class="text-center">
                <a href="{{ route('cambios.edit', $cambios->id)}}" class="btn btn-primary btn-sm">Editar</a>
                <form action="{{ route('cambios.destroy', $cambios->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

@endsection
