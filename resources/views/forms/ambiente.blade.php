@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <form class="" action="/add_prototype" method="post">
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
              <label for="ambiente" class="col-md-12 col-form-label text-md">Ambiente</label>
                <select class="form-control" name="ambiente">
                  <option value="0">Seleccione</option>
                  @foreach ($ambientes as $ambiente)
                    <option value="{{$ambiente->id}}">{{$ambiente->identity}}</option>
                  @endforeach

                </select>
              </div>
          </div>

          <div class="row">
            <div class="col-8">
              <label for="especie" class="col-md-12 col-form-label text-md">Especie</label>
              <select class="form-control" name="especie">
                <option value="0">Seleccione</option>
                @foreach ($especies as $especie)
                  <option value="{{$especie->id}}">{{$especie->name}}</option>
                @endforeach

              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <label for="sensor" class="col-md-12 col-form-label text-md">Sensor</label>
              <select class="form-control" name="sensor">
                <option value="0">Seleccione</option>
                @foreach ($sensors as $sensor)
                  <option value="{{$sensor->id}}">{{$sensor->name}}</option>
                @endforeach

              </select>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-8">
              <input class="btn btn-outline-dark"type="submit" name="image" value="">
            </div>

          </div>
      </form>
    </div>
  </div>
</div>

@endsection
