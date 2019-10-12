@extends('layouts.admin')
@section('contenido')

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            <h3>Nueva Categoria</h3>

                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li>{{$error}}</li>

                        @endforeach
                    </ul>

                </div>
                @endif

                {!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off')) !!}
                {{Form::token()}}

                    <div class="form-group">
                        <label for="nombre" class="">Nombre</label>
                        <input type="text" name="nombre" class="form-control " placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control " placeholder="Descripcion...">
                    </div>

                    <div class="form-group">
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                        
                        
                    </div>



                {!!Form::close()!!}

        </div>
    
    </div>


@endsection