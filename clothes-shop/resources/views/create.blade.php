@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html lang="en">

<div class="wrapper create-clothe">
  <h1>Create a New product</h1>
  <form action="/clothes" method="POST">
    @csrf
    <label for="name">Your email:</label>
    <input type="email" name="email" id="email" required>
    <label for="name">product name:</label>
    <input type="name" name="name" id="name" required>
    <label for="name">available number:</label>
    <input type="number" name="number" id="number" required>
    
  

    <input type="submit" value="add product">
  </form>
</div>
</html>


@endsection

 