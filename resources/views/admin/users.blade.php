@extends('layouts.admin_layout')
@section('main_content')
<div class="col-12">
    <div class="d-flex justify-content-between py-2">
        <h5 class="text-dark fw-bold"> User Details</h5>
        <a href="#" class="btn btn-success btn-xl" style="margin-right: 4em;" data-bs-toggle="modal"
            data-bs-target="#SignUp11">
            <i class="bi bi-plus-circle">
            </i> New User
        </a>
    </div>
    <!-- <h4>Product Details</h4> -->
    <!-- <button class="btn btn-primary btn-xl"><i class="bi bi-plus-circle"></i> Add new product</button> -->
    <table class="table cart-table text-dark">
        <thead>
            <tr>
                <th scope="col">S.no</th>
                <th scope="col">User Name</th>
                <th scope="col">Gmail</th>
                <th scope="col">Mobile number</th>


                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Nousad</td>
                <td>mrnousho@gmail.com</td>
                <td>0777557990</td>


                <td>
                    <a href="#"> <button class="btn btn-dark btn-xl" data-bs-toggle="modal"
                            data-bs-target="#SignUp12"><i class="bi bi-pencil-square"></i></button></a>
                    <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Mohamed</td>
                <td>mohamedmohamed@gmail.com</td>
                <td>0774545875</td>


                <td>
                    <a href="#"> <button class="btn btn-dark btn-xl" data-bs-toggle="modal"
                            data-bs-target="#SignUp12"><i class="bi bi-pencil-square"></i></button></a>
                    <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                </td>
            </tr>


            <tr>
                <td>3.</td>
                <td>Jafran</td>
                <td>jafranmohamed@gmail.com</td>
                <td>0765858568</td>


                <td>
                    <a href="#"> <button class="btn btn-dark btn-xl" data-bs-toggle="modal"
                            data-bs-target="#SignUp12"><i class="bi bi-pencil-square"></i></button></a>
                    <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                </td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Aalib</td>
                <td>aaliblithaf@gmail.com</td>
                <td>0777747458</td>


                <td>
                    <a href="#"> <button class="btn btn-dark btn-xl" data-bs-toggle="modal"
                            data-bs-target="#SignUp12"><i class="bi bi-pencil-square"></i></button></a>
                    <button class="btn btn-danger btn-xl"><i class="fa fa-times"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

  <!-- Sign Modal strt -->
                        <div class="modal fade" id="SignUp11" tabindex="-1" aria-labelledby="signupModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-semibold" id="signupModalLabel">Add new user</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">User name</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Your name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Your email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Mobile number</label>
                                                <input type="number" class="form-control" id="email"
                                                    placeholder="Mobile number">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="login-password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Confrim password</label>
                                                <input type="password" class="form-control" id="login-password"
                                                    placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-dark w-100"> Save
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sign Modal end -->


                          <!-- Sign Modal2 strt -->
                          <div class="modal fade" id="SignUp12" tabindex="-1" aria-labelledby="signupModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title fw-semibold" id="signupModalLabel">Edit user</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form>
                                          <div class="mb-3">
                                              <label for="name" class="form-label">User name</label>
                                              <input type="text" class="form-control" id="name"
                                                  placeholder="Your name">
                                          </div>
                                          <div class="mb-3">
                                              <label for="email" class="form-label">Email</label>
                                              <input type="email" class="form-control" id="email"
                                                  placeholder="Your email">
                                          </div>
                                          <div class="mb-3">
                                              <label for="email" class="form-label">Mobile number</label>
                                              <input type="number" class="form-control" id="email"
                                                  placeholder="Mobile number">
                                          </div>
                                          <div class="mb-3">
                                              <label for="password" class="form-label">Password</label>
                                              <input type="password" class="form-control" id="login-password"
                                                  placeholder="Password">
                                          </div>
                                          <div class="mb-3">
                                              <label for="password" class="form-label">Confrim password</label>
                                              <input type="password" class="form-control" id="login-password"
                                                  placeholder="Password">
                                          </div>
                                          <button type="submit" class="btn btn-dark w-100"> Update
                                          </button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>

@endsection