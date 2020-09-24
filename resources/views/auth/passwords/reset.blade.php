@extends('layouts.app_user2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div style="padding: 80px;"></div>
            <div class="card">
                <div class="card-header" style="text-align: center; font-weight: bold; font-size: 15px;">Tetapan Semula Katalaluan</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required readonly autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Katalaluan Baru</label>

                            <div class="col-md-6">
                                <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> -->

                                <div class="input-group mb-3">
                                  <input type="password" id="password"  class="form-control bg-light @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Kata Laluan Baru" required>
                                  <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" onclick="visiblePassNew()" type="button" id="button-addon2"><i class="fa fa-eye"></i></button>
                                  </div>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Sahkan Katalaluan Baru</label>

                            <div class="col-md-6">
                                <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> -->
                                <div class="input-group mb-3">
                                  <input type="password" id="password_confirmation"  class="form-control bg-light @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Sahkan Kata Laluan Baru" required>
                                  <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" onclick="visiblePassConfirm()" type="button" id="button-addon2"><i class="fa fa-eye"></i></button>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tukar Katalaluan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function visiblePassNew() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function visiblePassConfirm() {
  var x = document.getElementById("password_confirmation");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endsection
