  @extends('layouts.admin_layout')
@section('main_content')           
         
                    <div class="py-2">
                        <h4 class="fw-bolder">Edit Resturant</h4>
                    </div>
                        <div class="col-md-8">
                            <form action="#" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">
                                            Name    
                                        </label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter resturant name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="mrp" class="form-label">Opening Time</label>
                                        <input type="number" name="mrp" id="mrp" class="form-control" placeholder="Am">
                                       
                                    </div>

                                    <div class="col-md-1">
                                        <h6 style="margin-top: 38px;">To</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="mrp" class="form-label">Closing Time</label>
                                        <input type="number" name="mrp" id="mrp" class="form-control" placeholder="Pm">
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Status</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Opened Now</option>
                                            <option value="1">Closed Now</option>   
                                          </select>
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="" id="description" style="resize: none; height: 150px;"; class="form-control" placeholder="Enter resturant description"></textarea>
                                    </div>
                                </div>
                              
                                 <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">
                                            Resturant Image    
                                        </label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark">Udate item</button>
                                    <button type="submit" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                        </div>
@endsection