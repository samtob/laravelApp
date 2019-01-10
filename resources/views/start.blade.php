@extends('layouts.app')

@section('content')
<style>
    html, body {
        height: 100%;
    }
    .flex {
        background-position: center;
        height: 100%;
    }
    </style>
    <div class="container flex ">
        <div class="row">
            <div class="col-md-6">
            <div class="w-100">
            <h2 style="font-size: 50px; color: blueviolet; font-weight:900;"> WittStack</h2>
            <h3 style="font-size: 30px;"> Learn How to build Website for Free </h3>
            <h4 class="pt-2"> Carefully Crafted for .............</h4>
            <em>Click the button below to get started</em>
           <p class="pt-4"><a href="/pages/html"> <button class="btn btn-success btn-lg shadow-sm">Let's Get Started </button></a></p>
            </div>
        </div>
        <div class="col-md-6">
            
            <img src="{{ asset('img/pc.png') }}" width="100%" height="100%" alt="Macbook">
            
        </div>
    </div>
</div>
hello world
@endsection