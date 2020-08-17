@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                <!-- <div class="card rounded-lg">
                  <div class="card-body"> -->
                      <form  action="{{route('permohonan.harga.update',$id)}}" method="post">
                        @csrf
                        <!-- Light table Head card -->
                        <div class="card rounded-lg">
                            <div class="card-body">
                              <div class="card-title" style="text-align: center;">Paparan Harga Permohonan</div>

                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead >
                                            <tr class="text-center">
                                                <th width="20%"><p class="mb-0">JENIS DOKUMEN</p></th>
                                                <th width="25%"><p class="mb-0">JENIS DATA</p></th>
                                                <th width="15%"><p class="mb-0">TAHUN / KATEGORI DATA</p></th>
                                                <th width="15%"><p class="mb-0">NEGERI</p></th>
                                                <th width="15%"><p class="mb-0">SAIZ DATA (MB)</p></th>
                                                <th width="15%"><p class="mb-0">HARGA ASAS (RM)</p></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          @for($i = 0; $i < $count_data_permohonan; $i++)

                                          <tr>
                                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_dokumen']}}</p></td>
                                            @if($senaraiHargaUser[$i][0]['jenis_data'] == 'Lain-Lain')
                                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_data']}} : {{$dataPermohonan[$i]['custom_jenis_data']}}</p></td>
                                            <td><p class="mb-0 " style="text-align: center;">{{ $dataPermohonan[$i]['custom_tahun']}}</p></td>
                                            @else
                                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['jenis_data']}}</p></td>
                                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['tahun']}}{{ $senaraiHargaUser[$i][0]['kategori_data']}}</p></td>
                                            @endif
                                            <td><p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['negeri']}}</p></td>
                                            @if($senaraiHargaUser[$i][0]['jenis_dokumen'] == 'Bercetak')
                                            <td><p class="mb-0 " style="text-align: center;">Tiada<input type="hidden" id="harga" name="saiz_data[]" value="1" required></p></td>
                                            @else
                                            <td><p class="mb-0 " style="text-align: center;"><input type="text" id="harga" name="saiz_data[]" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);"  value="{{ $senaraiHargaUser[$i][0]['saiz_data']}}" required></p></td>
                                            @endif
                                            <td>
                                              <p class="mb-0 " style="text-align: center;">{{ $senaraiHargaUser[$i][0]['harga_asas']}}</p>
                                              <p class="mb-0 " style="text-align: center;"><input type="hidden" id="harga" name="harga_asas[]" value="{{ $senaraiHargaUser[$i][0]['harga_asas']}}" readonly></p>
                                            </td>
                                          </tr>

                                          @endfor

                                        </tbody>
                                    </table>
                                    @error('saiz_data')
                                    <div class="alert alert-danger">
                                      <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div style="padding: 15px;" >

                                  <!-- <div class="card-title" style="text-align: center;">Lain-lain Harga</div> -->

                                  <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="harga_asas">Harga Lain-lain: RM</label>
                                          <input type="text" class="form-control bg-light" name="harga_lain" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);" id="harga_lain" aria-describedby="harga_lain" placeholder="Masukkan Harga Lain-lain)">
                                          <small id="harga_lain" class="form-text text-secondary">Contoh: 120.20</small>
                                          @error('harga_lain')
                                          <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                          </div>
                                          @enderror
                                      </div>
                                    </div>


                                  </div>

                                  <div class="row">
                                    <!-- <div class="col-md-5">

                                    </div> -->
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="harga_asas">Muat turun file AOI :</label>
                                        <!-- <br> -->
                                        @if($permohonan->attachment_aoi != null)
                                          <a href="{{route('permohonan.download.attachment_aoi',$permohonan->id)}}" class="btn btn-primary btn-icon m-2"><i class="fa fa-download"></i> Muat Turun Data AOI</a>
                                        @else
                                        <a href="#" class="btn btn-dark btn-icon m-2"><i class="fa fa-download"></i> Tiada Data</a>
                                        @endif
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-5">

                                    </div>
                                    <div class="col-md-3">
                                      <!-- <br><br> -->
                                      <button type="submit" class="btn btn-primary" onclick="return confirm('Kemaskini harga data?');">Kemaskini Harga</button>
                                    </div>
                                  </div>


                            </div>
                        </div>
                        </div>
                      </form>
                <!-- </div>
            </div> -->
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
