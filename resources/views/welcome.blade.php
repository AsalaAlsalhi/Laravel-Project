@extends('layouts.base')

@section('title', 'Welcome to FruitStore')

@section('content')
<div class="container mt-5 text-center">
<h1 class="mb-4" style="font-weight: 700; font-family: 'Pacifico', cursive; color: #ff7f50;">
  Welcome to FruitStore 🍓
</h1>

    <!-- <p class="lead">Fresh, sweet, and hand-picked fruits delivered to your door 🍇🍍</p> -->

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4>🍌 Bananas</h4>
                    <!-- <p></p> -->
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4>🍎 Apples</h4>
                    <!-- <p></p> -->
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4>🍉 Watermelons</h4>
                    <!-- <p></p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
