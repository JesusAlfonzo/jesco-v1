@extends('layouts.app')

@section('template_title')
    Tasa Cambios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tasa Cambios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tasa-cambios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Moneda Id</th>
									<th >Tasa</th>
									<th >Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasaCambios as $tasaCambio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tasaCambio->moneda_id }}</td>
										<td >{{ $tasaCambio->tasa }}</td>
										<td >{{ $tasaCambio->fecha }}</td>

                                            <td>
                                                <form action="{{ route('tasa-cambios.destroy', $tasaCambio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tasa-cambios.show', $tasaCambio->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tasa-cambios.edit', $tasaCambio->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tasaCambios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
