@extends('layouts.app')

@section('template_title')
    Tipo Examen Precios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Examen Precios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-examen-precios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Tipo Examen Id</th>
									<th >Moneda Id</th>
									<th >Precio</th>
									<th >Fecha Vigencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoExamenPrecios as $tipoExamenPrecio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tipoExamenPrecio->tipo_examen_id }}</td>
										<td >{{ $tipoExamenPrecio->moneda_id }}</td>
										<td >{{ $tipoExamenPrecio->precio }}</td>
										<td >{{ $tipoExamenPrecio->fecha_vigencia }}</td>

                                            <td>
                                                <form action="{{ route('tipo-examen-precios.destroy', $tipoExamenPrecio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-examen-precios.show', $tipoExamenPrecio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-examen-precios.edit', $tipoExamenPrecio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipoExamenPrecios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
