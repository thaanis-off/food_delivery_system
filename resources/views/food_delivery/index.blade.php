@extends('layouts.index_layout')

@section('main_content')
     <div class="col-md-10 my-4">
                <img src="{{asset('assets/images/sss.jpg')}}" alt="product" class="img-index">
                <div class="col-md-10 Oh4 textClr">
                    <h1>Order your </h1>
                       <h1>favourite  food here</h1> 
                    
                    <p>Order your food now and enjoy delicious meals delivered <br>hot and fresh right to your doorstep. Fast, easy, convenient your doorstep. <br> Fast, easy, convenient!</p>
                        <button class="btn btn-outline-dark" type="submit" style="color: white;">
                            Order now !
                        </button>
                </div>
            </div>

            <h3 style="margin-top: 550px;" class="fw-semibold">Top category for you</h3>
            <p >Choose from a diverse menu featuring a delectable array of dishes. Our mission is to satisfy your <br>cravings and elevate your dining experience, one delicious meal at a time.</p>
            
            <div class="container">
                <div class="row">
                  
                  <div class="col-1 col-sm-1 category">
                    <img src="{{asset('assets/images/salad.jpg')}}" alt="Salad">
                    <p>Salad</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/rolls.jpg')}}" alt="Rolls">
                    <p>Rolls</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/desserts.jpg')}}" alt="Deserts">
                    <p>Deserts</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/sandwich.avif')}}" alt="Sandwich ">
                    <p>Sandwich</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/cake.jpeg')}}" alt="Cake">
                    <p>Cake</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/pureveg.jpg')}}" alt="Pure Veg">
                    <p>Pure Veg</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/pasta.jpg')}}" alt="Pasta">
                    <p>Pasta</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/noodles.jpg')}}" alt="Noodles">
                    <p>Noodles</p>
                  </div>
                  <div class="col-1 col-sm-1  category ">
                    <img src="{{asset('assets/images/cake.jpeg')}}" alt="Cake">
                    <p>Cake</p>
                  </div>
                 
                
                </div>
              </div>
              <hr>
              <h3 class="fw-semibold">Top dished for you</h3>
        
    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/greek-salad.webp')}}" class="card-img-top index-card-img" alt="Greek Salad" data-bs-toggle="modal" data-bs-target="#Modal1">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" data-bs-toggle="modal" data-bs-target="#Modal1">Greek Salad</h5>
                    <div class="card-rating">
                        ★★★★☆
                    </div>
                    <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                    <p class="index-card-price">1500</p>
            </div>
        </div>
      </div>

    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/clover-salad.j3pg.jpg')}}" class="card-img-top index-card-img" alt="Greek Salad" data-bs-toggle="modal" data-bs-target="#Modal2">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" data-bs-toggle="modal" data-bs-target="#Modal2">Clover Salad   </h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>    
                            <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                            <p class="index-card-price">1200</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/veg-saled.avif')}}" class="card-img-top index-card-img" alt="Greek Salad">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" >Veg Salad   </h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>    
                            <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                            <p class="index-card-price">1200</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/chicken-salad.webp')}}" class="card-img-top index-card-img" alt="Greek Salad">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" >Chicken Salad   </h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>    
                            <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                            <p class="index-card-price">1200</p>
            </div>
        </div>
    </div>

          
    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/noodles1.jpg')}}" class="card-img-top index-card-img" alt="Greek Salad">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3">Fried noodles</h5>
                    <div class="card-rating">
                        ★★★★☆
                    </div>
                    <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                    <p class="index-card-price">1500</p>
            </div>
        </div>
      </div>

    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/sandwich1.jpg')}}" class="card-img-top index-card-img" alt="Greek Salad" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Hot sand      </h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>    
                            <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                            <p class="index-card-price">1200</p>
            </div>
        </div>
    </div>

    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/dsrt.png')}}" class="card-img-top index-card-img" alt="Greek Salad">
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" >Honey bee   </h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>    
                            <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                            <p class="index-card-price">1200</p>
            </div>
        </div>
    </div>


    <div class="col-3 mb-4">
        <div class="card CardHome shadow">
            <div class="card-body index-card-body">
                <img src="{{asset('assets/images/cake1.webp')}}" class="card-img-top index-card-img" alt="Greek Salad" >
                <button class="plus-button">
                    <i class="fas fa-plus"></i>
                  </button>
                    <h5 class="card-title card-title-index mt-3" >Chyired cake   </h5>
                        <div class="card-rating">
                            ★★★★☆
                        </div>    
                            <p class="card-text">Food provides essential nutrients for overall health and well-being</p>
                            <p class="index-card-price">1200</p>
            </div>
        </div>
    </div>

    
<!-- first inedx food modal-->
<div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close cls-btn-index" data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- card page start -->
          <div class="col-md-12 mb-4">
            <div class="card cardShow">
              <img src="{{asset('assets/images/greek-salad.webp')}}" class="card-img-top show-card-img" alt="Greek Salad">
              <div class="card-body">
                <h5 class="card-title card-title-show mt-3" >Greek salad</h5>
                <span class="card-rating">★★★★☆</span>
                <small>
                  <a href="" style="color:black;">(0 customer reviews)</a>
                </small>
                  <p class="card-text show-card-text text-secondary">Food provides Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                <span class="card-price show-card-price fw-semibold" style="margin-right: 9px;"><span style="color: black;">Rs.</span>1200</span>
                <span class="card-price show-card-price text-decoration-line-through text-danger fw-semibold"><span style="color: black;">Rs.</span>1000</span>
                  <small> -75% off</small>
                    <p class="fw-semibold" style="margin-top: 8px;">Quantity</p>

                      <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">Buy now</button>
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-left: 10px;">
                          <i class="bi-cart-fill me-1"></i>
                            Add to card
                        </button>             
                      </div>
                          <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-top: 10px;">
                            <i class="bi bi-heart-fill"></i>
                          </button>                  
              </div>
            </div>
          </div>
       <!-- card page end -->
      </div>
    </div>
  </div>
</div>
<!-- first index modal end -->
 

<!-- 2nd inedx food modal-->
<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close cls-btn-index" data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- card page start -->
          <div class="col-md-12 mb-4">
            <div class="card cardShow">
              <img src="{{asset('assets/images/clover-salad.j3pg.jpg')}}" class="card-img-top show-card-img" alt="Greek Salad">
              <div class="card-body">
                <h5 class="card-title card-title-show mt-3" >Clover salad</h5>
                <span class="card-rating">★★★★☆</span>
                <small>
                  <a href="" style="color:black;">(0 customer reviews)</a>
                </small>
                  <p class="card-text show-card-text text-secondary">Food provides Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                <span class="card-price show-card-price fw-semibold" style="margin-right: 9px;"><span style="color: black;">Rs.</span>1200</span>
                <span class="card-price show-card-price text-decoration-line-through text-danger fw-semibold"><span style="color: black;">Rs.</span>1000</span>
                  <small> -75% off</small>
                    <p class="fw-semibold" style="margin-top: 8px;">Quantity</p>

                      <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">Buy now</button>
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-left: 10px;">
                          <i class="bi-cart-fill me-1"></i>
                            Add to card
                        </button>             
                      </div>
                          <button class="btn btn-outline-dark flex-shrink-0" type="button" style="margin-top: 10px;">
                            <i class="bi bi-heart-fill"></i>
                          </button>                  
              </div>
            </div>
          </div>
       <!-- card page end -->
      </div>
    </div>
  </div>
</div>
<!-- first index modal end -->
@endsection