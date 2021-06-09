@extends('layouts.app')

@section('content')

<div class="container">
      <div>
    <h2><span class="font-weight-bold">product name: </span> {{$clothe->name}}</h2> 
      <h3><span class="font-weight-bold">created by :</span>{{$clothe->email}}</h3>
        <h4><span class="font-weight-bold">availabe number :</span> {{$clothe->number}} </h4>
      </div>
      
    

</div>
<form action="{{route('clothes.destroy',$clothe->id)}}" method = "POST">
@csrf
@method("DELETE")
<input class="btn btn-danger"  style = 'margin-left:300px !important;  margin-bottom:-55px;' type="submit" value="delete product">
</form>
<a href="{{route('clothes.edit',$clothe->id)}}" class="btn btn-primary"  style = 'margin-left:45px !important;'>Edit product</a>


@endsection

 