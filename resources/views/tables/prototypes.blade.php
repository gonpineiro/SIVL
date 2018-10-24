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
          @if(empty($prototypes) or empty($ambientes) )
            <tr>
              <td></th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          @else

            @foreach ($prototypes as $prototype)
              <tr>
                <td>{{$prototype->id}}</th>
                <td>{{$prototype->name}}</td>
                <td>{{$prototype->especie->name}}</td>
                <td>{{$prototype->sensor->valor}} %</td>              
                <td>{{$prototype->created_at->diffInDays($now)}}</td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
