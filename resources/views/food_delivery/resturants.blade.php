@extends('layouts.index_layout')
@section('main_content')
    <div class="col-md-10 my-4">
        <img src="{{ asset('assets/images/bohemia-restaurant-pdr-2.jpg') }}" alt="product" class="img-menu">
        <div class="col-md-10 Oh4 textClr">
        </div>
    </div>

    <h3 style="margin-top: 450px;" class="fw-semibold">Choose your favourite resturant here</h3>
    <p>Discover and choose your favorite restaurant from our curated list. Enjoy diverse cuisines and <br> exceptional
        dining experiences, all just a click away!
        <br>
    </p>
    @foreach ($resturants as $rest)
        <div class="col-6 mb-4 my-2">
            <a href="{{ route('resturantview', ['id' => $rest->id]) }}">
                <div class="card rest shadow">

                    <img src="resturant_images/{{ $rest->image }}" class="card-img-top rest-card-img" alt="Greek Salad"
                        data-bs-toggle="modal" data-bs-target="#Modal2">
                    <div class="card-body rest-card-body">
                        <h5 class="card-title card-title-rest mt-3" data-bs-toggle="modal" data-bs-target="#Modal2">
                            {{ $rest->name }}</h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>
                        <p class="card-text rest-card-text">{{ $rest->description }}</p>
                        <span class="card-text text-dark opnORcls"><span>Opening time :</span></span>
                        <span class="card-text opnORcls text-dark"><span>(<span><span>{{ \Carbon\Carbon::parse($rest->opening_time)->format('g:i A') }}</span>
                                    -
                                    <span>{{ \Carbon\Carbon::parse($rest->closing_time)->format('g:i A') }}</span></span>)</span></span>
                        <span class="card-text text-dark status sss"><span><span
                                    class="@if ($rest->status == false) {{ 'text-danger' }} @else {{ 'text-success' }} @endif s">
                                    @if ($rest->status == false)
                                        {{ 'Closed Now' }}
                                    @else
                                        {{ 'Open Now' }}
                                    @endif
                                </span> </span></span>


                    </div>

                </div>
            </a>
        </div>
    @endforeach
@endsection
