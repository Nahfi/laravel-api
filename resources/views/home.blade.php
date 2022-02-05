@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                 
 <img height="200px"    width="200px"    src="{{ asset(auth::user()->photo) }}" alt="">
 <div class="x">
     <h3 class="mt-3">name : {{ auth::user()->name}}</h3>
     <a href="{{ route("role.index") }}">role</a>
     <a href="{{ route("user.index") }}">user</a>
     <a href="#">seo</a>
     <a href="">setting</a>
 </div>
            </div>
        </div>
    </div> 
</div>
@endsection
