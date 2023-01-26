@extends('layouts.app')

@section('content')
<h1 class="d-flex justify-content-between">Lista Comics</h1>

  <table class="table table-striped">
    <thead>
        
      <tr>
        <th>Title</th>
        <th>Thumb</th>
        <th>Price</th>
        <th>Series</th>
        <th>Sale date</th>
        <th>Type</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($comics as $comic)
        <tr>
            <td><h5>{{$comic->title}}</h5></td>
            <td><h5>{{$comic->thumb}}</h5></td>
            <td><h5>€{{number_format($comic->price)}}</h5></td>
            <td><h5>{{$comic->series}}</h5></td>
            <td><h5>{{date('d/m/Y', strtotime($comic->sale_date))}}</h5></td>
            <td>
              <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-link">see more</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
    
@endsection