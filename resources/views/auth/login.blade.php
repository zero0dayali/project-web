@extends('layouts.main')
@section('content')
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                              
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5 my-5">
                                    <div class="text-center p-3">
                                        <h1 class="display-5">
                                            Sign In
                                        </h1>
                                    </div>


                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group validate-input wrap-input100">    
                                <input id="email" type="email" class="input100 has-val @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100"></span>
                                <span class="label-input100">Email</span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group validate-input wrap-input100 ">                                                        
                                <input id="password" type="password" class="input100 has-val  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Password</span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                           
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
       </div>
    </div>
@endsection