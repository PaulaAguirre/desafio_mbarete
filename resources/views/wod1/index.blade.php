@extends ('layouts.app')
@section ('content')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Categorías <a href="wod1/create"><button class="btn btn-success">Nuevo</button></a></h3>
            <!-- include('almacen.categoria.search') -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                        <th>ID Equipo</th>
                        <th>Nombre</th>
                        <th>Atletas</th>
                        <th>Box</th>
                        <th>Tiempo</th>
                        <th>Opciones</th>
                        </thead>
                        @foreach ($resultados as $resultado)
                            <tr>
                                <td>{{ $resultado->equipo_id}}</td>
                                <td>{{ $resultado->equipo->nombre}}</td>
                                <td>{{ $resultado->equipo->atletas->pluck('nombre', 'apellido') }}</td>
                                <td>{{ $resultado->equipo->box->nombre }}</td>
                                <td>{{ $resultado->tiempo }}</td>
                                <td>
                                    <a href="{{URL::action('Wod1scaledController@edit',$resultado->id)}}"><button class="btn btn-info">Editar</button></a>
                                    <a href="" data-target="#modal-delete-{{$resultado->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                </td>
                            </tr>
                            <!--include('almacen.categoria.modal')-->
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection