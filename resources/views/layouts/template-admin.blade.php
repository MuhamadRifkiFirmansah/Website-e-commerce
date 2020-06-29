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
<body class="bg-white">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar navbar-nav mr-auto ml-5 mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('women')}}">Wanita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('men')}}">Pria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Kids</a>
                </li>
            </ul>
            
            <a class="navbar-brand mx-auto logo" href="#"><img src="{{asset('Assets/image/logo.png')}}" alt=""></a>

            <ul class="navbar navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                  @if (Auth::user() == false)
                    <a class="nav-link text-white bg-secondary rounded-lg btn-login" href="{{url('login')}}">Login</a>
                  @else
                    <a class="nav-link text-white bg-secondary rounded-lg btn-login" href="{{ route('logout') }}"
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
    @yield('content')
      
    <footer>
        <h4 class="bg-dark text-center text-white p-3">Viliments Store Admin</h4>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>