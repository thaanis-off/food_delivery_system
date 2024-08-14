@extends('layouts.admin_layout')
@section('main_content')
                    <div class="py-2">
                        <h4 class="fw-bolder">Add Resturant</h4>
                    </div>
                    <div class="col-md-8">
                            <form action="/admin/store" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">
                                            Name
                                        </label>
                                        <input type="text" name="name" id="name" class="form-control 
                                        @if($errors->has('name')) {{'is-invalid'}} @endif"
                                        placeholder="Enter resturant name" value="{{old('name')}}">
                                         @if($errors->has('name'))
                                       <div class="invalid-feedback">{{$errors->first("name")}} </div>
                                        @endif
                                    </div>
                                </div>

                              
                                

                                {{-- strt --}}
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="opening_time" class="form-label" >Select Opening Time</label>
                                     
                                    <input class="form-control @if($errors->has('opening_time')) {{'is-invalid'}} @endif" type="time" id="opening_time" name="opening_time" value="{{old('opening_time')}}">
                                       @if($errors->has('opening_time'))
                                       <div class="invalid-feedback">{{$errors->first("opening_time")}} </div>
                                        @endif
                                    </div>

                                    <div class="col-md-3">
                                        <label for="closing_time" class="form-label">Select Closing Time</label>
                    
                                    <input class="form-control @if($errors->has('closing_time')) {{'is-invalid'}} @endif" type="time" id="closing_time" name="closing_time" value="{{old('closing_time')}}">
                                          @if($errors->has('closing_time'))
                                       <div class="invalid-feedback">{{$errors->first("closing_time")}} </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Status</label>
                                        <select class="form-select @if($errors->has('status')) {{'is-invalid'}} @endif" aria-label="Default select example" name="status" required>
                                            <option selected disabled>Select the status</option>
                                            <option value="1" @if (old('status') == '1' )
                                            selected @endif >Opened Now</option>
                                            <option value="0" @if (old('status') == '0' )
                                            selected @endif>Closed Now</option>
                                        </select>
                                         @if($errors->has('status'))
                                       <div class="invalid-feedback">{{$errors->first("status")}} </div>
                                        @endif
                                    </div>
                                </div>
                                {{-- end --}}
                            

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" id="description" style="resize: none; height: 150px;" ;
                                            class="form-control  @if($errors->has('description')) {{'is-invalid'}} @endif" placeholder="Enter resturant description">{{old('description')}}</textarea>
                                             @if($errors->has('description'))
                                       <div class="invalid-feedback">{{$errors->first("description")}} </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">
                                            Resturant Image
                                        </label>
                                        <input type="file" name="image" id="image" class="form-control  @if($errors->has('image')) {{'is-invalid'}} @endif" >
                                         @if($errors->has('image'))
                                       <div class="invalid-feedback">{{$errors->first("image")}} </div>
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