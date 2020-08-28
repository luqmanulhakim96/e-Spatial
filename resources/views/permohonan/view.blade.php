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
              <div class="col-md-2">

              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Nama Pemohon:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->name }}" readonly>
              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Kad Pengenalan:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->kad_pengenalan }}" readonly>
              </div>

              <div class="col-md-2">

              </div>
            </div>

            <div class="row">
              <div class="col-md-2">

              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Kerakyatan:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->kerakyatan }}" readonly>
              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Tarikh Lahir:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->tarikh_lahir }}" readonly>
              </div>

              <div class="col-md-2">

              </div>
            </div>

            @if($user->kategori != "dalaman")
            <div class="row">
              <div class="col-md-2">

              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Alamat Kediaman:</label>
                <!-- <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->alamat_kediaman }}" readonly> -->
                <textarea id="alamat_kediaman" name="alamat_kediaman" rows="2" cols="50" class="form-control bg-light" readonly>{{ $user->alamat_kediaman }}</textarea>
              </div>

              <div class="col-md-2">

              </div>
            </div>


            <div class="row">
              <div class="col-md-2">

              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Poskod:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->poskod }}" readonly>
              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">Negeri:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->negeri }}" readonly>
              </div>

              <div class="col-md-2">

              </div>
            </div>

            @endif

            <div class="row">
              <div class="col-md-2">

              </div>

              <div class="col-md pt-3">
                <label for="f-name-1"> Tempat Lahir:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->tempat_lahir }}" readonly>
              </div>

              <div class="col-md pt-3">
                <label for="f-name-1"> Email:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->email }}" readonly>
              </div>

              <div class="col-md-2">

              </div>
            </div>

            <div class="row pb-2">
              <div class="col-md-2">

              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">No Telfon Bimbit:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->no_tel_bimbit }}" readonly>
              </div>

              <div class="col-md pt-3">
                <label for="f-name-1">No Telefon Pejabat:</label>
                <input  class="form-control bg-light" type="text" name="jenis_data" value="{{ $user->no_tel_rumah }}" readonly>
              </div>

              <div class="col-md-2">

              </div>
            </div>

            <hr>

            @if($user->kategori == "dalaman")

            <div class="row">
              <div class="col-md-4">

              </div>
              <div class="col-md ">
                <label for="f-name-1">Bahagian / JPSM:</label>
                <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $user->bahagian }}" readonly>
              </div>
              <div class="col-md-4">

              </div>
            </div>

            @elseif($user->kategori == "awam")

            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md ">
                <label for="f-name-1">Jawatan / Gred:</label>
                <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $user->jawatan }}" readonly>
              </div>
              <div class="col-md ">
                <label for="f-name-1">Profesion:</label>
                <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $user->jenis_perniagaan }}" readonly>
              </div>
              <div class="col-md-2">

              </div>
            </div>

            @else

            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md ">
                <label for="f-name-1">Nama Kementerian/Jabatan/Badan Berkanun/Swasta:</label>
                <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $user->nama_kementerian }}" readonly>
              </div>
              <div class="col-md-2">

              </div>
            </div>

            <div class="row">
              <div class="col-md-2">

              </div>
              <div class="col-md ">
                <label for="f-name-1">Alamat Kementerian/Jabatan/Badan Berkanun/Swasta:</label>
                <!-- <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $user->alamat_kementerian }}" readonly> -->
                <textarea id="alamat_kementerian" name="alamat_kementerian" rows="2" cols="50" class="form-control bg-light" readonly>
                  {{ $user->alamat_kementerian }}
                  </textarea>
              </div>
              <div class="col-md-2">

              </div>
            </div>

            @endif


            </div>

            <!-- info data pemohonan -->
            <div class="tab-pane" id="data" role="tabpanel" aria-labelledby="data-tab">

              <div style="padding : 10px;"></div>

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md pt-3">
                  <label for="f-name-1" type="text" >Permohonan ID</label>
                  <input  class="form-control bg-light" type="text"  name="permohonan_id" value="{{ $permohonan->getPermohonanID() }}" readonly>
                </div>
                <div class="col-md pt-3">
                  <label for="f-name-1">Status Permohonan</label>
                  <input  class="form-control bg-light" type="text"  value="{{ $permohonan->status_permohonan }}" readonly>
                </div>
                <div class="col-md-2">

                </div>
              </div>

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md pt-3">
                  <label for="f-name-1">Tarikh permohonan</label>
                  <input  class="form-control bg-light" type="text" name="permohonan_id" value="{{ Carbon\Carbon::parse($permohonan->created_at)->format('d-m-Y ') }}" readonly>
                </div>
                <div class="col-md pt-3">
                  <label for="f-name-1">Masa permohonan</label>
                  <input  class="form-control bg-light" type="text"  value="{{ Carbon\Carbon::parse($permohonan->created_at)->format(' H:i:s') }}" readonly>
                </div>
                <div class="col-md-2">

                </div>
              </div>

              <div style="padding : 10px;"></div>
                <hr>
              <div style="padding : 10px;"></div>

              <div class="row">
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered" >
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th><p class="mb-0">JENIS DOKUMEN</p></th>
                                <th><p class="mb-0">JENIS KERTAS</p></th>
                                <th><p class="mb-0">JENIS DATA</p></th>
                                <th><p class="mb-0">TAHUN/KATEGORI DATA</p></th>
                                <th><p class="mb-0">NEGERI</p></th>
                                <th><p class="mb-0">HARGA ASAS </p></th>
                                <th><p class="mb-0">SAIZ DATA</p></th>
                            </tr>
                        </thead>
                        <tbody>

                          @for($i = 0; $i < $count_data_permohonan; $i++)

                          <tr>
                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_dokumen']}}</p></td>
                            @if($senaraiHargaUser[$i][0]['jenis_kertas'] != null)
                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_kertas']}}</p></td>
                            @else
                            <td><p class="mb-0 " style="text-align: center;">Tiada</p></td>
                            @endif
                            @if($senaraiHargaUser[$i][0]['jenis_data'] == 'Lain-Lain')
                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_data']}} : {{$dataPermohonan[$i]['custom_jenis_data']}}</p></td>
                            <td><p class="mb-0 " style="text-align: center;">{{ $dataPermohonan[$i]['custom_tahun']}}</p></td>
                            @else
                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_data']}}</p></td>
                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['tahun']}}{{ $senaraiHargaUser[$i][0]['kategori_data']}}</p></td>
                            @endif
                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['negeri']}}</p></td>
                            <td><p class="mb-0 " style="text-align: center;">RM {{ $senaraiHargaUser[$i][0]['harga_asas']}}</p></td>
                            <td><p class="mb-0 " style="text-align: center;">{{ $dataPermohonan[$i]['saiz_data']}}</p></td>
                          </tr>

                          @endfor



                        </tbody>
                    </table>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                  <label for="f-name-1">Harga Lain-Lain:</label>
                  <input  class="form-control bg-light" type="text" name="bahagian" value="RM {{ $permohonan->harga_tambahan }}" readonly>
                </div>
                <div class="col-md-4">
                  <label for="f-name-1" style="font-weight:bold;">Jumlah Harga Data:</label>

                  <input  style="font-weight:bold;" class="form-control bg-light" type="text" name="bahagian" value="RM {{ $permohonan->jumlah_bayaran }}" readonly>

                </div>

              </div>



              <div style="padding : 10px;"></div>
              <hr>
              <!-- <div style="padding : 5px;"></div> -->

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md pt-3">
                  <label for="f-name-1">Dokumen Geospatial Ini Perlu Di Bawa Ke Luar Negara?</label>
                  <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $permohonan->dokumen_ke_luar_negara }}" readonly>
                </div>
                <div class="col-md pt-3">
                  <label for="f-name-1">Maklumat Agensi Dan Negara Terlibat :</label>
                  @if( $permohonan->dokumen_ke_luar_negara == "Ya")
                  <input  class="form-control bg-light" type="text" name="bahagian" value="{{ $permohonan->maklumat_agensi_dan_negara }}" readonly>
                  @else
                  <input  class="form-control bg-light" type="text"  value=" - " readonly>
                  @endif
                </div>
                <div class="col-md-2">

                </div>
              </div>



            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <form id="rumusan-form" action="{{route('permohonan.ulasan.update',$permohonan_id)}}" method="post" name="ulasan" onsubmit="return validateStatusPermohonan()">

                              @csrf
                              <!-- Create 2 row -->
                              <div class="row pt-3">
                                  <!-- 1st row -->

                                  <div class="col-md-6">

                                    @if($current_user_info->role == 0)
                                    <div class="card text-white bg-primary mb-3">
                                    <div class="card-header" style="text-align: center;">Ulasan Pentadbir Sistem</div>
                                    @else
                                    <div class="card bg-light mb-3" style="border: 1px solid #003e61;">
                                    <div class="card-header" style="text-align: center; border-bottom: 1px solid #003e61;">Ulasan Pentadbir Sistem</div>
                                    @endif
                                      <div class="card-body text-dark">
                                        <textarea id="ulasan_admin" class="form-control bg-light" name="ulasan_admin" rows="3" cols="50" {{ $current_user_info->role != 0 || $permohonan->ulasan_admin != null ? 'readonly' : '' }}>{{ $permohonan->ulasan_admin }}</textarea>

                                      </div>
                                    </div>

                                  </div>

                                  <div class="col-md-6">

                                    @if($current_user_info->role == 1)
                                    <div class="card text-white bg-primary mb-3" style="border: 1px solid #f8f9fa;">
                                    <div class="card-header" style="text-align: center; border-bottom: 1px solid #f8f9fa;">Ulasan Penyokong 1</div>
                                    @else
                                    <div class="card bg-light mb-3" style="border: 1px solid #003e61;">
                                    <div class="card-header" style="text-align: center; border-bottom: 1px solid #003e61;">Ulasan Penyokong 1</div>
                                    @endif
                                      <div class="card-body text-dark">

                                        <textarea id="ulasan_penyokong1" class="form-control bg-light" name="ulasan_penyokong1" rows="3" cols="50" {{ $current_user_info->role != 1 ? 'readonly' : '' }}>{{ $permohonan->ulasan_penyokong_1 }}</textarea>

                                      </div>
                                    </div>

                                  </div>

                                  @if($current_user_info->role != 1)
                                  <div class="col-md-6">

                                    @if($current_user_info->role == 2)
                                    <div class="card text-white bg-primary mb-3" style="border: 1px solid #f8f9fa;">
                                    <div class="card-header" style="text-align: center; border-bottom: 1px solid #f8f9fa;">Ulasan Penyokong 2</div>
                                    @else
                                    <div class="card bg-light mb-3" style="border: 1px solid #003e61;">
                                      <div class="card-header" style="text-align: center; border-bottom: 1px solid #003e61;">Ulasan Penyokong 2</div>
                                    @endif
                                      <div class="card-body text-dark">

                                        <textarea id="ulasan_penyokong2" class="form-control bg-light" name="ulasan_penyokong2" rows="3" cols="50" {{ $current_user_info->role != 2 ? 'readonly' : '' }}>{{ $permohonan->ulasan_penyokong_2 }}</textarea>

                                      </div>
                                    </div>

                                  </div>

                                  @if($current_user_info->role != 2)
                                  <div class="col-md-6">

                                    @if($current_user_info->role == 3)
                                    <div class="card text-white bg-primary mb-3" style="border: 1px solid #f8f9fa;">
                                    <div class="card-header" style="text-align: center; border-bottom: 1px solid #f8f9fa;">Keputusan Ketua Pengarah</div>
                                    @else
                                    <div class="card bg-light mb-3" style="border: 1px solid #003e61;">
                                    <div class="card-header" style="text-align: center; border-bottom: 1px solid #003e61;">Keputusan Ketua Pengarah</div>
                                    @endif

                                      <div class="card-body text-dark">

                                        <textarea id="ulasan_ketua_pengarah" class="form-control bg-light" name="ulasan_ketua_pengarah" rows="3" cols="50" {{ $current_user_info->role != 3 ? 'readonly' : '' }}>{{ $permohonan->ulasan_ketua_pengarah }}</textarea>
                                      </div>
                                    </div>

                                  </div>
                                  @endif

                                  @endif
                              </div>
                              @if($current_user_info->role == 3)
                              <hr>
                              <div style="padding: 10px">

                              </div>
                              <div class="row">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md">
                                  <!-- All Radio Button  -->
                                  <label for="l-name-1">Pilih status permohonan:</label>
                                  <div class="switchs">
                                      <!-- Primary Radio Button  -->
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="Lulus" name="status_permohonan" onclick="showStatusPembayaran()" class="custom-control-input"  value="Lulus" @if(old('status_permohonan')=="Lulus") checked @endif>
                                      <label class="custom-control-label" for="Lulus">Lulus</label>
                                  </div>
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="Gagal" name="status_permohonan" onclick="showStatusPembayaran()" class="custom-control-input"  value="Gagal" @if(old('status_permohonan')=="Gagal") checked @endif>
                                      <label class="custom-control-label" for="Gagal">Gagal</label>
                                  </div>
                                </div>

                                </div>
                                <div class="col-md" id="status_pembayaran_div" style="display : block;">
                                  <!-- All Radio Button  -->
                                  <label for="l-name-1">Pilih status pembayaran:</label>
                                  <div class="switchs">
                                      <!-- Primary Radio Button  -->
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="Berbayar" name="status_pembayaran" class="custom-control-input"  value="Berbayar" @if(old('status_pembayaran')=="Berbayar") checked @endif>
                                      <label class="custom-control-label" for="Berbayar">Berbayar</label>
                                  </div>
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="Pengecualian Bayaran" name="status_pembayaran"  class="custom-control-input"  value="Pengecualian Bayaran" @if(old('status_pembayaran')=="Pengecualian Bayaran") checked @endif>
                                      <label class="custom-control-label" for="Pengecualian Bayaran">Pengecualian Bayaran</label>
                                  </div>
                                </div>

                                </div>
                                <div class="col-md-2">

                                </div>
                              </div>
                              <div style="padding: 20px;"></div>
                              @endif

                              <input type="hidden" name="current_id_for_user" value="{{ $current_user_info->role }}" readonly>

                              <div class="row">
                                <div class="col-md-5">

                                </div>
                                <div class="col-md">

                                  <div class="form-group" >
                                    @if($current_user_info->role == 3)
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Adakah anda pasti dengan keputusan permohonan ini??');" id="submit_data" >Hantar Keputusan</button>
                                    @else
                                    <button type="submit" class="btn btn-primary"  id="submit_data" onclick="return confirm('Hantar ulasan ini??');">Hantar Ulasan</button>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-4">

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
        </main>

      <script type="text/javascript">
        function validateStatusPermohonan(){
          var x = document.forms["ulasan"]["status_permohonan"].value;
          console.log(x);
          if (x == "") {
            alert("Sila pilih status permohonan ini!");
            location.reload();
            return false;
          }
        }

        function showStatusPembayaran(select){
           if(document.getElementById('Gagal').checked){
            document.getElementById('status_pembayaran_div').style.display = "none";
           }
           else{
             document.getElementById('status_pembayaran_div').style.display = "block";
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
