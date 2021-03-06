@extends('layouts.admin')
@section('contenido')
<div class="row">

    <div class="colg-lg-8 col-md-8 col-xs-12">

        <h3>Listado de Ingresos <a href="ingreso/create" ><button class="btn btn-success">Nuevo</button></h3></a>
         <h3><a href="{{route('ingresos.pdf')}}" ><button class="btn btn-success">Exportar Datos </button></h3></a>
            @include('compras.ingreso.search')
   </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="table responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>

                                <th>Fecha</th>
                                <th>Proveedor</th>
                                <th>Comprobante</th>
                                <th>Impuesto</th>
                                <th>Total</th>
                                <th>Fecha Venc.</th>
                                <th>Opciones</th>

                            </thead>
                            @foreach($ingresos as $ing) <!--la variable que recibo del controlador la guardo en ing y la muestro-->
                                <tr>


                                    <td>{{$ing ->fecha_hora}}</td>
                                    <td>{{$ing->nombre}}</td>
                                    <td>{{$ing->tipo_comprobante.':'.$ing->num_comprobante.'-'.$ing->serie_comprobante}}</td>
                                    <td>{{$ing->impuesto}}</td>
                                    <td>{{$ing->total}}</td>
                                    <td>{{$ing->fecha_hora}}</td>



                                    <td>


                                        <form method="post" action="{{url('compras/ingreso/'.$ing->idingreso) }}">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                            </button>
                                 </form>

                                    </td>

                                </tr>
                                @include('compras.ingreso.modal')
                            @endforeach
                        </table>
                    </div>
                    {{$ingresos->render()}}

                </div>

            </div>

</div>

@endsection
