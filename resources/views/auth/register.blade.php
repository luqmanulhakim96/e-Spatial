@extends('layouts.app_user2')

@section('content')
    <div class="login-pagenew d-flex flex-row justify-content-center align-items-center">
        <!-- Login card -->
        <!-- <div class="card rounded-sm mt-4 w-50 p-3"> -->
        <!-- <div class="card rounded-sm mt-0 w-50 p-3"> -->
        <div class="card mx-5 mx-md-25 border-0 rounded-lg  w-50">
        <h5 class="card-header" style="text-align: center;">Borang Pendaftaran Pemohon</h5>
        <!-- <br> -->

        <div class="card-body" >
        <!-- Create 2 row -->
        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md">
            <div class="buttons">
                <div class="btn-group">
                    <button class="btn btn-primary">Bahasa Melayu</button>
                    <!-- <button class="btn btn-outline-primary">English</button> -->
                    <a href="{{ route('auth.register_eng') }}" class="btn btn-outline-primary">English</a>
                </div>
            </div>
          </div>
        </div>
        <div style="padding: 10px;"></div>

        <form method="POST" action="{{ route('register') }}" id="register-form">
            @csrf


            <div class="row">
              <div class="col-md-1">

              </div>
              <div class="col-md">
                <div class="card-header" style="text-align: justify; text-justify: inter-word; border: 2px solid black;">
                <h5>MUSTAHAK:</h5>
                <span >Permohonan daripada Kementerian atau Jabatan Kerajaan, ianya hanya boleh dibuat melalui surat Ketua Setiausaha / Timbalan
                Ketua Setiausaha / Ketua Penolong Setiausaha / Ketua Pengarah / Timbalan Ketua Pengarah / Penolong Ketua Pengarah / Ketua
                Jabatan Negeri / Timbalan Ketua Jabatan Negeri / Dekan / Pustakawan</span><br><br>
                <span>Jika permohonan dari pada pihak swasta, borang hendaklah melalui Surat Pengarah / Pengurus</span><br><br>
                <span>Kelulusan mendapatkan Dokumen Geospatial adalah tertakluk kepada Syarat-Syarat Pemberian Data Geospatial Bercetak atau
                Digital Jabatan Perhutanan Semenanjung Malaysia sepertimana Pekeliling Ketua Pengarah Perhutanan Semenanjung Malaysia
                Bil.3/2018</span>
                </div>
              </div>
              <div class="col-md-1">

              </div>
            </div>

            <div style="padding : 15px;">

            </div>

            <div class="row">
              <div class="col-md-1">

              </div>
                <div class="col-md">
                    <div class="form-group">

                      <label for="kategori" class="required">Kategori</label>
                      <select id="kategori" class="custom-select  bg-light @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori') }}" onchange="showJenisForm()" >
                            <option value="" selected disabled hidden>Pilih Kategori</option>
                            <option value="kementerian" {{ old('kategori') == "kementerian" ? 'selected' : '' }}>Kementerian</option>
                            <option value="agensi" {{ old('kategori') == "agensi" ? 'selected' : '' }}>Agensi</option>
                            <option value="penyelidik" {{ old('kategori') == "penyelidik" ? 'selected' : '' }}>Penyelidik</option>
                            <option value="institut" {{ old('kategori') == "institut" ? 'selected' : '' }}>Institut Pengajian Tinggi</option>
                            <option value="awam" {{ old('kategori') == "awam" ? 'selected' : '' }}>Orang Awam</option>
                            <option value="dalaman" {{ old('kategori') == "dalaman" ? 'selected' : '' }}>Warga JPSM</option>
                            <option value="lain" {{ old('kategori') == "lain" ? 'selected' : '' }}>Lain-lain</option>
                        </select>
                        @error('kategori')
                        <span class="invalid-feedback" role="alert">
                                <strong>Sila pilih kategori</strong>
                            </span>
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
                      <input id="nama" type="text" class="form-control bg-light @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autocomplete="name" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                      @error('nama')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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
                      <select id="kerakyatan" class="custom-select  bg-light @error('kerakyatan') is-invalid @enderror" name="kerakyatan" value="{{ old('kerakyatan') }}" onchange="viewPassportForm()" >
                            <option value="" selected disabled hidden>Pilih Kerakyatan</option>
                            <option value="Warganegara" {{ old('kerakyatan') == "Warganegara" ? 'selected' : '' }}>Warganegara</option>
                            <option value="Bukan Warganegara" {{ old('kerakyatan') == "Bukan Warganegara" ? 'selected' : '' }}>Bukan Warganegara</option>
                        </select>
                      @error('kerakyatan')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila pilih kerakyatan</strong>
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
                      <input id="kad_pengenalan" type="text" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Kad pengenalan perlu mempunyai 12 nombor')" onkeyup="get_tarikh_lahir()" class="form-control bg-light @error('kad_pengenalan') is-invalid @enderror" name="kad_pengenalan" value="{{ old('kad_pengenalan') }}"  autocomplete="kad_pengenalan" >
                      @error('kad_pengenalan')
                      <span class="invalid-feedback" role="alert">
                        @if( $message == 'The kad pengenalan has already been taken.')
                              <strong>Kad pengenalan ini telah didaftarkan</strong>
                        @else
                          <strong>Sila isi bahagian ini</strong>
                        @endif
                          </span>

                      @enderror
                    </div>

                    <div id="text_pp" style="display: none;">
                      <label for="pasport" class="required">Pasport</label>
                      <input id="pasport" type="text" class="form-control bg-light @error('pasport') is-invalid @enderror" name="pasport" value="{{ old('pasport') }}" autocomplete="pasport" >
                    </div>

                    <small id="saiz_data" class="form-text text-secondary">Contoh : 910101028545</small>

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
                          <input id="tarikh_lahir_manual" type="date" class="form-control bg-light @error('tarikh_lahir_manual') is-invalid @enderror" name="tarikh_lahir_manual" value="{{ old('tarikh_lahir_manual') }}"  max={{date('Y-m-d')}} autocomplete="tarikh_lahir_manual" onkeydown="return false;">
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
                        <input id="tempat_lahir" type="text" class="form-control bg-light @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" autocomplete="tempat_lahir" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                        @error('tempat_lahir')
                        <span class="invalid-feedback" role="alert">
                                <strong>Sila isi bahagian ini</strong>
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
                <div id="jawatan_div" class="col-md" style="display: block;">
                    <div class="form-group">
                        <label for="jawatan" class="required">Jawatan/Gred</label><br>
                        <input id="jawatan" type="text" class="form-control bg-light @error('jawatan') is-invalid @enderror" name="jawatan" value="{{ old('jawatan') }}" autocomplete="jawatan" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                        @error('jawatan')
                        <span class="invalid-feedback" role="alert">
                                <strong>Sila isi bahagian ini</strong>
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
                        <input id="jenis_perniagaan" type="text" class="form-control bg-light @error('jenis_perniagaan') is-invalid @enderror" name="jenis_perniagaan" value="{{ old('jenis_perniagaan') }}" autocomplete="jenis_perniagaan"  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                        @error('jenis_perniagaan')
                        <span class="invalid-feedback" role="alert">
                                <strong>Sila isi bahagian ini</strong>
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
                      <textarea id="alamat_kediaman" name="alamat_kediaman" rows="2" cols="50" class="form-control bg-light @error('alamat_kediaman') is-invalid @enderror" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('alamat_kediaman') }}</textarea>
                      @error('alamat_kediaman')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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
                  <input id="poskod" type="text" maxlength="5" minlength="5" onkeypress="return onlyNumberKey(event)" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Poskod perlu mempunyai 5 nombor')" class="form-control bg-light @error('poskod') is-invalid @enderror" name="poskod" value="{{ old('poskod') }}" autocomplete="poskod"  >
                  @error('poskod')
                  <span class="invalid-feedback" role="alert">
                          <strong>Sila isi bahagian ini</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-md">
                <div class="form-group" id="negeri_div" style="display : block;">
                  <label for="negeri" class="required">Negeri</label>
                  <!-- <input id="negeri" type="text" class="form-control bg-light @error('negeri') is-invalid @enderror" name="negeri" value="{{ old('negeri') }}" autocomplete="negeri" > -->
                  <select id="negeri" class="custom-select  bg-light @error('negeri') is-invalid @enderror" name="negeri" value="{{ old('negeri') }}"  >
                        <option value="" selected disabled hidden>Pilih Negeri</option>
                        <option value="Johor" {{ old('negeri') == "Johor" ? 'selected' : '' }}>Johor</option>
                        <option value="Kedah" {{ old('negeri') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                        <option value="Kelantan" {{ old('negeri') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                        <option value="Melaka" {{ old('negeri') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                        <option value="Negeri Sembilan" {{ old('negeri') == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                        <option value="Pahang" {{ old('negeri') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                        <option value="Pulau Pinang" {{ old('negeri') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                        <option value="Perak" {{ old('negeri') == "Perak" ? 'selected' : '' }}>Perak</option>
                        <option value="Perlis" {{ old('negeri') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                        <option value="Sabah" {{ old('negeri') == "Sabah" ? 'selected' : '' }}>Sabah</option>
                        <option value="Sarawak" {{ old('negeri') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                        <option value="Selangor" {{ old('negeri') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                        <option value="Terengganu" {{ old('negeri') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                        <option value="WP Kuala Lumpur" {{ old('negeri') == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                        <option value="WP Putrajaya" {{ old('negeri') == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                        <option value="WP Labuan" {{ old('negeri') == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                    </select>
                  @error('negeri')
                  <span class="invalid-feedback" role="alert">
                          <strong>Sila pilih negeri</strong>
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
                      <label for="nama_kementerian" class="required">Nama Kementerian/Jabatan/Badan Berkanun/Swasta/Institut Pengajian Tinggi</label>
                      <input id="nama_kementerian" type="text" class="form-control bg-light @error('nama_kementerian') is-invalid @enderror" name="nama_kementerian" value="{{ old('nama_kementerian') }}" autocomplete="nama_kementerian"  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                      @error('nama_kementerian')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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
                <!-- Bahagian -->
                <div class="col-md" id="bahagian_div" style="display: none;">
                    <div class="form-group">
                      <label for="bahagian" class="required">Bahagian / JPN</label>
                      <input id="bahagian" type="text" class="form-control bg-light @error('bahagian') is-invalid @enderror" name="bahagian" value="{{ old('bahagian') }}" autocomplete="bahagian"  oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                      @error('bahagian')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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
                      <label for="alamat_kementerian" class="required">Alamat Kementerian/Jabatan/Badan Berkanun/Swasta/Institut Pengajian Tinggi</label>
                      <!-- <input id="alamat_kementerian" type="text" class="form-control bg-light @error('alamat_kementerian') is-invalid @enderror" name="alamat_kementerian" value="{{ old('alamat_kementerian') }}" autocomplete="alamat_kementerian"  > -->
                      <textarea id="alamat_kementerian" name="alamat_kementerian" rows="2" cols="50" class="form-control bg-light @error('alamat_kementerian') is-invalid @enderror" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('alamat_kementerian') }}</textarea>
                      @error('alamat_kementerian')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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

                      <input id="no_tel_rumah" type="text" minlength="10" maxlength="11" onkeypress="return onlyNumberKey(event)" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Nombor telefon pejabat perlu mempunyai 10 atau 11 nombor')" class="form-control bg-light @error('no_tel_rumah') is-invalid @enderror" name="no_tel_rumah" value="{{ old('no_tel_rumah') }}" autocomplete="phone" >
                      <small id="saiz_data"  class="form-text text-secondary">Contoh : 0312345678</small>
                      @error('no_tel_rumah')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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

                      <input id="no_tel_bimbit" type="text" minlength="10" maxlength="11" onkeypress="return onlyNumberKey(event)" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Nombor telefon bimbit perlu mempunyai 10 atau 11 nombor')" class="form-control bg-light @error('no_tel_bimbit') is-invalid @enderror" name="no_tel_bimbit" value="{{ old('no_tel_bimbit') }}" autocomplete="phone" >
                      <small id="saiz_data"  class="form-text text-secondary">Contoh : 0123456789</small>
                      @error('no_tel_bimbit')
                      <span class="invalid-feedback" role="alert">
                              <strong>Sila isi bahagian ini</strong>
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
                      <input id="email" type="email" class="form-control bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Sila betulkan format email di bahagian ini. Contoh: pengguna@email.com')" autocomplete="email">
                      <small id="saiz_data" class="form-text text-secondary">PERINGATAN : Pemohon hendaklah menggunakan email yang sah untuk menggunakan sistem eSpatial</small>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        @if($message == 'The email has already been taken.')
                              <strong>Email ini telah didaftar.</strong>
                        @else
                          <strong>Sila isi bahagian ini</strong>
                        @endif
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

              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <!-- <a href="{{ route('login') }}" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Log Masuk</a> -->
                  </div>
                  <div class="col-md-6">
                  </div>

                </div>
                <button type="submit" onclick="return confirm('Anda pasti maklumat ini tepat? ');" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto" id="submit-form">Daftar</button>

                <div style="padding:10px;"></div>

                <div class="btn btn-block w-75 m-auto">
                    <div class="btn btn-primarynew rounded m-0">
                      <a href="{{ route('login') }}" >Log Masuk</a>
                    </div>
                    <span> | </span>
                    <div class="btn btn-primarynew rounded m-0">
                        <a href="{{ route('password.request') }}" >Lupa Kata Laluan</a>
                    </div>
                </div>
              </div>
              </div>
        </form>

        </div>
    </div>
    <script type="text/javascript">
      window.addEventListener('load', showJenisForm)
      window.addEventListener('load', get_tarikh_lahir)
      window.addEventListener('load', viewPassportForm)



      function showJenisForm(){

        var kategori = $('#kategori').val();

        if(kategori =='awam'){
          document.getElementById('jawatan_div').style.display = "block";
          document.getElementById('nama_kementerian_div').style.display = "none";
          document.getElementById('alamat_kementerian_div').style.display = "none";
          document.getElementById('bahagian_div').style.display = "none";
          document.getElementById('jenis_perniagaan_div').style.display = "block";
          document.getElementById('alamat_kediaman_div').style.display = "block";
          document.getElementById('poskod_div').style.display = "block";
          document.getElementById('negeri_div').style.display = "block";
        }else if(kategori =='dalaman'){
          document.getElementById('jawatan_div').style.display = "block";
          document.getElementById('bahagian_div').style.display = "block";
          document.getElementById('nama_kementerian_div').style.display = "none";
          document.getElementById('alamat_kementerian_div').style.display = "none";
          document.getElementById('jenis_perniagaan_div').style.display = "none";
          document.getElementById('alamat_kediaman_div').style.display = "none";
          document.getElementById('poskod_div').style.display = "none";
          document.getElementById('negeri_div').style.display = "none";
        }else if(kategori =='institut'){
          document.getElementById('nama_kementerian_div').style.display = "block";
          document.getElementById('jawatan_div').style.display = "none";
          document.getElementById('alamat_kementerian_div').style.display = "block";
          document.getElementById('bahagian_div').style.display = "none";
          document.getElementById('jenis_perniagaan_div').style.display = "block";
          document.getElementById('alamat_kediaman_div').style.display = "block";
          document.getElementById('poskod_div').style.display = "block";
          document.getElementById('negeri_div').style.display = "block";
        }
        else {
          document.getElementById('jawatan_div').style.display = "block";
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
    </script>


@endsection
