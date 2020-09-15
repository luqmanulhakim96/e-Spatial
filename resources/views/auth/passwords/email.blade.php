@extends('layouts.app_user2')

@section('content')
    <div class="login-page d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <div class="card mx-3 mx-md-0 border-0 rounded-lg">
            <div class="card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-md-12">
                        <!-- Brand -->
                        <div class="login-brand m-3 m-md d-flex justify-content-center align-items-center">
                          <img src="{{ asset('https://eresearch.forestry.gov.my/static_files/images/logos/99wVeGrpFpy_qG7bZk30YtKiMEXzhPPK.png') }}" alt="image" class="w-25">

                        </div>


                    </div>
                    <!-- Right side -->
                    <!-- <div class="col-md-6 d-flex flex-column justify-content-center align-items-center pt-3 pt-md-0">
                        <button class="btn btn-raised btn-primary btn-icon m-2 badge-pill btn-block w-75"><i class="fas fa-at"></i> <p class="d-inline">Sign up with Email</p></button>
                        <button class="btn btn-raised btn-google btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-google"></i> <p class="d-inline">Sign up with Google</p></button>
                        <button class="btn btn-raised btn-facebook btn-icon m-2 badge-pill btn-block w-75"><i class="fab fa-facebook-f"></i> <p class="d-inline">Sign up with Facebook</p></button>
                    </div> -->
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">

                    <form  method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class=""style="padding: 5px;">

                        </div>
                        <h5 class="text-dark my-4" style="text-align: center;">Tetapan Semula Kata Laluan</h5>
                        <!-- Email -->
                        <div class="row">
                          <div class="col-md">
                            <div class="card-header" style="text-align: justify; text-justify: inter-word; border: 1px solid black;">
                              <h6 style="text-align: center; font-weight: bold;">Cara Tetapan Semula Kata Laluan:</h6>
                              <span>1. Masukkan email yang berdaftar dengan sistem</span><br>
                              <span>2. Tekan butang "Tetapan Semula Kata Laluan"</span><br>
                              <span>3. Sila tekan pautan yang dihantar melalui email</span><br>
                              <span>4. Masukkan katalaluan baru</span><br>
                              <span>5. Tekan butang hantar</span><br>
                            </div>
                          </div>
                        </div>

                        <div style="padding: 15px;"></div>

                        <div class="form-group">
                            <label for="email" class="text-muted">Email Pengguna</label>
                            <input id="email" type="email" class="form-control badge-pill bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div style="padding: 5px">

                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block m-auto" style="width: 50%">Tetapan Semula Katalaluan</button>

                        <div class="btn btn-block w-75 m-auto">
                        <div class="btn btn-primarynew rounded m-0">
                                @if (Route::has('password.request'))
                                <a href="{{ route('login') }}" >Log Masuk</a>
                            </div>
                            <span> | </span>
                            <div class="btn btn-primarynew rounded m-0">
                                @endif
                                <a href="{{ route('register') }}">Daftar</a>
                            </div>

                        </div>


                    </form>

                  </div>
                  <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
