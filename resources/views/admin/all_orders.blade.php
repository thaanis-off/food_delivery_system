@extends('layouts.admin_layout')

@section('main_content')
    <div class="col-12">
        <div class="d-flex justify-content-between py-2">
            <h5 class="text-dark fw-bold"> Orders</h5>

        </div>
        <!-- <h4>Product Details</h4> -->
        <!-- <button class="btn btn-primary btn-xl"><i class="bi bi-plus-circle"></i> Add new product</button> -->
        <table class="table cart-table text-dark">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">order id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Delivery time</th>
                    <th scope="col">From resturant</th>
                    <th scope="col">Order status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>#5254</td>
                    <td>greek salad</td>
                    <td>10.00 <span>Am</span></td>
                    <td>KFC Resturant</td>
                    <td> <button class="btn btn-warning btn-xl">Order placed</button></td>
                    <td>
                        <a href="view_details"> <button class="btn btn-dark btn-xl">View details</button></a>

                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>#5254</td>
                    <td>greek salad</td>
                    <td>10.00 <span>Am</span></td>
                    <td>Dinner's choice</td>
                    <td> <button class="btn btn-success btn-xl">Order delivered</button></td>
                    <td>
                        <a href="view_details"> <button class="btn btn-dark btn-xl">View details</button></a>

                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>#5254</td>
                    <td>greek salad</td>
                    <td>10.00 <span>Am</span></td>
                    <td>Curry leaf</td>
                    <td> <button class="btn btn-success btn-xl">Order delivered</button></td>
                    <td>
                        <a href="view_details"> <button class="btn btn-dark btn-xl">View details</button></a>

                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>#5254</td>
                    <td>greek salad</td>
                    <td>10.00 <span>Am</span></td>
                    <td>Columbia</td>
                    <td> <button class="btn btn-danger btn-xl">Order cancelled</button></td>
                    <td>
                        <a href="view_details"> <button class="btn btn-dark btn-xl">View details</button></a>

                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>#5254</td>
                    <td>greek salad</td>
                    <td>10.00 <span>Am</span></td>
                    <td>Joy's pizza</td>
                    <td> <button class="btn btn-warning btn-xl">On the way</button></td>
                    <td>
                        <a href="{{ route('viewDetailsView') }}"> <button class="btn btn-dark btn-xl">View
                                details</button></a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
