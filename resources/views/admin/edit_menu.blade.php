  @extends('layouts.admin_layout')
@section('main_content')    
<div class="col-md-8">
                            <form action="#" method="post">
                                <div class="row mb-3">
                                    <div class="py-2">
                                        <h4 class="fw-bolder">Edit menu</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">
                                            Name    
                                        </label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">
                                            Quantity    
                                        </label>
                                        <input type="number" name="name" id="name" class="form-control" placeholder="Enter the quantity">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="mrp" class="form-label">M.R.P</label>
                                        <input type="number" name="mrp" id="mrp" class="form-control" placeholder="Enter M.R.P Price">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Selling Price</label>
                                        <input type="number" name="price" id="price" class="form-control" placeholder="Enter the price">
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="" id="description" style="resize: none; height: 150px;"; class="form-control" placeholder="Enter Product Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Top Dishes
                                    </label>
                                  </div>
                                 <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">
                                            Product Image    
                                        </label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark">Update item</button>
                                    <button type="submit" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                        </div>
@endsection