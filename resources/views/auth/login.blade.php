@extends('layouts.app_user2')

@section('content')
    <!-- Main content start -->
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <div class="card mx-3 mx-md-0 border-0 rounded-lg">
            <div class="card-body" style="width:500px; height:auto;">
                <!-- Row -->
                <div class="row">
                    <!-- Left side -->
                    <!-- <div class="col-md-6 border-0 border-md-right"> -->
                    <div class="col-md-12">
                        <!-- Brand -->
                        <div class="login-brand m-3 m-md d-flex justify-content-center align-items-center">
                            <img src="{{ asset('https://eresearch.forestry.gov.my/static_files/images/logos/99wVeGrpFpy_qG7bZk30YtKiMEXzhPPK.png') }}" alt="image" class="w-25">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h5 class="text-dark my-3" style="padding-top:20px;">Log Masuk</h5>
                            <!-- Email -->
                            <!-- <div class="form-group mb-2">
                                <label for="email" class="text-muted">Email Address</label>
                                <input id="email" type="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                            <div class="form-group mb-2">
                                <label for="kad_pengenalan" class="text-muted">Kad Pengenalan</label>
                                <input id="kad_pengenalan" type="text" class="form-control badge-pill bg-light @error('kad_pengenalan') is-invalid @enderror" name="kad_pengenalan" value="{{ old('kad_pengenalan') }}" required autocomplete="kad_pengenalan" autofocus>
                                @error('kad_pengenalan')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-2">
                                <label for="Passeord" class="text-muted">Password</label>
                                <input id="Passeord" type="password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Remember me checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input id="my-input" class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="my-input" class="custom-control-label">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary rounded m-1 btn-outline-primary badge-pill btn-block w-75 m-auto">Masuk</button>
                            <br>
                            
                        </form>
                        <div class="btn btn-block w-75 m-auto">
                        <div class="btn btn-primarynew rounded m-0">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" >Lupa Kata Laluan?</a>
                            </div>
                            <div class="btn btn-primarynew rounded m-0">
                                @endif
                                <a href="{{ route('register') }}">Daftar</a>
                            </div>

                        </div>
                    </div>
                    <!-- Right side -->
                    <!-- <div class="col-md-6 d-flex flex-column justify-content-center align-items-center pt-3 pt-md-0">
                        <button class="btn btn-raised btn-google btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-google"></i> <p class="d-inline">Sign up with Google</p></button>
                        <button class="btn btn-raised btn-facebook btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-facebook-f"></i> <p class="d-inline">Sign up with Facebook</p></button>
                        <a href="{{ route('register') }}" class="w-75"><button class="btn btn-primary btn-outline-primary badge-pill btn-block"><p class="d-inline">Sign Up</p></button></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
