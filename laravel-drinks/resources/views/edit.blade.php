@extends('layouts.app')

@section('main')
    <form class="" action="{{route('drink.update', $drink->id)}}" method="post">
      @csrf
      @method('PUT')
      <input type="text" name="name" value="{{$drink->name}}">
      <input type="number" name="gradation" value="{{$drink->gradation}}">
      <input type="text" name="tipology" value="{{$drink->tipology}}">
      <input type="text" name="glass" value="{{$drink->glass}}">
      <input type="text" name="ingredients" value="{{$drink->ingredients}}">
      <input type="number" name="price" value="{{$drink->price}}">
      <input type="text" name="origin" value="{{$drink->origin}}">
      <input type="number" name="year" value="{{$drink->year}}">
      <input type="text" name="difficulty" value="{{$drink->difficulty}}">

      <button type="submit" name="SAVE">SAVE</button>


    </form>
@endsection
