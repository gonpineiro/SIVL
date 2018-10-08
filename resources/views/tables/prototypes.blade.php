@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row mt-4">
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
          @foreach ($prototypes as $prototype)
            <tr>
              <td>{{$prototype->id}}</th>
              <td>{{$prototype->name}}</td>
              <td>{{$prototype->especie->name}}</td>
              <td>{{$prototype->sensor->valor}} %</td>
              <td>{{$prototype->created_at}}</td>
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
            <th scope="col">Temperatura</th>
            <th scope="col">Humedad</th>
            <th scope="col">Estado Luz</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ambientes as $ambiente)
            <tr>
              <td>{{$ambiente->identity}}</th>
              <td>{{$ambiente->temperatura}}</td>
              <td>{{$ambiente->humedad}}</td>
              <td>{{$ambiente->estado_luz}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
 </div>
</div>

@endsection
