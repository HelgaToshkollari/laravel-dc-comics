@extends('layouts.app')

@section("content")
    <h1>hello</h1>
    <h2>{{$comic->title}} (#{{$comic->id}})</h2>
@endsection