@extends('layouts.app_user2')

@section('content')
    <!-- Main content start -->
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <div class="card mx-3 mx-md-0 border-0 rounded-lg">
          <h5 class="card-header" style="text-align: center;">Log Masuk</h5>

            <div class="card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Left side -->
                    <!-- <div class="col-md-6 border-0 border-md-right"> -->
                    <div class="col-md-12">
                        <!-- Brand -->
                        <div class="login-brand m-3 m-md d-flex justify-content-center align-items-center">
                            <img src="{{ asset('https://eresearch.forestry.gov.my/static_files/images/logos/99wVeGrpFpy_qG7bZk30YtKiMEXzhPPK.png') }}" alt="image" class="w-25">
                        </div>
                        <div style="padding: 15px;">

                        </div>

                        <div class="row">
                          <div class="col-md-1">

                          </div>
                          <div class="col-md">
                            &nbsp&nbsp&nbsp
                            <div class="btn-group">
                                <button class="btn btn-primary">Bahasa Melayu</button>
                                <!-- <button class="btn btn-outline-primary">English</button> -->
                                <a href="{{ route('auth.login_eng') }}" class="btn btn-outline-primary">English</a>
                            </div>
                          </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
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


                            <div style="padding: 15px;">
                            <div class="row">

                              <div class="col-md">
                                <!-- <h5 class="text-dark my-3" style="padding-top:20px; text-align: center;">Log Masuk | Login</h5> -->
                              </div>
                            </div>




                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <div class="col-md-10">
                                <div class="form-group">
                                    <label for="kad_pengenalan" class="text-muted">Kad Pengenalan / Pasport</label>
                                    <input id="kad_pengenalan" type="text" class="form-control badge-pill bg-light @error('kad_pengenalan') is-invalid @enderror" name="kad_pengenalan" value="{{ old('kad_pengenalan') }}" required autocomplete="kad_pengenalan" autofocus>



                                    @error('kad_pengenalan')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-1">

                              </div>
                              <div class="col-md-10">
                                <!-- Password -->
                                <div class="form-group">
                                    <label for="Passeord" class="text-muted">Kata Laluan</label>
                                    <div class="input-group mb-3">
                                      <input id="password" type="password" class="form-control badge-pill bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" onclick="visiblePass()" type="button" id="button-addon2"><i class="fa fa-eye"></i></button>
                                      </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <div class="col-md-10">
                                <!-- Remember me checkbox -->
                                <div class="custom-control custom-checkbox" style="display: none;">
                                    <input id="my-input" class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="my-input" class="custom-control-label">Remember me</label>
                                </div>
                              </div>
                            </div>

                            <input type="hidden" name="language" value="melayu">

                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <div class="col-md-10">
                                <button type="submit" class="btn btn-primary rounded m-1 btn-outline-primary badge-pill btn-block w-50 m-auto">Log Masuk</button>
                              </div>
                            </div>

                            <br>

                        </form>
                        <div class="btn btn-block w-75 m-auto">
                        <div class="btn btn-primarynew rounded m-0">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" >Lupa Kata Laluan</a>
                            </div>
                            <span> | </span>
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
    <script type="text/javascript">
    function visiblePass() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>

@endsection
