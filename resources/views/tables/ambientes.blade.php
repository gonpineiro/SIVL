@extends('layouts.app')

@section('content')

<div class="container cl-10">

  <div class="row mt-4">

    <div class="col col-5">
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
            <td>{{$ambiente->estado_luz}}</td>
            <td>{{$ambiente->ip_adress}}</td>
          </tr>
        @endforeach
      </tbody>
      </table>
      </div>
      <div class="col-1">

      </div>
      <div class="col-5">
        <form class="" action="/add_marca" method="post">
          {{ csrf_field() }}
          <!-- --------------------------------- -->
            <div class="row">
              <div class="col-8">
                <label for="name" class="col-md-12 col-form-label text-md">Nombre</label>
                <input id="name" type="text" class="form-control" name="name" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <label for="price_3" class="col-md-12 col-form-label text-md">Precio x3</label>
                <input id="price_3" type="number" class="form-control" name="price_3" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <label for="price_5" class="col-md-12 col-form-label text-md">Precio x3</label>
                <input id="price_5" type="number" class="form-control" name="price_5" value="" required>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-8">
                <input class="btn btn-outline-dark"type="submit" name="image" value="Agregar">
              </div>

            </div>



        </form>

      </div>
  </div>

  <div class="row mt-4">
asdasd
  </div>






</div>

@endsection
