@extends('layouts.app')

@section('content')

<div class="container cl-10">

  <div class="row mt-4">
    <div class="col ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">THC</th>
            <th scope="col">CBD</th>
            <th scope="col">Ciclo</th>
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

  </div>

  <div class="row mt-4">
asdasd
  </div>






</div>

@endsection
