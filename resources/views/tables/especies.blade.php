@extends('layouts.app')

@section('content')

<div class="container">

  <div class="row mt-4">
    <div class="col-6">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
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
              <td>{{$especie->marca->name}}</td>
              <td>{{$especie->thc}} %</td>
              <td>{{$especie->cbd}} %</td>
              <td>{{$especie->ciclo}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col col-1">



    </div>
    <div class="col">
      <form class="" action="/add_especie" method="post">
        {{ csrf_field() }}
        <!-- --------------------------------- -->
          <div class="row">
            <div class="col-12">
              <label for="name" class="col-md-12 col-form-label text-md">Nombre</label>
              <input id="name" type="text" class="form-control" name="name" value="" required>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label for="marca" class="col-md-12 col-form-label text-md">Marca</label>
              <select class="form-control" name="marca">
                <option value="0">Seleccione</option>
                @foreach ($marcas as $marca)
                  <option value="{{$marca->id}}">{{$marca->name}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <label for="thc" class="col-md-12 col-form-label text-md">THC</label>
              <input id="thc" type="number" class="form-control" name="thc" value="" required>
            </div>
            <div class="col-6">
              <label for="cbd" class="col-md-12 col-form-label text-md">CBD</label>
              <input id="cbd" type="number" class="form-control" name="cbd" value="" required>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <label for="cantidad_in" class="col-md-12 col-form-label text-md">Cant Indoor</label>
              <input id="cantidad_in" type="number" class="form-control" name="cantidad_in" value="" required>
            </div>
            <div class="col-4">
              <label for="cantidad_ex" class="col-md-12 col-form-label text-md">Cant Outdoor</label>
              <input id="cantidad_ex" type="number" class="form-control" name="cantidad_ex" value="" required>
            </div>
            <div class="col-4">
              <label for="ciclo" class="col-md-12 col-form-label text-md">Ciclo</label>
              <input id="ciclo" type="number" class="form-control" name="ciclo" value="" required>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label for="type" class="col-md-12 col-form-label text-md">Cant Indoor</label>
                <select class="form-control" name="type">
                  <option value="0">Seleccione</option>
                  @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                  @endforeach
                </select>
            </div>
            <div class="col-6">
              <label for="cantidad_ex" class="col-md-12 col-form-label text-md">Cant Outdoor</label>
                <select class="form-control" name="variedad">
                  <option value="0">Seleccione</option>
                  @foreach ($variedads as $variedad)
                    <option value="{{$variedad->id}}">{{$variedad->name}}</option>
                  @endforeach
                </select>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
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
