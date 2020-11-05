@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
              <div class="theme-option p-3 border-1" style="border: 1px solid;border-color: #003e61 !important;">
                  <div class="theme-pck">
                      <i class="fa fa-globe" aria-hidden="true" style="font-size: 180% !important;"></i>
                  </div>
                  <p style="font-size: 110%;">Pilih Bahasa | Choose Language</p>
                  <div class="row">
                    <div class="col-md">
                      <div class="btn-group">
                          <button class="btn btn-primary">Bahasa Melayu</button>
                          <!-- <a href="{{ route('user.list') }}" class="btn btn-outline-primary">Bahasa Melayu</a> -->
                          <!-- <button class="btn btn-primary">English</button> -->
                          <a href="{{ route('user.profil.edit_eng') }}" class="btn btn-outline-primary">English</a>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="side-nav-themes d-flex flex-row">
                      <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                      <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
                  </div> -->
              </div>
                <div class="page-heading d-flex flex-row">

                </div>




                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Kemaskini Profil</div>

                  <div class="card-body">

                      <form method="POST" action="{{ route('user.profil.updatePengguna') }}" enctype="multipart/form-data">
                          @csrf


                          <div style="padding : 15px;">

                          </div>

                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <div class="col-md">
                                  <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input id="kategori" type="text" class="form-control" style="text-transform:capitalize;" name="kategori" value="{{ $user->kategori}}" autocomplete="kategori" readonly onchange=""="this.value = this.value.toUpperCase();">
                                  </div>
                              </div>
                              <div class="col-md">
                                <div class="form-group">
                                    <label >Muatnaik Gambar Profil</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar_profile" onchange="return fileValidation('gambar_profile')" name="gambar_profile">
                                        <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Muatnaik fail</label>
                                    </div>
                                    <small id="saiz_data" class="form-text text-secondary">Muat naik gambar tidak melebihi 100MB</small>

                                    @error('gambar_profile')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>

                          <div class="row">
                              <!-- Name -->
                              <div class="col-md-1">

                              </div>
                              <div class="col-md">
                                  <div class="form-group">
                                    <label for="nama" class="required" >Nama Penuh</label>
                                    <input id="nama" type="text" class="form-control bg-light @error('nama') is-invalid @enderror" name="nama" value=" {{$user->name}}" autocomplete="name" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="input-icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                            <!-- Kerakyatan -->
                              <div class="col-md">
                                <div class="form-group">
                                    <label for="kerakyatan" class="required">Kerakyatan</label>
                                    <select id="kerakyatan" class="custom-select  bg-light @error('kerakyatan') is-invalid @enderror" name="kerakyatan" value="{{ $user->kerakyatan }}" onchange="viewPassportForm()" >
                                          <option value="" selected disabled hidden>Pilih Kerakyatan</option>
                                          <option value="Warganegara" {{ $user->kerakyatan == "Warganegara" ? 'selected' : '' }}>Warganegara</option>
                                          <option value="Bukan Warganegara" {{ $user->kerakyatan == "Bukan Warganegara" ? 'selected' : '' }}>Bukan Warganegara</option>
                                      </select>
                                    @error('kerakyatan')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                              </div>
                              <!-- Kad Pengenalan -->
                              <div class="col-md">
                                <div class="form-group">

                                  <!-- <div id="text_kp" style="display: block;"> -->
                                  <div id="text_kp" style="display: block;">
                                    <label for="kad_pengenalan" class="required">Kad Pengenalan</label>
                                    <input id="kad_pengenalan" type="text" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" onkeyup="get_tarikh_lahir()" class="form-control bg-light @error('kad_pengenalan') is-invalid @enderror" name="kad_pengenalan" value="{{ $user->kad_pengenalan }}"   autocomplete="kad_pengenalan" >
                                  </div>

                                  <div id="text_pp" style="display: none;">
                                    <label for="pasport" class="required">Pasport</label>
                                    <input id="pasport" type="text" class="form-control bg-light @error('pasport') is-invalid @enderror" name="pasport" value="{{ $user->kad_pengenalan }}" onfocus="this.value=''" autocomplete="pasport" >
                                  </div>

                                  <small id="saiz_data" class="form-text text-secondary">Contoh: 910101028545</small>

                                    @error('kad_pengenalan')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @error('pasport')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="input-icon">
                                        <i class="fa fa-address-card"></i>
                                    </span>
                                </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <div class="col-md">
                                  <div class="form-group">

                                      <label for="tarikh_lahir" class="required">Tarikh Lahir</label>
                                      <div id="auto_birthdate" style="display : block;">
                                        <input id="tarikh_lahir" type="text" class="form-control bg-light @error('tarikh_lahir') is-invalid @enderror" name="tarikh_lahir" value="{{ old('tarikh_lahir') }}" autocomplete="tarikh_lahir"  readonly>
                                        @error('tarikh_lahir')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                      <div id="manual_birthdate" style="display : none;">
                                        <input type="date" class="form-control bg-light @error('tarikh_lahir_manual') is-invalid @enderror" name="tarikh_lahir_manual" value="{{ $user->tarikh_lahir }}" autocomplete="tarikh_lahir_manual" >
                                        @error('tarikh_lahir_manual')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>

                                  </div>
                              </div>
                              <!-- 2nd row -->
                              <div class="col-md">
                                  <div class="form-group">
                                      <label for="tempat_lahir" class="required">Tempat Lahir</label>
                                      <input id="tempat_lahir" type="text" class="form-control bg-light @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $user->tempat_lahir }}" autocomplete="tempat_lahir" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                      @error('tempat_lahir')
                                      <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                      <span class="input-icon">
                                          <i class="fas fa-hospital-alt"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <div class="col-md">
                                  <div class="form-group">
                                      <label for="jawatan" class="required">Jawatan/Gred</label><br>
                                      <input id="jawatan" type="text" class="form-control bg-light @error('jawatan') is-invalid @enderror" name="jawatan" value="{{  $user->jawatan  }}" autocomplete="jawatan" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                      @error('jawatan')
                                      <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                      <span class="input-icon">
                                          <i class="fas fa-sitemap"></i>
                                      </span>
                                  </div>
                              </div>
                              <!-- 2nd row -->
                              <div class="col-md" id="jenis_perniagaan_div">
                                  <div class="form-group">
                                      <label for="jenis_perniagaan" class="required">Profesion</label>
                                      <input id="jenis_perniagaan" type="text" class="form-control bg-light @error('jenis_perniagaan') is-invalid @enderror" name="jenis_perniagaan" value="{{  $user->jenis_perniagaan  }}" autocomplete="jenis_perniagaan"  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                      @error('jenis_perniagaan')
                                      <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                      <span class="input-icon">
                                          <i class="fas fa-industry"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row" >
                            <div class="col-md-1" >

                            </div>
                              <!-- Alamat Kediaman -->
                              <div class="col-md">
                                  <div class="form-group" id="alamat_kediaman_div" style="display : block;">
                                    <label for="alamat_kediaman" class="required">Alamat Kediaman</label>
                                    <!-- <input id="alamat_kediaman" type="text" class="form-control bg-light @error('alamat_kediaman') is-invalid @enderror" name="alamat_kediaman" value="" autocomplete="address"  > -->
                                    <textarea id="alamat_kediaman" name="alamat_kediaman" rows="2" cols="50" class="form-control bg-light @error('alamat_kediaman') is-invalid @enderror" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{  $user->alamat_kediaman  }}</textarea>
                                    @error('alamat_kediaman')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="input-icon">
                                        <i class="fas fa-home"></i>
                                    </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>

                          <div class="row" >
                            <div class="col-md-1">

                            </div>
                            <div class="col-md">
                              <div class="form-group" id="poskod_div" style="display : block;">
                                <label for="poskod" class="required">Poskod</label>
                                <input id="poskod" type="text" maxlength="5" onkeypress="return onlyNumberKey(event)" class="form-control bg-light @error('poskod') is-invalid @enderror" name="poskod" value="{{  $user->poskod }}" autocomplete="poskod"  >
                                @error('poskod')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="form-group" id="negeri_div" style="display : block;">
                                <label for="negeri" class="required">Negeri</label>
                                <!-- <input id="negeri" type="text" class="form-control bg-light @error('negeri') is-invalid @enderror" name="negeri" value="{{ old('negeri') }}" autocomplete="negeri" > -->
                                <select id="negeri" class="custom-select  bg-light @error('negeri') is-invalid @enderror" name="negeri" value="{{  $user->negeri  }}"  >
                                      <option value="" selected disabled hidden>Pilih Negeri</option>
                                      <option value="Johor" {{ $user->negeri == "Johor" ? 'selected' : '' }}>Johor</option>
                                      <option value="Kedah" {{ $user->negeri == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                      <option value="Kelantan" {{ $user->negeri == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                      <option value="Melaka" {{ $user->negeri == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                      <option value="Negeri Sembilan" {{ $user->negeri == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                                      <option value="Pahang" {{ $user->negeri == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                      <option value="Pulau Pinang" {{ $user->negeri == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                      <option value="Perak" {{ $user->negeri == "Perak" ? 'selected' : '' }}>Perak</option>
                                      <option value="Perlis" {{ $user->negeri == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                      <option value="Sabah" {{ $user->negeri == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                      <option value="Sarawak" {{ $user->negeri == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                      <option value="Selangor" {{ $user->negeri == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                      <option value="Terengganu" {{ $user->negeri == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                      <option value="WP Kuala Lumpur" {{ $user->negeri == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                                      <option value="WP Putrajaya" {{ $user->negeri == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                                      <option value="WP Labuan" {{ $user->negeri == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                                  </select>
                                @error('negeri')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-1">

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <!-- Nama Kementerian/Jabatan/Badan Berkanun/Swasta -->
                              <div class="col-md" id="nama_kementerian_div" style="display: block;">
                                  <div class="form-group">
                                    <label for="nama_kementerian" class="required">Nama Kementerian/Jabatan/Badan Berkanun/Swasta</label>
                                    <input id="nama_kementerian" type="text" class="form-control bg-light @error('nama_kementerian') is-invalid @enderror" name="nama_kementerian" value="{{ $user->nama_kementerian }}" autocomplete="nama_kementerian"  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('nama_kementerian')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="input-icon">
                                        <i class="fas fa-university"></i>
                                    </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <!-- Bahagian -->
                              <div class="col-md" id="bahagian_div" style="display: none;">
                                  <div class="form-group">
                                    <label for="bahagian" class="required">Bahagian / JPN</label>
                                    <input id="bahagian" type="text" class="form-control bg-light @error('bahagian') is-invalid @enderror" name="bahagian" value="{{ $user->bahagian }}" autocomplete="bahagian"  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('bahagian')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <!-- Alamat Kementerian/Jabatan/Badan Berkanun/Swasta -->
                              <div class="col-md" id="alamat_kementerian_div" style="display: block;">
                                  <div class="form-group">
                                    <label for="alamat_kementerian" class="required">Alamat Kementerian/Jabatan/Badan Berkanun/Swasta</label>
                                    <!-- <input id="alamat_kementerian" type="text" class="form-control bg-light @error('alamat_kementerian') is-invalid @enderror" name="alamat_kementerian" value="{{ old('alamat_kementerian') }}" autocomplete="alamat_kementerian"  > -->
                                    <textarea id="alamat_kementerian" name="alamat_kementerian" rows="2" cols="50" class="form-control bg-light @error('alamat_kementerian') is-invalid @enderror" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ $user->alamat_kementerian }}</textarea>
                                    @error('alamat_kementerian')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <!-- No Telefon Rumah -->
                              <div class="col-md">
                                  <div class="form-group">
                                    <label for="no_tel_rumah" class="required">No Telefon Pejabat</label>

                                    <input id="no_tel_rumah" type="text" maxlength="11" onkeypress="return onlyNumberKey(event)" class="form-control bg-light @error('no_tel_rumah') is-invalid @enderror" name="no_tel_rumah" value="{{ $user->no_tel_rumah }}" autocomplete="phone" >
                                    <small id="saiz_data" class="form-text text-secondary">Contoh: 0312345678</small>
                                    @error('no_tel_rumah')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                      <!-- Input icon -->
                                      <span class="input-icon">
                                          <i class="fas fa-phone"></i>
                                      </span>
                                  </div>
                              </div>
                              <!-- No Telefon Bimbit -->
                              <div class="col-md">
                                  <div class="form-group">
                                    <label for="no_tel_bimbit" class="required">No Telefon Bimbit</label>

                                    <input id="no_tel_bimbit" type="text" maxlength="11" onkeypress="return onlyNumberKey(event)" class="form-control bg-light @error('no_tel_bimbit') is-invalid @enderror" name="no_tel_bimbit" value="{{ $user->no_tel_bimbit }}" autocomplete="phone" >
                                    <small id="saiz_data" class="form-text text-secondary">Contoh: 0123456789</small>
                                    @error('no_tel_bimbit')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                      <!-- Input icon -->
                                      <span class="input-icon">
                                          <i class="fas fa-phone"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                          </div>
                          <!-- Create 2 row -->
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                              <!-- Email -->
                              <div class="col-md">
                                  <div class="form-group">
                                    <label for="email" class="required">Email</label>
                                    <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email">
                                    <small id="saiz_data" class="form-text text-secondary">PERINGATAN : Pemohon hendaklah menggunakan email yang sah untuk menggunakan sistem eSpatial</small>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                      <!-- Input icon -->
                                      <span class="input-icon">
                                          <i class="far fa-envelope"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="col-md-1">

                              </div>
                            </div>
                            <input type="hidden" name="language" value="melayu">

                            <!-- Submit button -->
                            <div style="padding : 10px;">

                              <button type="submit" onclick="return confirm('Anda pasti maklumat ini tepat? ');" class="btn btn-primary btn-outline-primary badge-pill btn-block w-25 m-auto" id="submit-form">Kemaskini Maklumat</button>


                            <!-- <div class="form-group">
                              <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6">
                                </div>

                              </div>
                            </div> -->

                            <!-- <div class="form-group">
                              <div class="row">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6">
                                  <a href="{{ route('login') }}" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Log Masuk</a>
                                </div>
                              </div>
                            </div> -->
                            </div>
                      </form>



                  </div>
                </div>
            </div>
        </main>
        <script type="text/javascript">
          window.addEventListener('load', showJenisForm)
          window.addEventListener('load', get_tarikh_lahir)
          window.addEventListener('load', viewPassportForm)



          function showJenisForm(){

            var kategori = $('#kategori').val();

            if(kategori =='awam'){
              document.getElementById('nama_kementerian_div').style.display = "none";
              document.getElementById('alamat_kementerian_div').style.display = "none";
              document.getElementById('bahagian_div').style.display = "none";
              document.getElementById('jenis_perniagaan_div').style.display = "block";
              document.getElementById('alamat_kediaman_div').style.display = "block";
              document.getElementById('poskod_div').style.display = "block";
              document.getElementById('negeri_div').style.display = "block";
            }else if(kategori =='dalaman'){
              document.getElementById('bahagian_div').style.display = "block";
              document.getElementById('nama_kementerian_div').style.display = "none";
              document.getElementById('alamat_kementerian_div').style.display = "none";
              document.getElementById('jenis_perniagaan_div').style.display = "none";
              document.getElementById('alamat_kediaman_div').style.display = "none";
              document.getElementById('poskod_div').style.display = "none";
              document.getElementById('negeri_div').style.display = "none";
            }else {
              document.getElementById('nama_kementerian_div').style.display = "block";
              document.getElementById('alamat_kementerian_div').style.display = "block";
              document.getElementById('bahagian_div').style.display = "none";
              document.getElementById('jenis_perniagaan_div').style.display = "block";
              document.getElementById('alamat_kediaman_div').style.display = "block";
              document.getElementById('poskod_div').style.display = "block";
              document.getElementById('negeri_div').style.display = "block";
            }

          }

          function viewPassportForm(){

            var kerakyatan = $('#kerakyatan').val();

            if(kerakyatan == "Warganegara"){
              document.getElementById('text_kp').style.display = "block";
              document.getElementById('text_pp').style.display = "none";
              document.getElementById('manual_birthdate').style.display = "none";
              document.getElementById('auto_birthdate').style.display = "block";

            }else if (kerakyatan == "Bukan Warganegara") {
              document.getElementById('text_kp').style.display = "none";
              document.getElementById('text_pp').style.display = "block";
              document.getElementById('manual_birthdate').style.display = "block";
              document.getElementById('auto_birthdate').style.display = "none";
            }
          }

          function onlyNumberKey(evt) {

            // Only ASCII charactar in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }

          function get_tarikh_lahir(){
            var ic = document.getElementById("kad_pengenalan").value;

            var Year = ic.substring(0, 2);
            var Month = ic.substring(2, 4);
            var Day = ic.substring(4, 6);

            var cutoff = (new Date()).getFullYear() - 2000;

            // var dob = Day + "/" + Month + "/" + (Year > cutoff ? '19' : '20') + Year;

            var dob = (Year > cutoff ? '19' : '20') + Year + "-" + Month + "-"  + Day;

            // $('#tarikh_lahir').val(dob);

            console.log(dob);

            // var tarikh_lahir = convert(dob);

            // console.log(tarikh_lahir);

            document.getElementById("tarikh_lahir").value = dob;

          }
          // function convert(str) {
          //   var date = new Date(str),
          //     mnth = ("0" + (date.getMonth() + 1)).slice(-2),
          //     day = ("0" + date.getDate()).slice(-2);
          //   return [day, mnth, date.getFullYear()].join("/");
          // }
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
              $(document).on('submit', '#register-form', function() {
                  $('#submit-form').html('<i class="fa fa-spinner fa-spin"></i>');
                  $('#submit-form').attr('disabled', 'disabled');
              });
          });

          function fileValidation(name){
            var fileInput = document.getElementById(name);
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpeg|\.jpg|\.png)$/i;
            if(!allowedExtensions.exec(filePath)){
                alert('Sila muatnaik gambar dalam format .jpeg , .jpg dan .png sahaja.');
                fileInput.value = '';
                return false;
            }
          }

          $('#gambar_profile').on('change',function(){
                  //get the file name
                  var fileName = $(this).val();
                  //replace the "Choose a file" label
                  $(this).next('.custom-file-label').html(fileName);
              })

          $('#gambar_profile').on('change', function() {
                var numb = $(this)[0].files[0].size/102400 /102400 ;
                numb = numb.toFixed(2);
                if(numb > 2){
                alert('Ralat! Gambar anda melebihi 100MB. Saiz fail anda adalah: ' + numb +' MB');
                document.getElementById("attachment_permohonan").value = "";
                var fileName = "";
                $(this).next('.custom-file-label').html(fileName);
                return false;
                }
              });
        </script>
@endsection
