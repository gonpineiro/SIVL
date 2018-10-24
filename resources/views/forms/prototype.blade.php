@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <form class="" action="/add_ambiente" method="post">
        {{ csrf_field() }}
        <!-- --------------------------------- -->
          <div class="row">
            <div class="col-8">
              <label for="identity" class="col-md-12 col-form-label text-md">ID - Dispositivo</label>
              <input id="identity" type="text" class="form-control" name="identity" value="" required>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <label for="token_blink" class="col-md-12 col-form-label text-md">Token Blink</label>
              <input id="token_blink" type="text" class="form-control" name="token_blink" value="" required>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <label for="ip_adress" class="col-md-12 col-form-label text-md">Direccion IP</label>
              <input id="ip_adress" type="text" class="form-control" name="ip_adress" value="" required>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-8">
              <input class="btn btn-outline-dark"type="submit" name="image" value="Agregar Ambiente">
            </div>
          </div>
      </form>
    </div>
    <div class="col">
      <form class="" action="/add_sensor" method="post">
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
              @if (count($ambientes) == 0)
                <select class="form-control" name="ambiente" disabled>
                  <option value="0">Seleccione</option>
                  @foreach ($ambientes as $ambiente)
                    <option value="{{$ambiente->id}}">{{$ambiente->identity}}</option>
                  @endforeach
                </select>
              @else
                <select class="form-control" name="ambiente">
                  <option value="0">Seleccione</option>
                  @foreach ($ambientes as $ambiente)
                    <option value="{{$ambiente->id}}">{{$ambiente->identity}}</option>
                  @endforeach
                </select>
              @endif
              </div>
          </div>

          <div class="row mt-4">
            <div class="col-8">
              <input class="btn btn-outline-dark"type="submit" name="image" value="Agregar sensor">
            </div>
          </div>
      </form>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <form class="" action="/add_prototype" method="post">
        {{ csrf_field() }}
        <!-- --------------------------------- -->
          <div class="row">
            <div class="col-8">
              <label for="name" class="col-md-12 col-form-label text-md">Nombre</label>
              @if (count($ambientes) == 0)
                <input id="name" type="text" class="form-control" name="name" value="" disabled>
              @else
                <input id="name" type="text" class="form-control" name="name" value="" required>
              @endif
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <label for="ambiente" class="col-md-12 col-form-label text-md">Ambiente</label>
              @if (count($ambientes) == 0)
                <select class="form-control" name="ambiente" disabled>
                  <option value="0">Seleccione</option>
                  @foreach ($ambientes as $ambiente)
                    <option value="{{$ambiente->id}}">{{$ambiente->identity}}</option>
                  @endforeach
                </select>
              @else
                <select class="form-control" name="ambiente">
                  <option value="0">Seleccione</option>
                  @foreach ($ambientes as $ambiente)
                    <option value="{{$ambiente->id}}">{{$ambiente->identity}}</option>
                  @endforeach
                </select>
              @endif
              </div>
          </div>

          <div class="row">
            <div class="col-8">
              <label for="especie" class="col-md-12 col-form-label text-md">Especie</label>
                @if (count($especies) == 0)
                  <select class="form-control" name="especie" disabled>
                    <option value="0">Seleccione</option>
                    @foreach ($especies as $especie)
                      <option value="{{$especie->id}}">{{$especie->name}}</option>
                    @endforeach
                  </select>
                @else
                  <select class="form-control" name="especie">
                    <option value="0">Seleccione</option>
                    @foreach ($especies as $especie)
                      <option value="{{$especie->id}}">{{$especie->name}}</option>
                    @endforeach
                  </select>
                @endif
              </div>
          </div>
          <div class="row">
            <div class="col-8">
              <label for="sensor" class="col-md-12 col-form-label text-md">Sensor</label>
              @if (count($sensors) == 0)
                <select class="form-control" name="sensor" disabled>
                  <option value="0">Seleccione</option>
                  @foreach ($sensors as $sensor)
                    <option value="{{$sensor->id}}">{{$sensor->name}}</option>
                  @endforeach
                </select>
              @else
                <select class="form-control" name="sensor">
                  <option value="0">Seleccione</option>
                  @foreach ($sensors as $sensor)
                    <option value="{{$sensor->id}}">{{$sensor->name}}</option>
                  @endforeach
                </select>
              @endif
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-8">
            @if (count($ambientes) == 0)

              <input class="btn btn-outline-dark"type="submit" name="image" value="Agregar Prototipo" disabled>
            @else
              <input class="btn btn-outline-dark"type="submit" name="image" value="Agregar Prototipo" >
            @endif
            </div>

          </div>
      </form>
    </div>
  </div>
</div>


@endsection
