@extends('layouts.app_user_eng')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
              <div class="theme-option p-3 border-1" style="border: 1px solid;border-color: #003e61 !important;">
                  <div class="theme-pck" data-toggle="tooltip" data-placement="left" title="Bahasa | Language">
                      <i class="fa fa-globe" aria-hidden="true" style="font-size: 180% !important;"></i>
                  </div>
                  <p style="font-size: 110%;">Pilih Bahasa | Choose Language</p>
                  <div class="row">
                    <div class="col-md">
                      <div class="btn-group">
                          <!-- <button class="btn btn-primary">Bahasa Melayu</button> -->
                          <a href="{{ route('user.profil.katalaluan') }}" class="btn btn-outline-primary">Bahasa Melayu</a>
                          <button class="btn btn-primary">English</button>
                          <!-- <a href="{{ route('user.profil.katalaluan') }}" class="btn btn-outline-primary">English</a> -->
                      </div>
                    </div>
                  </div>
                  <!-- <div class="side-nav-themes d-flex flex-row">
                      <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                      <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
                  </div> -->
              </div>
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Change Password</div>

                  <div class="card-body">

                      <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                        </div>
                      </div>

                      <form class="" action="{{route('user.profil.updatePassword')}}" method="post">
                        @csrf

                      <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Previous Password</label>
                            <!-- <input type="password"  class="form-control bg-light @error('old_pass') is-invalid @enderror" name="old_pass" placeholder="Masukkan Kata Laluan Terdahulu" required> -->
                            <div class="input-group mb-3">
                              <input type="password" id="old_pass"  class="form-control bg-light @error('old_pass') is-invalid @enderror" name="old_pass" placeholder="Fill in Previous Password" required>
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" onclick="visibleOldPass()" type="button" id="button-addon2"><i class="fa fa-eye"></i></button>
                              </div>
                            </div>
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
                            <label>New Password</label>
                            <div class="input-group mb-3">
                              <input type="password" id="new_pass"  class="form-control bg-light @error('new_pass') is-invalid @enderror" name="new_pass" placeholder="Fill in new password" required>
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
                            <label>Confirm New Password</label>
                            <div class="input-group mb-3">
                              <input type="password" id="new_pass_confirm"  class="form-control bg-light @error('new_pass_confirm') is-invalid @enderror" name="new_pass_confirm" placeholder="Confirm new password" required>
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
                      <input type="hidden" name="language" value="english">
                      
                      <button type="submit" onclick="return confirm('Anda pasti untuk tukar kata laluan?')" class="btn btn-primary btn-outline-primary badge-pill btn-block w-25 m-auto">Change Password</button>


                        <!-- <div class="row">
                          <div class="col-md-3">

                          </div>
                            <div class="col-md-6">
                            </div>
                        </div> -->
                      </form>
                  </div>
                </div>
            </div>
        </main>
        <script>

        function visibleOldPass() {
          var x = document.getElementById("old_pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }

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
