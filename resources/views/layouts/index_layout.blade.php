
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/card.css')}}">
    <body>


  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand fw-bolder" style="color:tomato; font-size: 30px;"href="index.html">Foodie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2  mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <a class="nav-link active" aria-current="page" href="resturant"> <li class="nav-item">Resturants</li></a>
                        
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Foods</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="cont">
                        <form action="https://www.google.com/search" class="search" id="search-bar"  >
                            <input type="search" placeholder="Search your favourite..." name="search" class="search__input" >
                
                            <div class="search__button" id="search-button">
                                <i class="ri-search-2-line search__icon"></i>
                                <i class="ri-close-line search__close"></i>
                            </div>
                        </form>
                    </div>
                    
                    
                      <a href="food_deli/card" style="text-decoration: none; color: inherit; margin-left: 20px;">
                          <button class="btn btn-outline-dark" type="submit" >
                            <i class="bi-cart-fill me-1"></i>
                            
                            Cart
                            
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                      </a>
                    
                 
                 
                        
                            <li class="nav-item dropdown nameBar" style="margin-left: 50px;">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Thaanis M</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <li><a class="dropdown-item" href="#!">Sign out</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">My order</a></li>
                                <li><a class="dropdown-item" href="#!">Wish list</a></li>
                            </ul>
                            
                            </li>

                     
                       
                   
                    
                   

                        
                    
                </div>
            </div>
        </nav>

       
    <div class="container">
        <div class="row">
            @yield('main_content')
            
        </div>
    </div>

<div class="container-fluid bg-dark">
  <footer class="py-2">
    <div class="row">
      <div class="col-md-5 ftr-hdng py-4">
          <h5 class="text-uppercase Tmt-txt fw-bolder">Foodie</h5>
          <p class="footer-text text-white text-secondary">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
        </div>
      <div class="col-6 col-md-2 mb-3  py-4 mb-2">
        <h5 class="text-uppercase text-white fw-bolder">company</h5>
        <ul class="nav flex-column company-txt">
          <li class="nav-item mb-2 text-white"><a href="#" class="nav-link p-0 text-white">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Delivery</a></li>
          
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3 ftr-hdng py-4" style="margin-left: 200px;">
          <h5 class="text-uppercase text-white fw-bolder">get in touch</h5>
          <ul class="nav flex-column gt-in-tch">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">+94 777557990</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">thasnimthaanish@gmail.com</a></li>

          </ul>
        </div>

     
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-white">
          <p>&copy; 2024 Thaanis mohamed. All rights reserved.</p>
         
        </div>
      
    </div>
  
   
  </footer>
</div>
           

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>