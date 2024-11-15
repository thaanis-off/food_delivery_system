@extends('layouts.index_layout')
@section('main_content')
    <div class="col-md-10 my-4">
        <img src="{{ asset('resturant_bnr_images/' . $resturant->resturant_banner_image) }}" alt="{{ $resturant->name }}"
            class="img-menu">
        <div class="col-md-10 Oh4 textClr">
        </div>
    </div>

    <h3 style="margin-top: 450px;" class="fw-semibold">Top category of {{ $resturant->name }}</h3>
    <p class="rest-title">{{ $resturant->title }} </p>




    <div class="cat-div">
        @foreach ($categories as $category)
            <div class="col-1 col-sm-1 category">

                <img src="{{ asset('category_images/' . $category->image) }}" alt="">
                <p>{{ $category->name }}</p>

            </div>
        @endforeach
    </div>




    <hr>
    <h3 class="fw-semibold">All the dishes of {{ $resturant->name }}</h3>


    @foreach ($food_menus as $food)
        <div class="col-3 mb-4" name="food_menu">
            <div class="card CardHome shadow">
                <div class="card-body index-card-body">
                    <img src="{{ asset('food_menu_images/' . $food->image) }}" class="card-img-top index-card-img"
                        alt="Greek Salad" data-bs-toggle="modal" data-bs-target="#Modal1">
                    <button class="plus-button">
                        <i class="fas fa-plus"></i>
                    </button>
                    <h5 class="card-title card-title-index mt-3" data-bs-toggle="modal" data-bs-target="#Modal1">
                        {{ $food->name }}</h5>
                    <div class="card-rating">
                        ★★★★☆
                    </div>
                    <p class="card-text"> {{ $food->description }}</p>
                    <p class="index-card-price"> {{ $food->selling_price }}</p>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($food_menus as $food)
        <!-- first inedx food modal-->
        <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close cls-btn-index" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <!-- card page start -->
                        <div class="col-md-12 mb-4">
                            <div class="card cardShow">
                                <img src="{{ asset('food_menu_images/' . $food->image) }}"
                                    class="card-img-top show-card-img" alt="Greek Salad">
                                <div class="card-body">
                                    <h5 class="card-title card-title-show mt-3">{{ $food->name }}</h5>
                                    <span class="card-rating">★★★★☆</span>
                                    <small>
                                        <a href="" style="color:black;">(0 customer reviews)</a>
                                    </small>
                                    <p class="card-text show-card-text text-secondary">{{ $food->description }}</p>
                                    <span class="card-price show-card-price fw-semibold" style="margin-right: 9px;"><span
                                            style="color: black;">Rs.</span>{{ $food->selling_price }}</span>
                                    <span
                                        class="card-price show-card-price text-decoration-line-through text-danger fw-semibold"><span
                                            style="color: black;">Rs.</span>{{ $food->mrp }}</span>
                                    <small>
                                        @php

                                            $prcnt = ($food->selling_price / $food->mrp) * 100;
                                            echo round($prcnt, 2) . '%'; // 2.7% -- (30 / 1110) * 100 rounded to 2dp
                                            //echo $prcnt;
                                        @endphp





                                    </small>
                                    <p class="fw-semibold" style="margin-top: 8px;">Quantity</p>

                                    <div class="d-flex">
                                        <input class="form-control text-center me-3" id="inputQuantity" type="num"
                                            value="1" style="max-width: 3rem" />
                                        <button class="btn btn-outline-dark flex-shrink-0" type="button">Buy now</button>
                                        <button class="btn btn-outline-dark flex-shrink-0" type="button"
                                            style="margin-left: 10px;">
                                            <i class="bi-cart-fill me-1"></i>
                                            Add to card
                                        </button>
                                    </div>
                                    <button class="btn btn-outline-dark flex-shrink-0" type="button"
                                        style="margin-top: 10px;">
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- card page end -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- first index modal end -->
@endsection

{{-- @section('food_menu_scripts')
    <script type="text/javascript">
        jQuery('select[name="food_menu"]').on('change', function() {
            var resturantID = jQuery(this).val();
            if (resturantID) {
                jQuery.ajax({
                    url: "{{ url('admin/getFoodmenus') }}?resturant_id=" + resturantID,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        jQuery('select[name="category"]').empty();
                        $('select[name="category"]').append(
                            '<option selected disabled>Select...</option>');
                        jQuery.each(data, function(key, value) {
                            $('select[name="category"]').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="category"]').empty();
            }
        });
    </script>
@endsection --}}
