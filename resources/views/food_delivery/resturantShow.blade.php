@extends('layouts.index_layout')
@section('main_content')
    <div class="col-md-10 my-4">
        <img src="{{ asset('all_images/' . $resturant->resturant_banner_image) }}" alt="{{ $resturant->name }}"
            class="img-menu">
        <div class="col-md-10 Oh4 textClr">
        </div>
    </div>

    <h3 style="margin-top: 450px;" class="fw-semibold">Top category of {{ $resturant->name }}</h3>
    <p class="rest-title">{{ $resturant->title }} </p>

    <div class="cat-div">

        {{-- {{ dd($resturant->food_menus()) }} --}}

        <div class="col-1 col-sm-1 category">
            <img src="{{ asset('assets/images/kfc-menu-1.jpg') }}" alt="Salad">
            <p>Crispy Chicken</p>
        </div>

    </div>
    <hr>
    <h3 class="fw-semibold">Top dishes of {{ $resturant->name }}</h3>

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
