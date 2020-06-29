<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Assets/style.css')}}">
    <link rel="shortcut icon" href="{{asset('Assets/image/icon.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar navbar-nav mr-auto ml-5 mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{url('women')}}">Wanita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{url('men')}}">Pria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{url('kids')}}">Kids</a>
                </li>
            </ul>
            
            <a class="navbar-brand mx-auto logo" href="{{('/home')}}"><img src="{{asset('Assets/image/logo.png')}}" alt=""></a>

            <ul class="navbar navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">About</a>
                </li>
                <li class="nav-item">
                  @if (Auth::user() == false)
                    <a class="nav-link text-white bg-secondary rounded-lg btn-sm-block" href="{{url('login')}}">Login</a>
                  @else
                    <a class="nav-link text-white bg-secondary rounded-lg" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </a>
                  @endif
                </li>
            </ul>
        </div>
    </nav>
    <!-- Search -->
    <div class="row search mx-0 pt-3 pb-3 bg-dark text-white">
        <div class="col offset-1">Looking For Something ?</div>
        <div class="col offset-4"><input type="text " class="form" placeholder="Search.."></div>
    </div>

    @yield('content')
      

      <!-- Footer Links -->
      <footer class="container text-center text-md-left mt-5">
    
        <div class="row mt-3">    
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold text-dark">Viliments</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p class="text-dark">Store for sell or buy teenage outfit from bandung.</p>    
          </div>
    
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold text-dark">Products</h6>
            <hr class="accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a href="{{url('men')}}" class="text-secondary">Men Product</a>
            </p>
            <p>
              <a href="{{url('women')}}" class="text-secondary">Women Product</a>
            </p>
            <p>
              <a href="{{url('kids')}}" class="text-secondary">Kids Product</a>
            </p>
          </div>
    
    
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold text-dark" >Contact</h6>
            <hr class="accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p class="text-dark">Bandung, Jawa Barat Indonesia</p>
            <p class="text-dark">vilments@gmail.com</p>
            <p class="text-dark">555-265-456</p>    
          </div>    
        </div>
    
    </footer>
      
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>