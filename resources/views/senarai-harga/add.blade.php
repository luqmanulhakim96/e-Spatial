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

                      <form action="{{route('senarai-harga.insert')}}" method="post">
                        @csrf
                        <div class="card-title" style="text-align: center;">Tambah Data Geospatial</div>

                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md">
                            <!-- jenis dokumen input-->
                            <div class="form-group">
                                <label for="jenis_dokumen">Jenis Dokumen:</label>
                                  <select id="jenis_dokumen" class="custom-select  bg-light" name="jenis_dokumen" onchange="showSaizData(this)">
                                      <option value="" selected disabled hidden>Pilih Jenis Dokumen</option>
                                      <option value="Bercetak" {{ old('jenis_dokumen') == "Bercetak" ? 'selected' : '' }}>Bercetak</option>
                                      <option value="Vektor Shapefile" {{ old('jenis_dokumen') == "Vektor Shapefile" ? 'selected' : '' }}>Vektor Shapefile (Digital)</option>
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
                          <div class="col-md">
                            <!-- jenis data input-->
                            <div class="form-group" style="display: none;" id="jenis_kertas_div">
                                <label for="jenis_kertas">Jenis Kertas:</label>
                                  <select id="jenis_kertas" class="custom-select  bg-light" name="jenis_kertas" >
                                      <option value="" selected disabled hidden>Pilih Jenis Kertas</option>
                                      <option value="A0" {{ old('jenis_kertas') == "A0" ? 'selected' : '' }}>A0</option>
                                      <option value="A1" {{ old('jenis_kertas') == "A1" ? 'selected' : '' }}>A1</option>
                                      <option value="A2" {{ old('jenis_kertas') == "A2" ? 'selected' : '' }}>A2</option>
                                      <option value="A3" {{ old('jenis_kertas') == "A3" ? 'selected' : '' }}>A3</option>
                                      <option value="A4" {{ old('jenis_kertas') == "A4" ? 'selected' : '' }}>A4</option>
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
                          <div class="col-md">
                            <!-- saiz data input -->
                            <div class="form-group" id="saiz_data_div" style="display: none;">
                                <label for="saiz_data">Saiz Data:</label>
                                <input type="text" class="form-control bg-light" id="saiz_data" name="saiz_data" aria-describedby="saiz_data" placeholder="Masukkan Saiz Data" value="{{ old('saiz_data') }}">
                                <small id="saiz_data" class="form-text text-secondary">Size data dalam format MB (Contoh: 120.2)</small>
                                @error('saiz_data')
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
                          <div class="col-md">
                            <!-- jenis data input-->
                            <div class="form-group">
                                <label for="jenis_data">Jenis Data:</label>
                                  <select id="jenis_data" class="custom-select  bg-light" name="jenis_data" onchange="showDiv(this)">
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="Litupan Kawasan Hutan" {{ old('jenis_data') == "Litupan Kawasan Hutan" ? 'selected' : '' }}>Litupan Kawasan Hutan</option>
                                      <option value="Sempadan Hutan Simpanan Kekal" {{ old('jenis_data') == "Sempadan Hutan Simpanan Kekal" ? 'selected' : '' }}>Sempadan Hutan Simpanan Kekal</option>
                                      <option value="Inventori Hutan Nasional" {{ old('jenis_data') == "Inventori Hutan Nasional" ? 'selected' : '' }}>Inventori Hutan Nasional</option>
                                      <option value="Kelas Fungsi Hutan" {{ old('jenis_data') == "Kelas Fungsi Hutan" ? 'selected' : '' }}>Kelas Fungsi Hutan</option>
                                      <option value="Petak Kajian" {{ old('jenis_data') == "Petak Kajian" ? 'selected' : '' }}>Petak Kajian</option>
                                      <option value="Lain-lain" {{ old('jenis_data') == "Lain-lain" ? 'selected' : '' }}>Lain-lain</option>
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
                          <div class="col-md">
                            <div class="form-group" id="kategori_data_div" style="display: none;">
                                <label for="kategori_data">Kategori Data:</label>
                                  <select id="kategori_data" class="custom-select  bg-light" name="kategori_data" >
                                      <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                      <option value="Fenologi" {{ old('kategori_data') == "Fenologi" ? 'selected' : '' }}>Fenologi</option>
                                      <option value="Growth Ploth" {{ old('kategori_data') == "Growth Ploth" ? 'selected' : '' }}>Growth Ploth</option>
                                      <option value="G&Y" {{ old('kategori_data') == "G&Y" ? 'selected' : '' }}>G&Y</option>
                                      <option value="Restorasi" {{ old('kategori_data') == "Restorasi" ? 'selected' : '' }}>Restorasi</option>
                                      <option value="CFI" {{ old('kategori_data') == "CFI" ? 'selected' : '' }}>CFI</option>
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
                          <div class="col-md">
                            <!--tahun input -->
                            <div class="form-group" id="tahun_div" style="display: block;">
                                <label for="tahun">Tahun:</label>
                                <input type="text" class="form-control bg-light"  name="tahun" id="tahun" aria-describedby="tahun" placeholder="Masukkan Tahun" value="{{ old('tahun') }}">
                                <small id="harga_asas" class="form-text text-secondary">Contoh: 2013 | 2003-2004 </small>

                                @error('tahun')
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
                          <div class="col-md">
                            <!-- negeri input -->
                            <div class="form-group">
                              <label for="negeri">Negeri:</label>
                                <select id="negeri" class="custom-select  bg-light" name="negeri">
                                    <option value="" selected disabled hidden>Pilih Negeri</option>
                                    <option value="Semenanjung Malaysia" {{ old('negeri') == "Semenanjung Malaysia" ? 'selected' : '' }}>Semenanjung Malaysia</option>
                                    <option value="Johor" {{ old('negeri') == "Johor" ? 'selected' : '' }}>Johor</option>
                                    <option value="Kedah" {{ old('negeri') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                    <option value="Kelantan" {{ old('negeri') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                    <option value="Negeri Sembilan" {{ old('Negeri Sembilan') == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                                    <option value="Pahang" {{ old('negeri') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                    <option value="Perak" {{ old('negeri') == "Perak" ? 'selected' : '' }}>Perak</option>
                                    <option value="Perlis" {{ old('negeri') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                    <option value="Pulau Pinang" {{ old('negeri') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                    <option value="Selangor" {{ old('negeri') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                    <option value="Terengganu" {{ old('negeri') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                    <option value="Melaka" {{ old('negeri') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                    <option value="Wilayah Persekutuan" {{ old('negeri') == "Wilayah Persekutuan" ? 'selected' : '' }}>Wilayah Persekutuan</option>
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
                          <div class="col-md">
                            <!--harga asas input -->
                            <div class="form-group">
                                <label for="harga_asas">Harga Asas: RM</label>
                                <input type="text" class="form-control bg-light" name="harga_asas" id="harga_asas" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);" aria-describedby="harga_asas" placeholder="Masukkan Harga Asas (RM)" value="{{ old('harga_asas') }}">
                                <small id="harga_asas" class="form-text text-secondary">Contoh: 120.20</small>
                                @error('harga_asas')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-5"></div>
                          <div class="col-md">
                            <button type="submit" class="btn btn-primary">Tambah Data Geospatial</button>
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
          }else{
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
@endsection
