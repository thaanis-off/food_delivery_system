   @extends('layouts.admin_layout')
@section('main_content')    
 <div class="col-12">
                            <div class="d-flex justify-content-between py-2">
                                <h5 class="text-dark fw-bold"> Food Menu</h5>
                                <a href="add_menu" class="btn btn-success btn-xl" style="margin-right: 4em;"><i
                                        class="bi bi-plus-circle"></i> New Item</a>
                            </div>
                            <!-- <h4>Product Details</h4> -->
                            <!-- <button class="btn btn-primary btn-xl"><i class="bi bi-plus-circle"></i> Add new product</button> -->
                            <table class="table cart-table text-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">S.no</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">MRP</th>
                                        <th scope="col">Selling Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td><img class="admin-index-img" src="{{asset('assets/images/11.jpg')}}" alt="Greek salad"></td>
                                        <td>Greek salad</td>
                                        <td><span>LKR </span>1200<span>.00</span></td>
                                        <td><span>LKR </span>2400<span>.00</span></td>
                                        <td>
                                            <span>1</span>
                                        </td>
                                        <td>
                                            <a href="edit_menu"> <button class="btn btn-dark btn-xl"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><img class="admin-index-img" src="{{asset('assets/images/cake1.webp')}}" alt="Greek salad"></td>
                                        <td>Strawberry Cake</td>
                                        <td><span>LKR </span>750<span>.00</span></td>
                                        <td><span>LKR </span>1500<span>.00</span></td>
                                        <td>
                                            <span>2</span>
                                        </td>
                                        <td>
                                            <a href="update_menu.html"> <button class="btn btn-dark btn-xl"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>3.</td>
                                        <td><img class="admin-index-img" src="{{asset('assets/images/3.jpg')}}" alt="Greek salad"></td>
                                        <td>Hot Pizza</td>
                                        <td><span>LKR </span>550<span>.00</span></td>
                                        <td><span>LKR </span>2200<span>.00</span></td>
                                        <td>
                                            <span>3</span>
                                        </td>
                                        <td>
                                            <a href="update_menu.html"> <button class="btn btn-dark btn-xl"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td><img class="admin-index-img" src="{{asset('assets/images/13.jpg')}}" alt="Greek salad"></td>
                                        <td>Hot Pizza</td>
                                        <td><span>LKR </span>550<span>.00</span></td>
                                        <td><span>LKR </span>2200<span>.00</span></td>
                                        <td>
                                            <span>8</span>
                                        </td>
                                        <td>
                                            <a href="update_menu.html"> <button class="btn btn-dark btn-xl"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
@endsection