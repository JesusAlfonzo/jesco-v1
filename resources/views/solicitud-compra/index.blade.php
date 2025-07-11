@extends('layouts.app')

@section('template_title')
    Solicitud Compras
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicitud Compras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('solicitud-compras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Departamento Id</th>
									<th >Usuario Id</th>
									<th >Fecha Solicitud</th>
									<th >Estado</th>
									<th >Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudCompras as $solicitudCompra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $solicitudCompra->departamento_id }}</td>
										<td >{{ $solicitudCompra->usuario_id }}</td>
										<td >{{ $solicitudCompra->fecha_solicitud }}</td>
										<td >{{ $solicitudCompra->estado }}</td>
										<td >{{ $solicitudCompra->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('solicitud-compras.destroy', $solicitudCompra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('solicitud-compras.show', $solicitudCompra->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('solicitud-compras.edit', $solicitudCompra->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $solicitudCompras->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
