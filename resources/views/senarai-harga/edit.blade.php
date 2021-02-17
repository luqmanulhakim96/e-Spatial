@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Kemaskini Harga Data Geospatial</div>

                  <div class="card-body">
                      <!-- <div class="card-title" style="text-align: center;">Kemaskini Data Geospatial</div> -->

                      <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md">
                          <div class="card-title" style="font-weight: bold;">
                            Maklumat Data Geospatial
                          </div>

                        </div>
                      </div>

                      <div style="padding: 5px;"></div>


                      <form  action="{{route('senarai-harga.update', $info->id)}}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-4">

                            <div class="form-group">
                                <label for="jenis_dokumen">Jenis Dokumen:</label>
                                <input id="jenis_dokumen" type="text" class="form-control bg-light @error('jenis_dokumen') is-invalid @enderror" name="jenis_dokumen" value=" {{$info->jenis_dokumen}}" autocomplete="name" disabled>
                                  @error('jenis_dokumen')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>

                          </div>
                          <div class="col-md-4">
                            @if($info->jenis_dokumen == "Vektor Shapefile")
                            <div class="form-group">
                                <label for="actionBarName1">Saiz Data:</label>
                                <input type="text" class="form-control bg-light" name="saiz_data" id="saiz_data" aria-describedby="saiz_data"  value="{{ $info->saiz_data  }}" disabled>
                            </div>
                            @elseif($info->jenis_dokumen == "Bercetak")
                            <div class="form-group">
                                <label for="actionBarName1">Jenis Kertas:</label>
                                <input type="text" class="form-control bg-light" name="saiz_data" id="jenis_kertas" aria-describedby="jenis_kertas"  value="{{ $info->jenis_kertas  }}" disabled>
                            </div>
                            @endif

                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_data">Jenis Data:</label>
                                <input id="jenis_data" type="text" class="form-control bg-light @error('jenis_data') is-invalid @enderror" name="jenis_data" value=" {{$info->jenis_data}}" autocomplete="name" disabled>
                                  @error('jenis_data')
                                  <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                  </div>
                                  @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            @if($info->jenis_data == "Petak Kajian")
                            <div class="form-group">
                                <label for="actionBarName1">Kategori Data:</label>
                                <input id="kategori_data" type="text" class="form-control bg-light @error('kategori_data') is-invalid @enderror" name="kategori_data" value=" {{$info->kategori_data}}" autocomplete="name" disabled>
                            </div>
                            @elseif($info->jenis_data == "Lain-Lain")
                            <div class="form-group">
                                <label for="actionBarName1">Negeri:</label>
                                <input id="tahun" type="text" class="form-control bg-light @error('negeri') is-invalid @enderror" name="negeri" value=" {{$info->negeri}}" autocomplete="name" disabled>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="actionBarName1">Tahun:</label>
                                <input id="tahun" type="text" class="form-control bg-light @error('tahun') is-invalid @enderror" name="tahun" value=" {{$info->tahun}}" autocomplete="name" disabled>
                            </div>
                            @endIf

                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-4">
                            @if($info->jenis_data != "Lain-Lain")

                            <div class="form-group">
                                <label for="actionBarName1">Negeri:</label>
                                <input id="tahun" type="text" class="form-control bg-light @error('negeri') is-invalid @enderror" name="negeri" value=" {{$info->negeri}}" autocomplete="name" disabled>
                            </div>

                            @endIf
                          </div>
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <hr>

                        <div class="row">
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="actionBarName1">Harga Asas:</label>
                                <input id="tahun" type="text"  onkeypress="return fun_AllowOnlyAmountAndDot(this.id);"  class="form-control bg-light @error('harga_asas') is-invalid @enderror" name="harga_asas" value=" {{$info->harga_asas}}" autocomplete="name">
                            </div>
                          </div>

                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>
                        <div style="padding: 10px;">

                        </div>
                        <div style="text-align: center;">
                          <button type="submit" class="btn btn-primary">Kemaskini Harga Data</button>

                        </div>



                      </form>

                </div>
            </div>
        </main>
        <script type="text/javascript">
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
