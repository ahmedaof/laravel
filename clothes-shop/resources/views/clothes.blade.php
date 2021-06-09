@extends('layouts.app')

@section('content')


                       
      <h1 class="text-center font-weight-bold">Clothes list</h1> 
  
      @foreach($clothes as $clothe)
      <div>
    <h2><span class="font-weight-bold">product name: </span> {{$clothe->name}}</h2> 
      <h3><span class="font-weight-bold">created by :</span>{{$clothe->email}}</h3>
        <h4><span class="font-weight-bold">availabe number :</span> {{$clothe->number}} </h4>
      </div>
      <a  style = 'margin-left:300px !important;' href="clothes/<?php echo $clothe['id']?>">more info</a> <br> <br>
      @endforeach
     

@endsection

 