@extends('layouts.app')

@section('template_title')
    Tipo Servicios Tecnico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Servicios Tecnico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-servicios-tecnicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo') }}
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
                                        
										<th>Nombre Servicio</th>
										<th>Descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoServiciosTecnicos as $tipoServiciosTecnico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoServiciosTecnico->nombre_servicio }}</td>
											<td>{{ $tipoServiciosTecnico->descripcion }}</td>
                                            <td>
                                                <form action="{{ route('tipo-servicios-tecnicos.destroy',$tipoServiciosTecnico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-servicios-tecnicos.show',$tipoServiciosTecnico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-servicios-tecnicos.edit',$tipoServiciosTecnico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipoServiciosTecnicos->links() !!}
            </div>
        </div>
    </div>
@endsection
