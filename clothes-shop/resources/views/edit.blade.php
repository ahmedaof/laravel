@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html lang="en">

<div class="wrapper create-clothe">
  <h1>edit product {{$clothe->name}}</h1>
  <form action="{{route('clothes.update',$clothe->id)}}" method="POST">
    @csrf
    @method("PUT")
    <label for="name">Your email:</label>
    <input type="email" name="email" id="email" value="{{$clothe->email}}"  required>
    <label for="name">product name:</label>
    <input type="name" name="name" id="name" value="{{$clothe->name}}" required>
    <label for="name">available number:</label>
    <input type="number" name="number" id="number" value="{{$clothe->number}}" required>
    
  

    <input type="submit" value="save editing">
  </form>
</div>
</html>


@endsection

 