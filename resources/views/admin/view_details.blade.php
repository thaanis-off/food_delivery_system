@extends('layouts.admin_layout')

@section('main_content')
<div class="col-12">
                            <div class="d-flex justify-content-between py-2">
                                <h5 class="text-dark fw-bold"> Orders</h5>

                            </div>

                            <div class="col-5 bg-light order-details">
                                <div class="order-info">
                                    <h5 class="fw-bolder">Billing Infromation</h5>
                                    <hr>
                                    <div class="my-2">
                                        <strong>Order id :</strong>
                                        <span>#1468</span>
                                    </div>
                                    <div class="my-2">
                                        <strong>Name :</strong>
                                        <span>Thaanis moahmed</span>
                                    </div>
                                    <div class="my-2">
                                        <strong>Mobile :</strong>
                                        <span>0777557990</span>
                                    </div>
                                    <div class="my-2">
                                        <strong>Email :</strong>
                                        <span>thasnimthaanish@gmail.com</span>
                                    </div>
                                    <div class="my-2">
                                        <strong>Address :</strong>
                                        <span>2/5 Green field kalmunai</span>
                                    </div>

                                    <div class="my-2">
                                        <strong>Payment Method :</strong>
                                        <span>Credit Card</span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i> Cancel the order</button>
                            <table class="table cart-table text-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">S.no</th>
                                        <th scope="col">order id</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Delivery time</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Payment method</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Delivery boy</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>#5254</td>
                                        <td><a href="#"><img class="admin-index-img" src="{{asset('assets/images/11.jpg')}}" alt="greek salad"></a></td>
                                        <td>greek salad</td>
                                        <td>10.00 <span>Am</span></td>
                                        <td>4</td>
                                        <td>credit card</td>
                                        <td><span>Rs.</span> 1200<span>.00</span></td>
                                        <td>
                                            <div class="col py-2">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Nousad</option>
                                                    <option value="1">Mohamed</option>
                                                    <option value="2">Jafran</option>
                                                    <option value="3">Aalib</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-dark btn-xl" id="liveToastBtn">Assign</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                         <div class="toast-container position-fixed  end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="truje">
                    <div class="toast-header">
                        <!-- <img src="..." class="rounded me-2" alt="..."> -->

                        <strong class="me-auto text-success">Success</strong>
                        <small>Just now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Assigned delivery boy successfull.
                    </div>
                </div>
            </div>
@endsection