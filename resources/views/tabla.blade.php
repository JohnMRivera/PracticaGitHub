@extends('layouts.plantilla')

@section('titulo','tabla')

@section('contenido')

    <main>
        <header>
            <h1 class="text-center mt-5">Tabla</h1>
        </header>
        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Grupo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Juan</td>
                <td>Rivera</td>
                <td>S171</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Brian</td>
                <td>Soto</td>
                <td>S171</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Brayan</td>
                <td>Carranza</td>
                <td>S171</td>
              </tr>
            </tbody>
          </table>
    </main>

@endsection