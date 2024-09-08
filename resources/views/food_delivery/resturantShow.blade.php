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
