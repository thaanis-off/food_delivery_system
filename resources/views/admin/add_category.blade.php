  @extends('layouts.admin_layout')
  @section('main_content')
      <div class="col-md-8">
          <form action="/admin/storeFoods" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                  <div class="py-2">
                      <h4 class="fw-bolder">Add Menu</h4>
                  </div>
                  <div class="col-md-6">
                      <label for="name" class="form-label">
                          Name
                      </label>
                      <input type="text" name="name" id="name"
                          class="form-control @if ($errors->has('name')) {{ 'is-invalid' }} @endif"
                          placeholder="Enter Product Name" value="{{ old('name') }}">
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
                              <option value="{{ $resturant->id }}" @if (old('resturant') == $resturant->id) selected @endif>
                                  {{ $resturant->name }}
                              </option>
                          @endforeach
                      </select>
                      @if ($errors->has('resturant'))
                          <div class="invalid-feedback">{{ $errors->first('resturant') }} </div>
                      @endif
                  </div>
              </div>



      </div>

      <div class="row mb-3">
          <div class="col-md-12">
              <label for="title" class="form-label">Title</label>
              <textarea name="title" id="title" style="resize: none; height: 150px;" ;
                  class="form-control  @if ($errors->has('title')) {{ 'is-invalid' }} @endif" placeholder="Enter page title">{{ old('title') }}</textarea>
              @if ($errors->has('title'))
                  <div class="invalid-feedback">{{ $errors->first('title') }} </div>
              @endif
          </div>
      </div>

      <div class="row mb-3">
          <div class="col-md-12">
              <label for="image" name="image" class="form-label">
                  Category Image
              </label>
              <input type="file" name="image" id="image"
                  class="form-control @if ($errors->has('image')) {{ 'is-invalid' }} @endif">
              @if ($errors->has('image'))
                  <div class="invalid-feedback">{{ $errors->first('image') }} </div>
              @endif
          </div>
      </div>
      <div class="mb-3">
          <button type="submit" class="btn btn-dark">Save item</button>
          <button type="submit" class="btn btn-danger">Reset</button>
      </div>
      </form>
      </div>
  @endsection
