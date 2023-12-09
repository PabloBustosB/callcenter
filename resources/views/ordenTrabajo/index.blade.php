@extends('layouts.app')

@section('template_title')
    Ordentrabajo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordentrabajo') }}
                            </span>

                             <div class="float-right">
                                {{-- <a href="{{ route('ordentrabajos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left"> --}}
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha Visita</th>
										<th>Problema</th>
										<th>Resultado</th>
										<th>Estado</th>
										<th>Descripcion</th>
										<th>Fecha Hora Visita Llegada</th>
										<th>Fecha Hora Visita Salida</th>
										<th>Id Tecnico</th>
										<th>Id Interaccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordentrabajos as $ordentrabajo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ordentrabajo->fecha_visita }}</td>
											<td>{{ $ordentrabajo->problema }}</td>
											<td>{{ $ordentrabajo->resultado }}</td>
											<td>{{ $ordentrabajo->estado }}</td>
											<td>{{ $ordentrabajo->descripcion }}</td>
											<td>{{ $ordentrabajo->fecha_hora_visita_llegada }}</td>
											<td>{{ $ordentrabajo->fecha_hora_visita_salida }}</td>
											<td>{{ $ordentrabajo->id_tecnico }}</td>
											<td>{{ $ordentrabajo->id_interaccion }}</td>

                                            <td>
                                                {{-- <form action="{{ route('ordentrabajos.destroy',$ordentrabajo->id) }}" method="POST"> --}}
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('ordentrabajos.show',$ordentrabajo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                    {{-- <a class="btn btn-sm btn-success" href="{{ route('ordentrabajos.edit',$ordentrabajo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ordentrabajos->links() !!}
            </div>
        </div>
    </div>
@endsection
