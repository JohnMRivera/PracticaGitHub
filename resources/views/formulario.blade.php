@extends('layouts.plantilla')

@section('titulo','Formulario')

@section('contenido')

@if(session()->has('confirmar'))

    <script>
        Swal.fire(
          'Envio exitoso!',
          'El formulario se ha llenado correctamente!')
    </script>

@endif

    <main>
        <header>
            <h1 class="text-center mt-5">Formulario</h1>
        </header>
        <div class="container col-md-4">
            <div class="card text-center">
                <form action=" {{ route('envfor') }} " method="post">
                    @csrf

                    <div class="card-header">
                        Llenar el formulario
                    </div>
                    <div class="card-body">
                        <div class="mt-3">
                            <label class="form-label" for="">Nombre</label>
                            <input class="form-control" type="text" name="txtNombre">
                            @if($errors->first('txtNombre'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtNombre') }} </strong>
                                </div>
                            @endif
                        </div>
                        <div class="mt-3 mb-3">
                            <label class="form-label" for="">Apellido</label>
                            <input class="form-control" type="text" name="txtApellido">
                            @if($errors->first('txtApellido'))
                                <div class="alert alert-danger">
                                    <strong> {{ $errors->first('txtApellido')}} </strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection