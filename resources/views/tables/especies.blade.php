@extends('layouts.app')

@section('content')

<div class="container cl-10">

  <div class="row mt-4">
    <div class="col cl-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">THC</th>
            <th scope="col">CBD</th>
            <th scope="col">Nombre</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($especies as $especie)
            <tr>
              <td>{{$especie->id}} </th>
              <td>{{$especie->name}}</td>
              <td>{{$especie->thc}} %</td>
              <td>{{$especie->cbd}} %</td>
              <td>{{$especie->ciclo}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col cl-6">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Raza</th>
          <th scope="col">Humedad</th>
          <th scope="col">Dias</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($marcas as $marca)
          <tr>
            <td>{{$marca->id}}</th>
            <td>{{$marca->name}}</td>
            <td>{{$marca->id}}</td>
            <td>{{$marca->id}}</td>
            <td>{{$marca->created_at}}</td>
          </tr>
        @endforeach
      </tbody>
      </table>
      </div>
  </div>

  <div class="row mt-4">
asdasd
  </div>






</div>

@endsection
