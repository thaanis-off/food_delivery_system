@extends('layouts.admin_layout')
@section('main_content')
                    <div class="mb-3">
                        <h4 class="fw-bolder">Admin Dashboard</h4>
                    </div>
                
                    {{-- <div class="row"> --}}
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <div class="card card-box1 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 fw-bold  text-lg">$40,000</div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box2 border-left-success shadow h-100 py-2 bg-white">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 fw-bold  text-lg">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box3 border-left-info shadow h-100 py-2 bg-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 fw-bold  text-lg">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2 bg-light">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box4 border-left-warning shadow h-100 py-2 bg-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 fw-bold  text-lg text-lg">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box5 border-left-success shadow h-100 py-2 bg-white">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-warning text-uppercase mb-1">
                                                delivered orders</div>
                                            <div class="h5 mb-0 fw-bold  text-lg">150</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box6 border-left-success shadow h-100 py-2 bg-white">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-info text-uppercase mb-1">
                                                Users</div>
                                            <div class="h5 mb-0 fw-bold  text-lg">250</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box7 border-left-success shadow h-100 py-2 bg-white">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-primary text-uppercase mb-1">
                                                Cancelled orders</div>
                                            <div class="h5 mb-0 fw-bold  text-lg">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card card-box8 border-left-success shadow h-100 py-2 bg-white">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs fw-bold text-success text-uppercase mb-1">
                                                Total Orders</div>
                                            <div class="h5 mb-0 fw-bold  text-lg">400</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- earning row end -->
                    {{-- </div> --}}
                   <div class="col-12">
                    <div class="col-12 py-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-dark fw-bold"> Food Details</h5>
                        </div>
                        
                        <!-- <h4>Product Details</h4> -->
                        <!-- <button class="btn btn-primary btn-xl"><i class="bi bi-plus-circle"></i> Add new product</button> -->
                        <table class="table cart-table text-dark responsive">
                            <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Items</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">MRP</th>
                                    <th scope="col">Selling Price</th>
                                   
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
                                       <a href="update_menu.html"> <button class="btn btn-success btn-xl"><i class="bi bi-pencil-square"></i></button></a>
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
                                        <a href="update_menu.html"> <button class="btn btn-success btn-xl"><i class="bi bi-pencil-square"></i></button></a>
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
                                        <a href="update_menu.html"> <button class="btn btn-success btn-xl"><i class="bi bi-pencil-square"></i></button></a>
                                        <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><img class="admin-index-img" src="{{asset('assets/images/13.jpg')}}" alt="Greek salad"></td>
                                    <td>Hot Pizza</td>
                                    <td><span>LKR </span>550<span>.00</span></td>
                                    <td><span>LKR </span>2200<span>.00</span></td>
                                    
                                    <td>
                                        <a href="update_menu.html"> <button class="btn btn-success btn-xl"><i class="bi bi-pencil-square"></i></button></a>
                                        <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
          
            <div
@endsection