@extends('layouts.app')
@section('content')
<div class="container py-4">
    <h1>Add Comic!</h1>

    <form action="{{ route("comics.store") }}" method="POST">
        @csrf
    
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
            <label class="form-label" for="form6Example1">Title</label>
          <input type="text" id="form6Example1" class="form-control" name="title" />
        </div>
    </div>
    <div class="col">
        <div class="form-outline">
            <label class="form-label" for="form6Example2">Price</label>
            <input type="number" id="form6Example2" class="form-control"name="price" />
        </div>
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Image URL</label>
        <input type="text" id="form6Example3" class="form-control"name="thumb" />
    </div>
    <!-- Text input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Series</label>
        <input type="text" id="form6Example3" class="form-control"name="series" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Sale date</label>
        <input type="text" id="form6Example3" class="form-control"name="sale_date" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Type</label>
        <input type="text" id="form6Example5" class="form-control" name="type" />
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
    </form>
</div>
@endsection