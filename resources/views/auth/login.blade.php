@extends('layouts.template')
@yield('title','Login')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center px-lg-5 text-white">
            <div class="col-md-8 my-4 px-lg-5">
                <h2 class="text-center text-white">Login</h2>
                <form action="{{route('login')}}" class="px-lg-5 mx-auto" method="post">
                   @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email"  id="exampleFormControlInput1" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="exampleFormControlInput1" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">                            
                            <button type="submit" class="btn-block btn btn-outline-light mx-auto text-uppercase">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-12 mt-2">
                            @if (Route::has('register'))
                            <a class="btn btn-outline-info btn-block text-uppercase" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

