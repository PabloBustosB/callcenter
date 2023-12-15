@extends('layouts.app')

@section('template_title')
    Plan Llamada
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <span id="card_title">
                            <h2>Listado de todos los planes de llamadas</h2>
                        </span>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <div class="float-right">
                                <a href="{{ route('plan-llamadas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo plan') }}
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
                                        
										<th>Nombre</th>
										<th>Minutos</th>
										<th>Credito</th>
										<th>Cantidadmb</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($planLlamadas as $planLlamada)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $planLlamada->nombre }}</td>
											<td>{{ $planLlamada->minutos }}</td>
											<td>{{ $planLlamada->credito }}</td>
											<td>{{ $planLlamada->cantidadmb }}</td>
											<td>{{ $planLlamada->precio }}</td>

                                            <td>
                                                <form action="{{ route('plan-llamadas.destroy',$planLlamada->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plan-llamadas.show',$planLlamada->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plan-llamadas.edit',$planLlamada->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $planLlamadas->links() !!}
            </div>
        </div>
    </div>
@endsection
