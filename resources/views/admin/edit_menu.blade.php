  @extends('layouts.admin_layout')
  @section('main_content')
      <div class="col-md-8">
          <form action="/admin/{{ $food_menus->id }}/updateMenu" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                  <div class="py-2">
                      <h4 class="fw-bolder">Edit Menu</h4>
                  </div>
                  <div class="col-md-6">
                      <label for="name" class="form-label">
                          Name
                      </label>
                      <input type="text" name="name" id="name"
                          class="form-control @if ($errors->has('name')) {{ 'is-invalid' }} @endif"
                          placeholder="Enter Product Name" value="{{ old('name', $food_menus->name) }}">
                      @if ($errors->has('name'))
                          <div class="invalid-feedback">{{ $errors->first('name') }} </div>
                      @endif
                  </div>

                  <div class="col-md-6">
                      <label for="resturant" class="form-label">Resturant</label>
                      <select class="form-select @if ($errors->has('resturant')) {{ 'is-invalid' }} @endif"
                          aria-label="Default select example" name="resturant" required>
                          <option selected disabled>Select the resturant</option>
                          @foreach ($resturants as $resturant)
                              <option value="{{ $resturant->id }}" @if (old('resturant', $resturant->id) == $resturant->id) selected @endif>
                                  {{ $resturant->name }}
                              </option>
                          @endforeach
                      </select>
                      @if ($errors->has('resturant'))
                          <div class="invalid-feedback">{{ $errors->first('resturant') }} </div>
                      @endif
                  </div>

                  {{-- {{ dd($food_menus->category_id) }} --}}
                  <div class="col-md-6 mt-3">
                      <label for="category" class="form-label">Category</label>
                      <select class="form-select @if ($errors->has('category')) {{ 'is-invalid' }} @endif"
                          aria-label="Default select example" name="category" required>
                          <option selected disabled>Select the category</option>

                          @if (old('category'))
                              {{ $category = App\Models\Category::find(old('category')) }}
                              <option value="{{ old('category', $category->name) }}" selected>{{ $category->name }}
                              </option>
                          @endif

                          @if (isset($food_menus->category_id))
                              {{ $category = App\Models\Category::find($food_menus->category_id) }}
                              <option value="{{ $category->id }}" selected>
                                  {{ $category->name }}</option>
                          @endif
                      </select>
                      @if ($errors->has('category'))
                          <div class="invalid-feedback">{{ $errors->first('category') }} </div>
                      @endif
                  </div>
              </div>

              <div class="row mb-3">
                  <div class="col-md-6">
                      <label for="mrp" class="form-label">M.R.P</label>
                      <input type="number" name="mrp" id="mrp"
                          class="form-control @if ($errors->has('mrp')) {{ 'is-invalid' }} @endif"
                          placeholder="Enter M.R.P Price" value="{{ old('mrp', $food_menus->mrp) }}">
                      @if ($errors->has('mrp'))
                          <div class="invalid-feedback">{{ $errors->first('mrp') }} </div>
                      @endif
                  </div>
                  <div class="col-md-6">
                      <label for="selling_price" class="form-label">Selling Price</label>
                      <input type="number" name="selling_price" id="selling_price"
                          class="form-control  @if ($errors->has('selling_price')) {{ 'is-invalid' }} @endif"
                          placeholder="Enter the price" value="{{ old('selling_price', $food_menus->selling_price) }}">
                      @if ($errors->has('selling_price'))
                          <div class="invalid-feedback">{{ $errors->first('selling_price') }} </div>
                      @endif
                  </div>
              </div>

              <div class="row
                          mb-3">
                  <div class="col-md-12">
                      <label for="description" class="form-label">Description</label>
                      <textarea name="description" id="description" style="resize: none; height: 150px;" ;
                          class="form-control  @if ($errors->has('description')) {{ 'is-invalid' }} @endif"
                          placeholder="Enter Product Description">{{ old('description', $food_menus->description) }}</textarea>
                      @if ($errors->has('description'))
                          <div class="invalid-feedback">{{ $errors->first('description') }} </div>
                      @endif
                  </div>
              </div>
              <div class="form-check mb-3">
                  <input class="form-check-input" name="top_dishes" type="checkbox" value="1"
                      @if (old('top_dishes', $food_menus->top_dishes) == '1') checked @endif id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault" name="top_dishes">
                      Top Dishes
                  </label>
              </div>
              <div class="row mb-3">
                  <div class="col-md-12">
                      <label for="image" name="image" class="form-label">
                          Food Image
                      </label>
                      <input type="file" name="image" id="image"
                          class="form-control @if ($errors->has('image')) {{ 'is-invalid' }} @endif">
                      @if ($errors->has('image'))
                          <div class="invalid-feedback">{{ $errors->first('image') }} </div>
                      @endif
                  </div>
              </div>
              <div class="mb-3">
                  <button type="submit" class="btn btn-dark">Update item</button>
                  <button type="submit" class="btn btn-danger">Reset</button>
              </div>
          </form>
      </div>
  @endsection

  @section('scripts')
      <script type="text/javascript">
          jQuery('select[name="resturant"]').on('change', function() {
              var resturantID = jQuery(this).val();
              if (resturantID) {
                  jQuery.ajax({
                      url: "{{ url('admin/getCategoriesList') }}?resturant_id=" + resturantID,
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
  @endsection
