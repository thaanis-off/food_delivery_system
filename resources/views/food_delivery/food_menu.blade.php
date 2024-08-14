@extends('layouts.index_layout')
@section('main_content')
    <div class="col-md-10 my-4">
        <img src="{{ asset('assets/images/kfc-rest.jpg') }}" alt="product" class="img-menu">
        <div class="col-md-10 Oh4 textClr">

        </div>
    </div>

    <h3 style="margin-top: 450px;" class="fw-semibold">Top category of KFC</h3>
    <p>Choose from a diverse menu featuring a delectable array of dishes. Our mission is to satisfy your
        <br>cravings and elevate your dining experience, one delicious meal at a time.
    </p>

    <div class="col-1 col-sm-1 category">
        <img src="{{ asset('assets/images/kfc-menu-1.jpg') }}" alt="Salad">
        <p>Crispy Chicken</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/kfc-menu-2.jpg') }}" alt="Rolls">
        <p>Burgers</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/kfc-menu-3.jpg') }}" alt="Deserts">
        <p>Snacks & Bites</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/submrn.jpg') }}" alt="Sandwich ">
        <p>Wraps & Submarine</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/hot-drumbles.jpg') }}" alt="Cake">
        <p>Hot Drumlets</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/briyani.jpg') }}" alt="Pure Veg">
        <p>KFC Biriyani</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/sides.jpg') }}" alt="Pasta">
        <p>Sides</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/img8.jpg') }}" alt="Noodles">
        <p>Pizza</p>
    </div>
    <div class="col-1 col-sm-1  category ">
        <img src="{{ asset('assets/images/shawarma.jpg') }}" alt="Cake">
        <p>Chiken Shawarma</p>
    </div>

    <hr>
    <h3 class="fw-semibold">Top dishes of KFC</h3>

    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{ asset('assets/images/bucket3.jpg') }}" class="card-img-top index-card-img" alt="Greek Salad"
                    data-bs-toggle="modal" data-bs-target="#Modal1">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                </button>
                <h5 class="card-title card-title-index mt-3" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Bucket /6PC (H&C)</h5>
                <div class="card-rating">
                    ★★★★☆
                </div>
                <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                <p class="index-card-price">1500</p>
            </div>
        </div>
    </div>
@endsection
