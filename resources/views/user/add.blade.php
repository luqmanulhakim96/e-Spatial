@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Permohonan Baru</div>
                      <div class="">
                        <div class="card-title">Pilih Data</div>
                        <form class="" id="pilihan_data" enctype="multipart/form-data">
                          @csrf
                        <!-- jenis dokumen input-->
                        <div class="form-group">
                            <label for="jenis_dokumen">Jenis Dokumen:</label>
                              <select id="jenis_dokumen" class="custom-select  bg-light" name="jenis_dokumen" onchange="showJenisKertas(this)">
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

                        <!-- jenis data input-->
                        <div class="form-group">
                            <label for="jenis_data">Jenis Data:</label>
                              <select id="jenis_data" class="custom-select  bg-light" name="jenis_data" onchange="showDiv(this)">
                                <option value="" selected disabled hidden>Pilih Jenis Data</option>
                              </select>
                              @error('jenis_data')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                        </div>

                        <!--kategori data input -->
                        <div class="form-group" id="kategori_data_div" style="display: none;">
                            <label for="kategori_data">Kategori Data:</label>
                              <select id="kategori_data" class="custom-select  bg-light" name="kategori_data" >
                                  <option value="" selected disabled hidden>Pilih Kategori Data</option>
                              </select>
                              @error('kategori_data')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                        </div>

                        <!--tahun input -->
                        <div class="form-group" id="tahun_div" style="display: block;">
                            <label for="tahun">Tahun:</label>
                            <select id="tahun" class="custom-select  bg-light" name="tahun">
                                <option value="" selected disabled hidden>Pilih Tahun</option>
                            </select>
                            @error('tahun')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!-- negeri input -->
                        <div class="form-group">
                          <label for="negeri">Negeri:</label>
                            <select id="negeri" class="custom-select  bg-light" name="negeri">
                                <option value="" selected disabled hidden>Pilih Negeri</option>
                            </select>
                            @error('negeri')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!-- jenis data input-->
                        <div class="form-group" style="display: none;" id="jenis_kertas_div">
                            <label for="jenis_kertas">Jenis Kertas:</label>
                              <select id="jenis_kertas" class="custom-select  bg-light" name="jenis_kertas" >
                                  <option value="" selected disabled hidden>Pilih Jenis Kertas</option>
                              </select>
                              @error('jenis_kertas')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                        </div>

                        <!-- counter -->
                        <!-- <div class="form-group">
                          <label for="negeri">Data Counter:</label>
                            <input type="text" class="form-control bg-light" id="counter_data" name="counter_data" aria-describedby="counter_data" value="0" readonly>
                        </div> -->

                        <div class="">
                          <input class="button" type="button" value=" Tambah Data " onclick="tambahData()">
                        </div>

                          <!-- <button class="btn btn-primary" onclick="tambahData()">Mohon</button> -->
                        </form>

                      </div>
                      <div class="">


                      </div>
                  </div>
                </div>
            </div>

            <div class="card-body">
              <!-- Col md 6 -->
                    <div class="col-md-15 mt-1">
                        <!-- Light Bordered Table card -->
                        <div class="card rounded-lg">
                            <div class="card-body">
                                <div class="card-title">Senarai Data Permohonan</div>
                                <!-- Table -->
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
              <div class="card rounded-lg">
                <div class="card-body">

                  <div class="card-title">Malumat Tambahan</div>

                  <form class="" action="{{route('user.submit')}}" method="post" id="permohonan_data" enctype="multipart/form-data">
                    <!-- attachment input -->
                    @csrf

                    <div class="form-group">
                        <label for="attachment_permohonan">Muatnaik Attachment AOI:</label>
                        <input type="file" class="form-control bg-light" id="attachment_aoi" name="attachment_aoi" aria-describedby="attachment_aoi">
                        <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 120MB</small>
                        @error('attachment_aoi')
                        <div class="alert alert-danger">
                          <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                          <div class="form-group">
                              <label for="attachment_permohonan">Muatnaik Lampiran:</label>
                              <input type="file" class="form-control bg-light" id="attachment_permohonan" name="attachment_permohonan" aria-describedby="attachment_permohonan">
                              <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 120MB</small>
                              @error('attachment_permohonan')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>

                          <!-- dokumen ke luar negara input -->
                          <div class="form-group">
                              <label for="dokumen_ke_luar_negara">Adakah Dokumen Geospatial Ini Perlu Di Bawa Ke Luar Negara?</label>

                              <!-- All Radio Button  -->
                              <div class="switchs">
                                  <!-- Primary Radio Button  -->
                              <div class="custom-control custom-radio">
                                  <input type="radio" id="Ya" name="dokumen_ke_luar_negara" class="custom-control-input" onclick="showAgensi()" value="Ya" @if(old('dokumen_ke_luar_negara')=="Ya") checked @endif>
                                  <label class="custom-control-label" for="Ya">Ya</label>
                              </div>
                              <div class="custom-control custom-radio">
                                  <input type="radio" id="Tidak" name="dokumen_ke_luar_negara" class="custom-control-input" onclick="showAgensi()" value="Tidak" @if(old('dokumen_ke_luar_negara')=="Tidak") checked @endif>
                                  <label class="custom-control-label" for="Tidak">Tidak</label>
                              </div>
                            </div>

                              @error('dokumen_ke_luar_negara')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror

                              <div class="form-group" id="maklumat_agensi_dan_negara_div" style="display: none;" >
                                  <label for="maklumat_agensi">Maklumat Agensi Dan Negara Terlibat:</label>
                                  <input type="text" class="form-control bg-light" id="maklumat_agensi_dan_negara" name="maklumat_agensi_dan_negara" placeholder="Nama agensi dan negara" aria-describedby="maklumat_agensi_dan_negara">
                                  @error('maklumat_agensi_dan_negara')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                              </div>

                              <!-- counter -->
                              <div class="form-group" style="display: block;">
                                <label for="negeri">Jumlah data yang dipohon:</label>
                                  <input type="text" class="form-control bg-light" id="counter_data" name="counter_data" aria-describedby="counter_data" value="0" readonly>
                              </div>

                              <input type="text" class="form-control bg-light" name="status_permohonan"    value="Sedang Diproses"hidden>
                              <input type="text" class="form-control bg-light" name="status_pembayaran"   value="Belum Dibayar" hidden>

                              <button type="submit" class="btn btn-primary">Mohon Data</button>
                              </div>

                        </div>

                  </form>


                </div>
              </div>
            </div>

        </main>
        <script type="text/javascript">
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

                //this variable to count total data apply by the user
                var counter_data = document.getElementById("counter_data").value;

                //reset form above
                document.getElementById("pilihan_data").reset();

                //insert data in other form
                if(tahun){
                  //kategori_data = null;
                  //1st Ajax for tahun
                  $.ajax({
                    type:"get",
                    url:"/permohonan/fetchSenaraiHargaIdByTahun/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/tahun/"+tahun+"/negeri/" + negeri,
                    success: function(respond){
                      //fetch data (id) from DB Senarai Harga
                      var data = JSON.parse(respond);
                      //console.log(data);
                      //loop for data
                      data.forEach(function(){
                        //insert data in table
                        if(jenis_kertas){
                          $("#pilihan_table").append(
                            '<tr><td><p class="mb-0 font-weight-bold">' +
                            jenis_dokumen +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            jenis_kertas +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            jenis_data +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            tahun + kategori_data +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            negeri +
                            '</td><td><a onClick="removeData(this,'+ counter_data  +'); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                          );
                        }else {
                          jenis_kertas = "Tiada";
                          $("#pilihan_table").append(
                            '<tr><td><p class="mb-0 font-weight-bold">' +
                            jenis_dokumen +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            jenis_kertas +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            jenis_data +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            tahun + kategori_data +
                            '</td><td><p class="mb-0 font-weight-bold">' +
                            negeri +
                            '</td><td><a onClick="removeData(this,'+ counter_data  +'); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                          );
                        }
                        //console.log(data[0].id);
                        //insert responsive input text in form
                        str_to_append = '<div><input type="text" id="data_permohonan'+ counter_data +'" name="data['+ counter_data +']"  value="'+ data[0].id +'"></div>';
                        //add counter for data apply by the user
                        counter_data++;
                        document.getElementById("counter_data").value = counter_data;
                        //$("#counter_data").append(counter_data);
                        //console.log(counter_data);
                        $("#permohonan_data").append(str_to_append);
                      });
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                      console.log("Status: " + textStatus);
                      console.log("Error: " + errorThrown);
                    }
                  });
                }else if (kategori_data) {
                  //tahun = null;
                  //2nd Ajax for kategori data
                  $.ajax({
                    type:"get",
                    url:"/permohonan/fetchSenaraiHargaIdByKategoriData/jenisDokumen/"+jenis_dokumen+"/jenisData/"+jenis_data+"/kategoriData/"+kategori_data+"/negeri/" + negeri,
                    success: function(respond){
                      //fetch data (id) from DB Senarai Harga
                      var data = JSON.parse(respond);

                      data.forEach(function(data){
                        $(document).ready(function(){
                          //display in table
                          if(jenis_kertas){
                            $("#pilihan_table").append(
                              '<tr><td><p class="mb-0 font-weight-bold">' +
                              jenis_dokumen +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              jenis_kertas +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              jenis_data +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              tahun + kategori_data +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              negeri +
                              '</td><td><a onClick="removeData(this,'+ counter_data  +'); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                            );
                          }else{
                            jenis_kertas = "Tiada";
                            $("#pilihan_table").append(
                              '<tr><td><p class="mb-0 font-weight-bold">' +
                              jenis_dokumen +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              jenis_kertas +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              jenis_data +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              tahun + kategori_data +
                              '</td><td><p class="mb-0 font-weight-bold">' +
                              negeri +
                              '</td><td><a onClick="removeData(this, '+ counter_data  +' ); return false;" class="btn btn-danger mr-1"><i class="fa fa-trash"></i></a></td></tr>'
                            );
                          }
                          //console.log(data.id);
                          str_to_append = '<div><input type="text" id="data_permohonan'+ counter_data +'" name="data['+ counter_data +']"  value="'+ data.id +'"></div>';
                          counter_data++;
                          document.getElementById("counter_data").value = counter_data;
                          $("#counter_data").append(counter_data);
                          $("#permohonan_data").append(str_to_append);
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
              //fetch data from jumlah data input
              var counter_data = document.getElementById("counter_data").value;
              counter_data--;
              //update data into jumlah data input
              document.getElementById("counter_data").value = counter_data;
            }
        </script>
        <script type="text/javascript">
        function showDiv(select){
           if(select.value=='Petak Kajian'){
            document.getElementById('kategori_data_div').style.display = "block";
            document.getElementById('tahun_div').style.display = "none";
           } else{
             document.getElementById('kategori_data_div').style.display = "none";
             document.getElementById('tahun_div').style.display = "block";
           }
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
              success: function(respond){
                //console.log(respond);
                var data = JSON.parse(respond);
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



@endsection
