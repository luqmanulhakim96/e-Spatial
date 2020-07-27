@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">

                      <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                          <div class="card-title">Tukar Kata Laluan</div>
                        </div>
                      </div>

                      <form class="" action="{{route('profil-admins.updatePass')}}" method="post">
                        @csrf

                      <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Kata Laluan Terdahulu</label>
                            <input type="password"  class="form-control bg-light @error('old_pass') is-invalid @enderror" name="old_pass" placeholder="Masukkan Kata Laluan Terdahulu" required>
                            @error('old_pass')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Kata Laluan Terkini</label>
                            <div class="input-group mb-3">
                              <input type="password" id="new_pass"  class="form-control bg-light @error('new_pass') is-invalid @enderror" name="new_pass" placeholder="Masukkan Kata Laluan Terkini" required>
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" onclick="visiblePassNew()" type="button" id="button-addon2"><i class="fa fa-eye"></i></button>
                              </div>
                            </div>
                            @error('new_pass')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Sahkan Kata Laluan Terkini</label>
                            <div class="input-group mb-3">
                              <input type="password" id="new_pass_confirm"  class="form-control bg-light @error('new_pass_confirm') is-invalid @enderror" name="new_pass_confirm" placeholder="Sahkan Kata Laluan Terkini" required>
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" onclick="visiblePassConfirm()" type="button" id="button-addon2"><i class="fa fa-eye"></i></button>
                              </div>
                            </div>
                            @error('new_pass_confirm')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>

                        <div class="row">
                          <div class="col-md-3">

                          </div>
                            <div class="col-md-6">
                              <button type="submit" onclick="return confirm('Anda pasti untuk tukar kata laluan?')" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Tukar Kata Laluan</button>
                            </div>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
        </main>
        <script>



        function visiblePassNew() {
          var x = document.getElementById("new_pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        function visiblePassConfirm() {
          var x = document.getElementById("new_pass_confirm");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
@endsection
