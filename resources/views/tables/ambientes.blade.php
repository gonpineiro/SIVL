@extends('layouts.app')

@section('content')

<div class="container cl-10">

  <div class="row mt-4">

    <div class="col">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Temperatura</th>
            <th scope="col">Humedad</th>
            <th scope="col">Luz</th>
            <th scope="col">IP</th>
          </tr>
        </thead>
          <tbody>
            @foreach ($ambientes as $ambiente)
              <tr>
                <td>{{$ambiente->identity}}</th>
                <td>{{$ambiente->temperatura}}</td>
                <td>{{$ambiente->humedad}}</td>
                <td>
                  @if($ambiente->estado_luz == 1)
                    {{"Dia"}}
                  @else
                    {{"Noche"}}
                  @endif
                </td>
                <td>{{$ambiente->ip_adress}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

  </div>







</div>

@endsection
