@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                      <div class="card rounded-lg">
  <div class="card-body">
      <div class="card-title">Maklumat Permohonan</div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info Pemohon</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="false">Info Data Pemohonan</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rumusan</a>
          </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Nama Pemohon:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->name }}" readonly>
              </div>

              <div class="col-md-6 pt-3">
                <label for="f-name-1">Kad Pengenalan:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->kad_pengenalan }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Kerakyatan:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->kerakyatan }}" readonly>
              </div>

              <div class="col-md-6 pt-3">
                <label for="f-name-1">Tarikh Lahir:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->tarikh_lahir }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">Alamat Kediaman:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->alamat_kediaman }}" readonly>
              </div>

              <div class="col-md-6 pt-3">
                <label for="f-name-1"> Email:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->email }}" readonly>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pt-3">
                <label for="f-name-1">No Telfon Bimbit:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->no_tel_bimbit }}" readonly>
              </div>

              <div class="col-md-6 pt-3">
                <label for="f-name-1">No Telefon Rumah:</label>
                <input id="f-name-1" class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->no_tel_rumah }}" readonly>
              </div>
            </div>
            </div>

            <!-- info data pemohonan -->
            <div class="tab-pane" id="data" role="tabpanel" aria-labelledby="data-tab">

              <!-- Table -->
              <div class="table-responsive">
                  <table class="table">
                      <thead class="thead-light">
                          <tr class="text-center">
                              <th width="20%"><p class="mb-0">JENIS DOKUMEN</p></th>
                              <th width="25%"><p class="mb-0">JENIS DATA</p></th>
                              <th width="15%"><p class="mb-0">TAHUN/KATEGORI DATA</p></th>
                              <th width="15%"><p class="mb-0">NEGERI</p></th>
                          </tr>
                      </thead>
                      <tbody>

                        @foreach($senaraiHargaUser as $data)
                        <tr>
                          <td><p class="mb-0 font-weight-bold">{{ $data[0]->jenis_dokumen}}</p></td>
                          <td><p class="mb-0 font-weight-bold">{{ $data[0]->jenis_data}}</p></td>
                          <td><p class="mb-0 font-weight-bold">{{ $data[0]->tahun}}{{ $data[0]->kategori_data}}</p></td>
                          <td><p class="mb-0 font-weight-bold">{{ $data[0]->negeri}}</p></td>
                        </tr>
                        @endforeach

                      </tbody>
                  </table>
              </div>


            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              <form id="rumusan-form" action="{{route('permohonan.ulasan.update',$permohonan->id)}}" method="post" name="ulasan" onsubmit="return validateStatusPermohonan()">

                @csrf
                <!-- Create 2 row -->
                <div class="row">
                    <!-- 1st row -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="f-name-1">Ulasan Admin</label>
                            <textarea id="ulasan_admin" class="form-control bg-light" name="ulasan_admin" rows="3" cols="50" {{ $current_user_info->role != 0 ? 'readonly' : '' }}>{{ $permohonan->ulasan_admin }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="l-name-1">Ulasan Penyokong 1</label>
                            <textarea id="ulasan_penyokong1" class="form-control bg-light" name="ulasan_penyokong1" rows="3" cols="50" {{ $current_user_info->role != 1 ? 'readonly' : '' }}>{{ $permohonan->ulasan_penyokong_1 }}</textarea>
                        </div>
                    </div>

                    @if($current_user_info->role != 1)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="l-name-1">Ulasan Penyokong 2</label>
                            <textarea id="ulasan_penyokong2" class="form-control bg-light" name="ulasan_penyokong2" rows="3" cols="50" {{ $current_user_info->role != 2 ? 'readonly' : '' }}>{{ $permohonan->ulasan_penyokong_2 }}</textarea>
                        </div>
                    </div>

                    @if($current_user_info->role != 2)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="l-name-1">Ulasan Ketua Pengarah</label>
                            <textarea id="ulasan_ketua_pengarah" class="form-control bg-light" name="ulasan_ketua_pengarah" rows="3" cols="50" {{ $current_user_info->role != 3 ? 'readonly' : '' }}>{{ $permohonan->ulasan_ketua_pengarah }}</textarea>
                        </div>
                    </div>
                    @endif

                    @endif
                </div>
                @if($current_user_info->role == 3)
                <div class="">
                  <!-- All Radio Button  -->
                  <label for="l-name-1">Pilih status permohonan:</label>
                  <div class="switchs">
                      <!-- Primary Radio Button  -->
                  <div class="custom-control custom-radio">
                      <input type="radio" id="Lulus" name="status_permohonan" class="custom-control-input"  value="Lulus" @if(old('status_permohonan')=="Lulus") checked @endif>
                      <label class="custom-control-label" for="Lulus">Lulus</label>
                  </div>
                  <div class="custom-control custom-radio">
                      <input type="radio" id="Gagal" name="status_permohonan" class="custom-control-input"  value="Gagal" @if(old('status_permohonan')=="Gagal") checked @endif>
                      <label class="custom-control-label" for="Gagal">Gagal</label>
                  </div>
                </div>

                </div>
                @endif

                <input type="hidden" name="current_id_for_user" value="{{ $current_user_info->role }}" readonly>

                <button type="submit" class="btn btn-primary" id="submit_data" >Hantar Ulasan</button>

              </form>
            </div>


              </div>


          </div>



      </div>
  </div>

</div>

            </div>
        </main>

      <script type="text/javascript">
        function validateStatusPermohonan(){
          var x = document.forms["ulasan"]["status_permohonan"].value;
          console.log(x);
          if (x == "") {
            alert("Pilih Status Ulasan!");
            return false;
          }
        }
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit', '#rumusan-form', function() {
                $('#submit_data').html('<i class="fa fa-spinner fa-spin"></i>');
                $('#submit_data').attr('disabled', 'disabled');
            });
        });
      </script>
</main>

@endsection
