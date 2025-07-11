@extends('layouts.app')

@section('template_title')
    Orden Compras
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Orden Compras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('orden-compras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Cotizacion Id</th>
									<th >Proveedor Id</th>
									<th >Codigo</th>
									<th >Fecha</th>
									<th >Subtotal</th>
									<th >Impuestos</th>
									<th >Total</th>
									<th >Moneda Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenCompras as $ordenCompra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $ordenCompra->cotizacion_id }}</td>
										<td >{{ $ordenCompra->proveedor_id }}</td>
										<td >{{ $ordenCompra->codigo }}</td>
										<td >{{ $ordenCompra->fecha }}</td>
										<td >{{ $ordenCompra->subtotal }}</td>
										<td >{{ $ordenCompra->impuestos }}</td>
										<td >{{ $ordenCompra->total }}</td>
										<td >{{ $ordenCompra->moneda_id }}</td>

                                            <td>
                                                <form action="{{ route('orden-compras.destroy', $ordenCompra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('orden-compras.show', $ordenCompra->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('orden-compras.edit', $ordenCompra->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ordenCompras->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
