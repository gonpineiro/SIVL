@extends('layouts.app')

@section('content')

<div class="container cl-10">

  <div class="row mt-4">

    <div class="col col-6">
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
      <div class="col-6">
        <form class="" action="" method="post">

          <!-- --------------------------------- -->
            <div class="row">
              <div class="col-8">
                <label for="name" class="col-md-12 col-form-label text-md">Nombre</label>
                <input id="name" type="text" class="form-control" name="name" value="">
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <label for="price_3" class="col-md-12 col-form-label text-md">Precio x3</label>
                <input id="price_3" type="text" class="form-control" name="price_3" value="">
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <label for="price_5" class="col-md-12 col-form-label text-md">Precio x3</label>
                <input id="price_5" type="text" class="form-control" name="price_5" value="">
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
