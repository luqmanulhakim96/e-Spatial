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
                      <div class="card-title" style="text-align: center;">Kemaskini Data Geospatial</div>

                      <form  action="{{route('senarai-harga.update', $info->id)}}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <!-- jenis dokumen input-->
                            <div class="form-group">
                                <label for="jenis_dokumen">Jenis Dokumen:</label>
                                  <select id="jenis_dokumen" class="custom-select  bg-light" name="jenis_dokumen" onchange="showSaizData(this)">
                                      <option value="" selected disabled hidden>Pilih Jenis Dokumen</option>
                                      <option value="Bercetak" {{ $info->jenis_dokumen == "Bercetak" ? 'selected' : '' }}>Bercetak</option>
                                      <option value="Vektor Shapefile" {{ $info->jenis_dokumen == "Vektor Shapefile" ? 'selected' : '' }}>Vektor Shapefile (Digital)</option>
                                  </select>
                                  @error('jenis_dokumen')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <div class="form-group" id="saiz_data_div" style="display: none;">
                                <label for="actionBarName1">Saiz Data:</label>
                                <input type="text" class="form-control bg-light" name="saiz_data" id="saiz_data" aria-describedby="saiz_data" placeholder="Masukkan Saiz Data (MB)" value="{{ $info->saiz_data  }}">
                                <small id="actionBarName1Help" class="form-text text-secondary">Size data dalam format MB (Contoh: 120.2)</small>
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <div class="form-group" id="jenis_kertas_div" style="display: none;">
                                <label for="jenis_kertas">Jenis Kertas:</label>
                                  <select id="jenis_kertas" class="custom-select  bg-light" name="jenis_kertas">
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="A0" {{ $info->jenis_kertas == "A0" ? 'selected' : '' }}>A0</option>
                                      <option value="A1" {{ $info->jenis_kertas == "A1" ? 'selected' : '' }}>A1</option>
                                      <option value="A2" {{ $info->jenis_kertas == "A2" ? 'selected' : '' }}>A2</option>
                                      <option value="A3" {{ $info->jenis_kertas == "A3" ? 'selected' : '' }}>A3</option>
                                      <option value="A4" {{ $info->jenis_kertas == "A4" ? 'selected' : '' }}>A4</option>
                                  </select>
                                  @error('jenis_kertas')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            @if($info->jenis_dokumen == "Vektor Shapefile")
                            <!-- saiz data input -->
                            <div class="form-group" id="saiz_data_div">
                                <label for="actionBarName1">Saiz Data:</label>
                                <input type="text" class="form-control bg-light" name="saiz_data" id="saiz_data" aria-describedby="saiz_data" placeholder="Masukkan Saiz Data (MB)" value="{{ $info->saiz_data  }}">
                                <small id="actionBarName1Help" class="form-text text-secondary">Size data dalam format MB (Contoh: 120.2)</small>
                            </div>
                            @else
                            <!-- jenis data input-->
                            <div class="form-group" id="jenis_kertas_div" style="display: block;">
                                <label for="jenis_kertas">Jenis Kertas:</label>
                                  <select id="jenis_kertas" class="custom-select  bg-light" name="jenis_kertas">
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="A0" {{ $info->jenis_kertas == "A0" ? 'selected' : '' }}>A0</option>
                                      <option value="A1" {{ $info->jenis_kertas == "A1" ? 'selected' : '' }}>A1</option>
                                      <option value="A2" {{ $info->jenis_kertas == "A2" ? 'selected' : '' }}>A2</option>
                                      <option value="A3" {{ $info->jenis_kertas == "A3" ? 'selected' : '' }}>A3</option>
                                      <option value="A4" {{ $info->jenis_kertas == "A4" ? 'selected' : '' }}>A4</option>
                                  </select>
                                  @error('jenis_kertas')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                            @endIf
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <!-- jenis data input-->
                            <div class="form-group">
                                <label for="jenis_data">Jenis Data:</label>
                                  <select id="jenis_data" class="custom-select  bg-light" name="jenis_data" onchange="showDiv(this)">
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="Litupan Kawasan Hutan" {{ $info->jenis_data == "Litupan Kawasan Hutan" ? 'selected' : '' }}>Litupan Kawasan Hutan</option>
                                      <option value="Sempadan Hutan Simpanan Kekal" {{ $info->jenis_data  == "Sempadan Hutan Simpanan Kekal" ? 'selected' : '' }}>Sempadan Hutan Simpanan Kekal</option>
                                      <option value="Inventori Hutan Nasional" {{ $info->jenis_data  == "Inventori Hutan Nasional" ? 'selected' : '' }}>Inventori Hutan Nasional</option>
                                      <option value="Kelas Fungsi Hutan" {{ $info->jenis_data  == "Kelas Fungsi Hutan" ? 'selected' : '' }}>Kelas Fungsi Hutan</option>
                                      <option value="Petak Kajian" {{ $info->jenis_data  == "Petak Kajian" ? 'selected' : '' }}>Petak Kajian</option>
                                      <option value="Lain-lain" {{ $info->jenis_data  == "Lain-lain" ? 'selected' : '' }}>Lain-lain</option>
                                  </select>
                                  @error('jenis_data')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <!--tahun input -->
                            <div class="form-group" id="tahun_div" style="display: none;">
                                <label for="actionBarName1">Tahun:</label>
                                <input type="text" name="tahun" class="form-control bg-light" id="tahun" aria-describedby="tahun" placeholder="Masukkan Tahun" value="{{ $info->tahun  }}">
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <div class="form-group" id="kategori_data_div" style="display: none;">
                                <label for="kategori_data">Kategori Data:</label>
                                  <select id="kategori_data" class="custom-select  bg-light" name="kategori_data" >
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="Fenologi" {{ $info->kategori_data == "Fenologi" ? 'selected' : '' }}>Fenologi</option>
                                      <option value="Growth Ploth" {{ $info->kategori_data == "Growth Ploth" ? 'selected' : '' }}>Growth Ploth</option>
                                      <option value="G&Y" {{ $info->kategori_data == "G&Y" ? 'selected' : '' }}>G&Y</option>
                                      <option value="Restorasi" {{ $info->kategori_data == "Restorasi" ? 'selected' : '' }}>Restorasi</option>
                                      <option value="CFI" {{ $info->kategori_data == "CFI" ? 'selected' : '' }}>CFI</option>
                                  </select>
                                  @error('kategori_data')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            @if($info->jenis_data  == "Petak Kajian")
                            <div class="form-group" id="kategori_data_div">
                                <label for="kategori_data">Kategori Data:</label>
                                  <select id="kategori_data" class="custom-select  bg-light" name="kategori_data" >
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="Fenologi" {{ $info->kategori_data == "Fenologi" ? 'selected' : '' }}>Fenologi</option>
                                      <option value="Growth Ploth" {{ $info->kategori_data == "Growth Ploth" ? 'selected' : '' }}>Growth Ploth</option>
                                      <option value="G&Y" {{ $info->kategori_data == "G&Y" ? 'selected' : '' }}>G&Y</option>
                                      <option value="Restorasi" {{ $info->kategori_data == "Restorasi" ? 'selected' : '' }}>Restorasi</option>
                                      <option value="CFI" {{ $info->kategori_data == "CFI" ? 'selected' : '' }}>CFI</option>
                                  </select>
                                  @error('kategori_data')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                            @else
                            <!--tahun input -->
                            <div class="form-group" id="tahun_div">
                                <label for="actionBarName1">Tahun:</label>
                                <input type="text" name="tahun" class="form-control bg-light" id="tahun" aria-describedby="tahun" placeholder="Masukkan Tahun" value="{{ $info->tahun  }}">
                            </div>
                            @endif
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <!-- negeri input -->
                            <div class="form-group">
                              <label for="select-1">Pilih Negeri:</label>
                                <select id="select-1" class="custom-select  bg-light" name="negeri">
                                  <option value="" selected disabled hidden>Pilih Negeri</option>
                                  <option value="Semenanjung Malaysia" {{ $info->negeri == "Semenanjung Malaysia" ? 'selected' : '' }}>Semenanjung Malaysia</option>
                                  <option value="Johor" {{ $info->negeri == "Johor" ? 'selected' : '' }}>Johor</option>
                                  <option value="Kedah" {{ $info->negeri == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                  <option value="Kelantan" {{ $info->negeri == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                  <option value="Negeri Sembilan" {{ $info->negeri == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                                  <option value="Pahang" {{ $info->negeri == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                  <option value="Perak" {{ $info->negeri == "Perak" ? 'selected' : '' }}>Perak</option>
                                  <option value="Perlis" {{ $info->negeri == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                  <option value="Pulau Pinang" {{ $info->negeri == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                  <option value="Selangor" {{ $info->negeri == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                  <option value="Terengganu" {{ $info->negeri == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                  <option value="Melaka" {{ $info->negeri == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                  <option value="Wilayah Persekutuan" {{ $info->negeri == "Wilayah Persekutuan" ? 'selected' : '' }}>Wilayah Persekutuan</option>
                                </select>
                                @error('negeri')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <!--harga asas input -->
                            <div class="form-group">
                                <label for="actionBarName1">Harga Asas : RM</label>
                                <input type="text" name="harga_asas" class="form-control bg-light" id="harga_asas" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);" aria-describedby="harga_asas" placeholder="Masukkan Harga Asas (RM)" value="{{ $info->harga_asas  }}">
                                <small id="actionBarName1Help" class="form-text text-secondary">Contoh: 120.20</small>
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-5"></div>
                          <div class="col-md">
                            <button type="submit" class="btn btn-primary">Kemaskini Data Geospatial</button>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                      </form>

                </div>
            </div>
        </main>
        <script type="text/javascript">
        function showSaizData(select){
          if(select.value=='Bercetak'){
            document.getElementById('saiz_data_div').style.display = "none";
            document.getElementById('jenis_kertas_div').style.display = "block";

          }
          else if (select.value=='Vektor Shapefile') {
            document.getElementById('saiz_data_div').style.display = "block";
            document.getElementById('jenis_kertas_div').style.display = "none";
          }
        }
        function showDiv(select){
           if(select.value=='Petak Kajian'){
            document.getElementById('kategori_data_div').style.display = "block";
            document.getElementById('tahun_div').style.display = "none";
           } else{
             document.getElementById('kategori_data_div').style.display = "none";
             document.getElementById('tahun_div').style.display = "block";
           }
        }

        function fun_AllowOnlyAmountAndDot(txt)
         {
             if(event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
             {
                var txtbx=document.getElementById(txt);
                var amount = document.getElementById(txt).value;
                var present=0;
                var count=0;

                if(amount.indexOf(".",present)||amount.indexOf(".",present+1));
                {
               // alert('0');
                }

               /*if(amount.length==2)
               {
                 if(event.keyCode != 46)
                 return false;
               }*/
                do
                {
                present=amount.indexOf(".",present);
                if(present!=-1)
                 {
                  count++;
                  present++;
                  }
                }
                while(present!=-1);
                if(present==-1 && amount.length==0 && event.keyCode == 46)
                {
                     event.keyCode=0;
                     //alert("Wrong position of decimal point not  allowed !!");
                     return false;
                }

                if(count>=1 && event.keyCode == 46)
                {

                     event.keyCode=0;
                     //alert("Only one decimal point is allowed !!");
                     return false;
                }
                if(count==1)
                {
                 var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                 if(lastdigits.length>=2)
                             {
                               //alert("Two decimal places only allowed");
                               event.keyCode=0;
                               return false;
                               }
                }
                     return true;
             }
             else
             {
                     event.keyCode=0;
                     //alert("Only Numbers with dot allowed !!");
                     return false;
             }

         }


        </script>
        </script>
@endsection
