@extends('layouts.app')

@section('template_title')
    Planinternet
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="float-right">
                                <a href="{{ route('planinternets.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Plan de Internet') }}
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
										<th>Velocidad</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($planinternets as $planinternet)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $planinternet->nombre }}</td>
											<td>{{ $planinternet->velocidad }}</td>
											<td>{{ $planinternet->precio }}</td>

                                            <td>
                                                <form action="{{ route('planinternets.destroy',$planinternet->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('planinternets.show',$planinternet->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('planinternets.edit',$planinternet->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $planinternets->links() !!}
            </div>
        </div>
    </div>
@endsection
