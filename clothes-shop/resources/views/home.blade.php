@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    <a href="{{route('clothes.index')}}" class="text-brand">clothes</a><br><br>
                    <a href="{{route('clothes.create')}}" class="text-brand">create</a>
                   
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection