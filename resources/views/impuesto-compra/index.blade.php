@extends('layouts.app')

@section('template_title')
    Impuesto Compras
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Impuesto Compras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('impuesto-compras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Orden Compra Id</th>
									<th >Tipo Impuesto Id</th>
									<th >Monto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($impuestoCompras as $impuestoCompra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $impuestoCompra->orden_compra_id }}</td>
										<td >{{ $impuestoCompra->tipo_impuesto_id }}</td>
										<td >{{ $impuestoCompra->monto }}</td>

                                            <td>
                                                <form action="{{ route('impuesto-compras.destroy', $impuestoCompra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('impuesto-compras.show', $impuestoCompra->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('impuesto-compras.edit', $impuestoCompra->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $impuestoCompras->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
