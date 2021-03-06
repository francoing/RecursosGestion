@extends('layouts.admin')
@section('contenido')
<div class="row">

    <div class="colg-lg-8 col-md-8 col-xs-12">

        <h3>Listado de Clientes <a href="cliente/create" ><button class="btn btn-success">Nuevo</button></h3></a>
            @include('ventas.cliente.search')
   </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="table responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Tipo Doc.</th>
                                <th>Numero de Doc.</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Opciones</th>
        
                            </thead>
                            @foreach($personas as $per) <!--la variable que recibo del controlador la guardo en cat y la muestro-->
                                <tr>
                                    <td>{{$per->idpersona}}</td>
                                    <td>{{$per->nombre}}</td>
                                    <td>{{$per->tipo_documento}}</td>
                                    <td>{{$per->num_documento}}</td>
                                    <td>{{$per->telefono}}</td>
                                    <td>{{$per->email}}</td>
                                    <td>
                                        
                                        <a href="{{URL::action('ClienteController@edit',$per->idpersona)}}"><button type="button" class="btn btn-info">Editar</button></a>
                                        <a href="" data-target="#modal-delete-{{$per->idpersona}}" data-toggle="modal">
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                        </a>
                                        

                                    </td>
                                
                                </tr>
                                @include('ventas.cliente.modal')
                            @endforeach
                        </table>
                    </div>
                    {{$personas->render()}}
                
                </div>
            
            </div>
    
</div>

@endsection