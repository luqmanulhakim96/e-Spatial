@extends('layouts.app_user')
@section('content')
<!--By Artanis Cloud Sdn Bhd-->

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
                          <!-- <a href="{{ route('login') }}" class="btn btn-outline-primary">Bahasa Melayu</a> -->
                          <!-- <button class="btn btn-primary">English</button> -->
                          <a href="{{ route('user.add_eng') }}" class="btn btn-outline-primary">English</a>
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
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Permohonan Baru</div>

                  <div class="card-body">
                      <div class="">
                        <form class="" id="pilihan_data" enctype="multipart/form-data">
                          @csrf
                        <!-- jenis dokumen input-->
                        <div class="row">
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_dokumen">Jenis Dokumen:</label>
                                  <select id="jenis_dokumen" class="custom-select  bg-light" name="jenis_dokumen" onchange="showJenisKertas(this)" required>
                                      <option value="" selected disabled hidden>Pilih Jenis Dokumen</option>
                                      @foreach($jenisDokumen as $data)
                                      <option value="{{$data->jenis_dokumen}}" {{ old('jenis_dokumen') == "$data->jenis_dokumen" ? 'selected' : '' }}>{{$data->jenis_dokumen}}</option>
                                      @endforeach
                                  </select>
                                  @error('jenis_dokumen')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                              <!-- jenis data input-->
                              <div class="form-group">
                                  <label for="jenis_data">Jenis Data:</label>
                                    <select id="jenis_data" class="custom-select  bg-light" name="jenis_data" onchange="showDiv(this)" required>
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                    </select>
                                    @error('jenis_data')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                              </div>
                            </div>
                        </div>






                        <div id="custom_form_div" style="display: none;">
                          <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <div class="form-group" id="custom_jenis_data_div" >
                                      <label for="maklumat_agensi">Nyatakan Jenis Data:</label>
                                      <input type="text" class="form-control bg-light @error('custom_jenis_data') is-invalid @enderror" id="custom_jenis_data" name="custom_jenis_data" placeholder="Nyatakan Jenis Data" aria-describedby="custom_jenis_data">
                                      @error('custom_jenis_data')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <div class="form-group" id="custom_tahun_div" >
                                      <label for="maklumat_agensi">Tahun:</label>
                                      <input type="text" class="form-control bg-light @error('custom_tahun') is-invalid @enderror" id="custom_tahun" name="custom_tahun" placeholder="Nyatakan Tahun Data" aria-describedby="custom_tahun">
                                      @error('custom_tahun')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <!-- custom negeri input -->
                                <div class="form-group">
                                  <label for="negeri">Negeri:</label>
                                    <select id="custom_negeri" class="custom-select  bg-light" name="custom_negeri" required>
                                        <option value="" selected disabled hidden>Pilih Negeri</option>
                                    </select>
                                    @error('custom_negeri')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                              </div>
                          </div>

                        </div>

                        <div id="default_form_div"  style="display: block;">

                          <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <!--kategori data input -->
                                <div class="form-group" id="kategori_data_div" style="display: none;">
                                    <label for="kategori_data">Kategori Data:</label>
                                      <select id="kategori_data" class="custom-select  bg-light" name="kategori_data" required>
                                          <option value="" selected disabled hidden>Pilih Kategori Data</option>
                                      </select>
                                      @error('kategori_data')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <!--tahun input -->
                                <div class="form-group" id="tahun_div" style="display: block;">
                                    <label for="tahun">Tahun:</label>
                                    <select id="tahun" class="custom-select  bg-light" name="tahun" required>
                                        <option value="" selected disabled hidden>Pilih Tahun</option>
                                    </select>
                                    @error('tahun')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-4">

                              </div>
                              <div class="col-md-4">
                                <!-- negeri input -->
                                <div class="form-group">
                                  <label for="negeri">Negeri:</label>
                                    <select id="negeri" class="custom-select  bg-light" name="negeri" required>
                                        <option value="" selected disabled hidden>Pilih Negeri</option>
                                    </select>
                                    @error('negeri')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                              </div>
                          </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                              <!-- jenis kertas input-->
                              <div class="form-group" style="display: none;" id="jenis_kertas_div">
                                  <label for="jenis_kertas">Jenis Kertas:</label>
                                    <select id="jenis_kertas" class="custom-select  bg-light" name="jenis_kertas" required>
                                        <option value="" selected disabled hidden>Pilih Jenis Kertas</option>
                                    </select>
                                    @error('jenis_kertas')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                              </div>
                            </div>
                        </div>


                            <div class="card-footer text-center">
                                <input class="btn btn-primary" id="more" type="button" value=" Tambah Data " onclick="tambahData()">

                            </div>



                        </form>
                      </div>
                  </div>
                </div>
            </div>

            <div class="card-body">
              <!-- Col md 6 -->
                    <div class="col-md-15 mt-1">
                        <!-- Light Bordered Table card -->
                        <div class="card rounded-lg" style="border-color: #003473 !important;">
                          <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Data Permohonan</div>
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-2"></div>

                                <div class="col-md">
                                  <div class="card-header" style="text-align: justify; text-justify: inter-word; border: 1px solid black;">
                                    <h6 style="text-align: center;">Catatan:</h6>
                                    <span>Pemohon hendaklah memohon sekurang-kurangnya satu data dalam senarai untuk meneruskan permohonan</span><br>

                                  </div>
                                </div>
                                <div class="col-md-2"></div>

                              </div>
                              <div style="padding: 10px;"></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="pilihan_table">
                                        <thead>
                                            <tr class="text-center">
                                                <th width="10%"><p class="mb-0">Jenis Dokumen</p></th>
                                                <th width="10%"><p class="mb-0">Jenis Kertas</p></th>
                                                <th width="20%"><p class="mb-0">Jenis Data</p></th>
                                                <th width="25%"><p class="mb-0">Tahun/Kategori Data</p></th>
                                                <th width="15%"><p class="mb-0">Negeri</p></th>
                                                <th width="15%"><p class="mb-0">Buang Data</p></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

            </div>

            <div class="card-body">
              <div class="card rounded-lg" style="border-color: #003473 !important;">
                <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Maklumat Tambahan</div>
                <div class="card-body">
                  <form  method="post" action="{{route('user.submit')}}" id="permohonan_data" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label  class="required">Muatnaik Surat Permohonan:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required id="attachment_permohonan" onchange="return fileValidation('attachment_permohonan')" name="attachment_permohonan">
                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Muatnaik fail</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 100MB</small>
                            <small id="saiz_data" class="form-text text-secondary">Sila mampatkan file kedalam format .zip atau .rar sekiranya melebihi 1 dokumen</small>

                            @error('attachment_permohonan')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="attachment_permohonan">Muatnaik Attachment AOI:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="attachment_aoi" onchange="return fileValidation('attachment_aoi')" name="attachment_aoi">
                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Muatnaik fail</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 100MB</small>
                            <small id="saiz_data" class="form-text text-secondary">Sila mampatkan file kedalam format .zip atau .rar sekiranya melebihi 1 dokumen</small>
                            @error('attachment_aoi')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror

                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dokumen_ke_luar_negara" class="required">Adakah Dokumen Geospatial Ini Perlu Di Bawa Ke Luar Negara?</label>

                          <!-- All Radio Button  -->
                          <div class="radios">
                              <!-- Primary Radio Button  -->
                          <div class="custom-control custom-radio">
                              <input type="radio" id="Ya" name="dokumen_ke_luar_negara" class="custom-control-input" onclick="showAgensi()" value="Ya" @if(old('dokumen_ke_luar_negara')=="Ya") checked @endif>
                              <label class="custom-control-label" for="Ya">Ya</label>

                          </div>
                          <div class="custom-control custom-radio">
                              <input type="radio" id="Tidak" name="dokumen_ke_luar_negara" class="custom-control-input" onclick="showAgensi()" value="Tidak" @if(old('dokumen_ke_luar_negara')=="Tidak") checked @endif required>
                              <label class="custom-control-label" for="Tidak">Tidak</label>
                          </div>
                        </div>

                          @error('dokumen_ke_luar_negara')
                          <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-group" id="maklumat_agensi_dan_negara_div" style="display: none;" >
                              <label for="maklumat_agensi" class="required">Maklumat Agensi Dan Negara Terlibat:</label>
                              <input type="text" class="form-control bg-light @error('maklumat_agensi_dan_negara') is-invalid @enderror" id="maklumat_agensi_dan_negara" name="maklumat_agensi_dan_negara" placeholder="Nama agensi dan negara" aria-describedby="maklumat_agensi_dan_negara">
                              @error('maklumat_agensi_dan_negara')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- initialization for status permohonan and pembayaran -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control bg-light" name="status_permohonan"    value="Sedang Diproses"hidden>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control bg-light" name="status_pembayaran"   value="Belum Dibayar" hidden>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" style="display: block;">
                          <label for="negeri">Jumlah data yang dipohon:</label>
                            <input type="text" class="form-control bg-light" id="counter_data" name="counter_data" aria-describedby="counter_data" value="0" readonly>

                            <input type="hidden" class="form-control bg-light" id="increment" name="increment" aria-describedby="increment" value="0" readonly>
                        </div>
                      </div>
                    </div>



                    <div class="row">

                      <div class="col-md" id="button_submit_permohonan" style="display: none;">
                        <button type="submit" onclick="return confirm('Anda pasti mahu memohon data ini?');" class="btn btn-primary btn-outline-primary badge-pill btn-block w-25 m-auto" id="submit_data" >Mohon Data</button>

                      </div>
                    </div>

                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

        </main>
        <script type="text/javascript">



        function showDiv(select){
           if(select.value=='Petak Kajian'){
            document.getElementById('default_form_div').style.display = "block";
            document.getElementById('custom_form_div').style.display = "none";
            document.getElementById('kategori_data_div').style.display = "block";
            document.getElementById('tahun_div').style.display = "none";
          } else if (select.value=='Lain-Lain') {
            document.getElementById('default_form_div').style.display = "none";
            document.getElementById('custom_form_div').style.display = "block";
          }else{
            document.getElementById('default_form_div').style.display = "block";
            document.getElementById('custom_form_div').style.display = "none";
             document.getElementById('kategori_data_div').style.display = "none";
             document.getElementById('tahun_div').style.display = "block";
           }
        }
        </script>
        <script type="text/javascript">

        $('#attachment_aoi').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

        $('#attachment_permohonan').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

        function fileValidation(name){
          var fileInput = document.getElementById(name);
          var filePath = fileInput.value;
          var allowedExtensions = /(\.pdf|\.doc|\.docx|\.xls|\.xlsx|\.jpeg|\.jpg|\.png|\.zip|\.rar)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert('Sila muatnaik file dalam format .pdf , .doc , .docx , .jpeg , .jpg , .png , .zip dan .rar sahaja.');
              fileInput.value = '';
              return false;
          }
        }

        $('#attachment_permohonan').on('change', function() {
              var numb = $(this)[0].files[0].size/102400 /102400 ;
              numb = numb.toFixed(2);
              if(numb > 2){
              alert('Ralat! Fail anda melebihi 100MB. Saiz fail anda adalah: ' + numb +' MB');
              document.getElementById("attachment_permohonan").value = "";
              var fileName = "";
              $(this).next('.custom-file-label').html(fileName);
              return false;
              }
            });

            $('#attachment_aoi').on('change', function() {
                  var numb = $(this)[0].files[0].size/102400 /102400 ;
                  numb = numb.toFixed(2);
                  if(numb > 2){
                  alert('Ralat! Fail anda melebihi 100MB. Saiz fail anda adalah: ' + numb +' MB');
                  document.getElementById("attachment_aoi").value = "";
                  var fileName = "";
                  $(this).next('.custom-file-label').html(fileName);
                  return false;
                  }
                });

        function showJenisKertas(select){
          if(select.value=='Bercetak'){
            document.getElementById('jenis_kertas_div').style.display = "block";
          }else{
            document.getElementById('jenis_kertas_div').style.display = "none";
          }
        }

        function showAgensi(select){
           if(document.getElementById('Ya').checked){
            document.getElementById('maklumat_agensi_dan_negara_div').style.display = "block";
           }
           else{
             document.getElementById('maklumat_agensi_dan_negara_div').style.display = "none";
           }
        }
        </script>
        <script type="text/javascript">
        //display jenis data in table and add the id of senarai harga in other form
          function tambahData(){
                //fetch data
                var jenis_dokumen = document.getElementById("jenis_dokumen").value;
                var jenis_data = document.getElementById("jenis_data").value;
                var tahun = document.getElementById("tahun").value;
                var kategori_data = document.getElementById("kategori_data").value;
                var negeri = document.getElementById("negeri").value;
                var jenis_kertas = document.getElementById("jenis_kertas").value;
                var custom_jenis_data = document.getElementById("custom_jenis_data").value;
                var custom_tahun = document.getElementById("custom_tahun").value;
                var custom_negeri = document.getElementById("custom_negeri").value;

                // console.log('Jenis Dokumen :' + jenis_dokumen);
                // console.log('Jenis Data :' + jenis_data);
                // console.log('Tahun :' + tahun);
                // console.log('Kategori Data :' + kategori_data);
                // console.log('Negeri :' + negeri);
                // console.log('Jenis Kertas :' + jenis_kertas);
                // console.log('Custom Jenis Dokumen :' + custom_jenis_data);
                // console.log('Custom tahun :' + custom_tahun);
                // console.log('Custom Negeri :' + custom_negeri);



                if(jenis_kertas){
                  // console.log('jenis kertas exist');

                }else {
                  // console.log('jenis kertas not exist');
                  jenis_kertas = "tiada";
                  // console.log('jenis kertas value', jenis_kertas);

                }
                //this variable to count total data apply by the user
                var counter_data = document.getElementById("counter_data").value;
                var increment = document.getElementById("increment").value;


                //reset form above
                document.getElementById("pilihan_data").reset();

                //insert data in other form
                if(tahun){
                  // console.log('tahun masuk');

                  //kategori_data = null;
                  //1st Ajax for tahun
                  $.ajax({
                    type:"get",
                     url:"/permohonan/fetchSenaraiHargaIdByTahun/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/tahun/"+tahun+"/negeri/" + negeri + "/jenisKertas/" + jenis_kertas,
                    //url:"/JPSM/permohonan/fetchSenaraiHargaIdByTahun/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/tahun/"+tahun+"/negeri/" + negeri,
                    success: function(respond){
                      //fetch data (id) from DB Senarai Harga
                      var data = JSON.parse(respond);
                      //console.log(data);
                      //loop for data
                      data.forEach(function(){
                        //insert data in table
                        if(jenis_kertas){
                          $("#pilihan_table").append(
                            '<tr><td><p class="mb-0 " style="text-align: center;">' +
                            jenis_dokumen +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            jenis_kertas +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            jenis_data +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            tahun + kategori_data +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            negeri +
                            '</td><td><a onClick="removeData(this,'+ increment  +'); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                          );
                        }else {
                          jenis_kertas = "Tiada";
                          $("#pilihan_table").append(
                            '<tr><td><p class="mb-0 " style="text-align: center;">' +
                            jenis_dokumen +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            jenis_kertas +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            jenis_data +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            tahun + kategori_data +
                            '</td><td><p class="mb-0 " style="text-align: center;">' +
                            negeri +
                            '</td><td><a onClick="removeData(this,'+ increment  +'); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                          );
                        }
                        //console.log(data[0].id);
                        //insert responsive input text in form
                        str_to_append = '<div><input type="hidden" id="data_permohonan'+ increment +'" name="data['+ increment +']"  value="'+ data[0].id +'"></div>';
                        str_to_append_custom_jenis_data = '<div><input type="hidden" id="data_permohonan_jenis_data'+ increment +'" name="data_jenis_data['+ increment +']"  value="Tiada"></div>';
                        str_to_append_custom_tahun = '<div><input type="hidden" id="data_permohonan_tahun'+ increment +'" name="data_tahun['+ increment +']"  value="Tiada"></div>';
                        //add counter for data apply by the user
                        counter_data++;
                        increment++;
                        if(counter_data != 0)
                        {
                          document.getElementById('button_submit_permohonan').style.display = "block";
                        }
                        // console.log('counter_data: tahun:',counter_data);

                        document.getElementById("counter_data").value = counter_data;
                        document.getElementById("increment").value = increment;

                        $("#counter_data").append(counter_data);
                        $("#increment").append(increment);
                        $("#permohonan_data").append(str_to_append);
                        $("#permohonan_data").append(str_to_append_custom_jenis_data);
                        $("#permohonan_data").append(str_to_append_custom_tahun);

                      });
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                      console.log("Status: " + textStatus);
                      console.log("Error: " + errorThrown);
                    }
                  });
                }else if (kategori_data) {
                  //2nd Ajax for kategori data
                  $.ajax({
                    type:"get",
                    url:"/permohonan/fetchSenaraiHargaIdByKategoriData/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/kategoriData/"+kategori_data+"/negeri/" + negeri + "/jenisKertas/" + jenis_kertas,

                    //url:"/JPSM/permohonan/fetchSenaraiHargaIdByKategoriData/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/kategoriData/"+kategori_data+"/negeri/" + negeri,
                    success: function(respond){
                      //fetch data (id) from DB Senarai Harga
                      var data = JSON.parse(respond);

                      data.forEach(function(data){
                        $(document).ready(function(){
                          //display in table
                          if(jenis_kertas){
                            $("#pilihan_table").append(
                              '<tr><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_dokumen +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_kertas +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_data +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              tahun + kategori_data +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              negeri +
                              '</td><td><a onClick="removeData(this,'+ increment  +'); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                            );
                          }else{
                            jenis_kertas = "Tiada";
                            $("#pilihan_table").append(
                              '<tr><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_dokumen +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_kertas +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_data +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              tahun + kategori_data +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              negeri +
                              '</td><td><a onClick="removeData(this, '+ increment  +' ); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                            );
                          }
                          //console.log(data.id);
                          str_to_append = '<div><input type="hidden" id="data_permohonan'+ increment +'" name="data['+ increment +']"  value="'+ data.id +'"></div>';
                          str_to_append_custom_jenis_data = '<div><input type="hidden" id="data_permohonan_jenis_data'+ increment +'" name="data_jenis_data['+ increment +']"  value="Tiada"></div>';
                          str_to_append_custom_tahun = '<div><input type="hidden" id="data_permohonan_tahun'+ increment +'" name="data_tahun['+ increment +']"  value="Tiada"></div>';
                          counter_data++;
                          increment++;
                          if(counter_data != 0)
                          {
                            document.getElementById('button_submit_permohonan').style.display = "block";
                          }
                          // console.log('counter_data: kategori_data :',counter_data);

                          document.getElementById("counter_data").value = counter_data;
                          document.getElementById("increment").value = increment;

                          $("#counter_data").append(counter_data);
                          $("#increment").append(increment);
                          $("#permohonan_data").append(str_to_append);
                          $("#permohonan_data").append(str_to_append_custom_jenis_data);
                          $("#permohonan_data").append(str_to_append_custom_tahun);

                        })
                      })
                    }
                  })
                }else if (jenis_data == 'Lain-Lain') {
                  //third ajax for custom data
                  $.ajax({
                    type:"get",
                    url:"/permohonan/fetchSenaraiHargaIdCustom/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/jenisKertas/"+jenis_kertas+"/negeri/" + custom_negeri,

                    success: function(respond){
                      //fetch data (id) from DB Senarai Harga
                      var data = JSON.parse(respond);

                      data.forEach(function(data){
                        $(document).ready(function(){
                          //display in table
                          if(jenis_kertas){
                            $("#pilihan_table").append(
                              '<tr><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_dokumen +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_kertas +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_data + ' : ' + custom_jenis_data +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              custom_tahun +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              custom_negeri +
                              '</td><td><a onClick="removeData(this,'+ increment  +'); return false;" class="btn btn-danger mr-1" ><i class="fa fa-trash"></i></a></td></tr>'
                            );
                          }else{
                            jenis_kertas = "Tiada";
                            $("#pilihan_table").append(
                              '<tr><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_dokumen +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_kertas +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              jenis_data + ' : ' + custom_jenis_data +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              custom_tahun +
                              '</td><td><p class="mb-0 " style="text-align: center;">' +
                              custom_negeri +
                              '</td><td><a onClick="removeData(this, '+ increment  +' ); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                            );
                          }
                          //console.log(data.id);
                          str_to_append = '<div><input type="hidden" id="data_permohonan'+ increment +'" name="data['+ increment +']"  value="'+ data.id +'"></div>';
                          str_to_append_custom_jenis_data = '<div><input type="hidden" id="data_permohonan_jenis_data'+ increment +'" name="data_jenis_data['+ increment +']"  value="'+ custom_jenis_data +'"></div>';
                          str_to_append_custom_tahun = '<div><input type="hidden" id="data_permohonan_tahun'+ increment +'" name="data_tahun['+ increment +']"  value="'+ custom_tahun +'"></div>';


                          counter_data++;
                          increment++;
                          if(counter_data != 0)
                          {
                            document.getElementById('button_submit_permohonan').style.display = "block";
                          }

                          document.getElementById("counter_data").value = counter_data;
                          document.getElementById("increment").value = increment;

                          $("#counter_data").append(counter_data);
                          $("#increment").append(increment);
                          $("#permohonan_data").append(str_to_append);
                          $("#permohonan_data").append(str_to_append_custom_jenis_data);
                          $("#permohonan_data").append(str_to_append_custom_tahun);

                        })
                      })
                    }
                  })


                }


          }
        </script>
        <script type="text/javascript">
             function removeData(e,counter){
              //remove table row
              $(e).parents('tr').remove();
              //remove input text in form
              $('#data_permohonan'+counter+'').remove();
              $('#data_permohonan_jenis_data'+counter+'').remove();
              $('#data_permohonan_tahun'+counter+'').remove();
              //fetch data from jumlah data input
              var counter_data = document.getElementById("counter_data").value;
              counter_data--;
              if(counter_data == 0){
                document.getElementById('button_submit_permohonan').style.display = "none";
              }
              //update data into jumlah data input
              document.getElementById("counter_data").value = counter_data;
            }
        </script>

        <!-- script for jenis data -->
        <script type="text/javascript">
        $('#jenis_dokumen').change(function(){
          //fetch data from jenis_dokumen
          var jenisDokumen = $(this).val();
          //clear jenis_data selection
          $("#jenis_data").empty();
          //initialize selection
          $("#jenis_data").append('<option value="" selected disabled hidden>Pilih Jenis Data</option>');
          //ajax
          if(jenisDokumen){
            $.ajax({
              type:"get",
               url:"/permohonan/jenisdata/"+jenisDokumen,
              //url:"/JPSM/permohonan/jenisdata/"+jenisDokumen,

              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                data.forEach(function(data)
                {
                  //console.log(data.jenis_data);
                  $("#jenis_data").append('<option value="'+data.jenis_data+'">'+data.jenis_data+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })

          }
        });
        </script>
        <!-- script for tahun -->
        <script type="text/javascript">
        $('#jenis_data').change(function(){
          //fetch data from
          var jenisData = $(this).val();
          var jenisDokumen = $('#jenis_dokumen').val();

          //clear jenis_data selection
          $("#tahun").empty();
          //initialize selection
          $("#tahun").append('<option value="" selected disabled hidden>Pilih Tahun</option>');
          //ajax
          if(jenisData){
            $.ajax({
              type:"get",
              url:"/permohonan/tahun/"+jenisData+"/and/"+jenisDokumen,
              // url:"/JPSM/permohonan/tahun/"+jenisData+"/and/"+jenisDokumen,

              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                // console.log(data);
                data.forEach(function(data)
                {
                  //console.log(data.jenis_data);
                  $("#tahun").append('<option value="'+data.tahun+'">'+data.tahun+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })

          }
        });
        </script>
        <!-- script for kategori data -->
        <script type="text/javascript">
        $('#jenis_data').change(function(){
          //fetch data from jenis_data
          var jenisData = $(this).val();
          var jenisDokumen = $('#jenis_dokumen').val();
          // console.log(respond);
          //clear kategori_data selection
          $("#kategori_data").empty();
          //default selection
          $("#kategori_data").append('<option value="" selected disabled hidden>Pilih Kategori Data</option>');
          //ajax
          if(jenisData){
            $.ajax({
              type:"get",
              url:"/permohonan/kategoriData/"+jenisData+"/and/"+jenisDokumen,
              //url:"/JPSM/permohonan/kategoriData/"+jenisData+"/and/"+jenisDokumen,
              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                //console.log(data);
                data.forEach(function(data)
                {
                  //console.log(data.kategori_data);
                  $("#kategori_data").append('<option value="'+data.kategori_data+'">'+data.kategori_data+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
        });
        </script>
        <!-- script for select negeri from tahun-->
        <script type="text/javascript">
        $('#tahun').change(function(){
          //fetch data from jenis_data
          var tahun = $(this).val();
          var jenisDokumen = $('#jenis_dokumen').val();
          var jenisData = $('#jenis_data').val();
          //clear kategori_data selection
          $("#negeri").empty();
          //default selection
          $("#negeri").append('<option value="" selected disabled hidden>Pilih Negeri</option>');
          //ajax
          if(jenisData){
            $.ajax({
              type:"get",
               url:"/permohonan/negeri/"+jenisData+"/and/"+jenisDokumen+"/tahun/" + tahun,
              //url:"/JPSM/permohonan/negeri/"+jenisData+"/and/"+jenisDokumen+"/tahun/" + tahun,
              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                //console.log(data);
                data.forEach(function(data)
                {
                  $("#negeri").append('<option value="'+data.negeri+'">'+data.negeri+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
        });
        </script>
        <!-- script for select negeri from kategori data-->
        <script type="text/javascript">
        $('#kategori_data').change(function(){
          //fetch data from jenis_data
          var kategoriData = $(this).val();
          var jenisDokumen = $('#jenis_dokumen').val();
          var jenisData = $('#jenis_data').val();
          //clear kategori_data selection
          $("#negeri").empty();
          //default selection
          $("#negeri").append('<option value="" selected disabled hidden>Pilih Negeri</option>');
          //ajax
          if(jenisData){
            $.ajax({
              type:"get",
               url:"/permohonan/negeri/"+jenisData+"/and/"+jenisDokumen+"/kategoriData/" + kategoriData,
              //url:"/JPSM/permohonan/negeri/"+jenisData+"/and/"+jenisDokumen+"/kategoriData/" + kategoriData,

              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                //console.log(data);
                data.forEach(function(data)
                {
                  $("#negeri").append('<option value="'+data.negeri+'">'+data.negeri+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
        });
        </script>
        <!-- script for select jenis kertas from tahun and kategori data-->
        <script type="text/javascript">
        $('#negeri').change(function(){
          //fetch data from jenis_data
          var jenisDokumen = $('#jenis_dokumen').val();
          var jenisData = $('#jenis_data').val();
          var tahun = $('#tahun').val();
          var kategori_data = $('#kategori_data').val();
          var negeri = $(this).val();


      //clear kategori_data selection
          $("#jenis_kertas").empty();
          //default selection
          $("#jenis_kertas").append('<option value="" selected disabled hidden>Pilih Jenis Kertas</option>');
          //ajax
          if(tahun){

            $.ajax({
              type:"get",
              url:"/permohonan/jenisKertas/"+jenisData+"/and/"+jenisDokumen+"/and/" + tahun + "/and/" + negeri + "/tahun",
              //rl:"/JPSM/permohonan/jenisKertas/"+jenisData+"/and/"+jenisDokumen+"/and/" + tahun + "/and/" + negeri + "/tahun",
              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                //console.log(data);
                data.forEach(function(data)
                {

                  $("#jenis_kertas").append('<option value="'+data.jenis_kertas+'">'+data.jenis_kertas+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
          if(kategori_data){
            $.ajax({
              type:"get",
               url:"/permohonan/jenisKertas/"+jenisData+"/and/"+jenisDokumen+"/and/" + kategori_data + "/and/" + negeri + "/kategori_data",

              //url:"/JPSM/permohonan/jenisKertas/"+jenisData+"/and/"+jenisDokumen+"/and/" + kategori_data + "/and/" + negeri + "/kategori_data",
              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                //console.log(data);
                data.forEach(function(data)
                {
                  $("#jenis_kertas").append('<option value="'+data.jenis_kertas+'">'+data.jenis_kertas+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit', '#permohonan_data', function() {
                $('#submit_data').html('<i class="fa fa-spinner fa-spin"></i>');
                $('#submit_data').attr('disabled', 'disabled');
            });
        });
        </script>
        <!-- script for select negeri from kategori data lain-lain-->
        <script type="text/javascript">
        $('#jenis_data').change(function(){
          //fetch data from jenis_data
          var jenisDokumen = $('#jenis_dokumen').val();
          var jenisData = $('#jenis_data').val();
          //clear kategori_data selection
          $("#custom_negeri").empty();
          //default selection
          $("#custom_negeri").append('<option value="" selected disabled hidden>Pilih Negeri</option>');
          //ajax
          if(jenisData){
            $.ajax({
              type:"get",
               url:"/permohonan/custom/negeri/"+jenisData+"/and/"+jenisDokumen,
               // url:"/JPSM/permohonan/custom/negeri/"+jenisData+"/and/"+jenisDokumen,

              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                //console.log(data);
                data.forEach(function(data)
                {
                  $("#custom_negeri").append('<option value="'+data.negeri+'">'+data.negeri+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
        });
        </script>
        <!-- script for select jenis kertas from custom jenis data-->
        <script type="text/javascript">
        $('#custom_negeri').change(function(){
          //fetch data from jenis_data
          var jenisDokumen = $('#jenis_dokumen').val();
          var jenisData = $('#jenis_data').val();
          //var negeri = $('#custom_negeri').val();

          var negeri = $(this).val();

          // console.log(jenisDokumen);
      //clear kategori_data selection
          $("#jenis_kertas").empty();
          //default selection
          $("#jenis_kertas").append('<option value="" selected disabled hidden>Pilih Jenis Kertas</option>');
          //ajax
          if(negeri){

            $.ajax({
              type:"get",
              url:"/permohonan/custom/jenisKertas/"+jenisData+"/and/"+jenisDokumen+"/and/" + negeri ,
              // url:"/JPSM/permohonan/custom/jenisKertas/"+jenisData+"/and/ "+jenisDokumen+"/and/" + negeri ,

              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
                // console.log(respond);
                data.forEach(function(data)
                {

                  $("#jenis_kertas").append('<option value="'+data.jenis_kertas+'">'+data.jenis_kertas+'</option>');
                });
                    // $.each(JSON.parse(respond),function(key,value){
                    //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                    // });
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
          }
        });
        </script>


@endsection
