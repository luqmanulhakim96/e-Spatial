@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan Lulus</div>

                      <div class="modal fade" id="status_harga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Kemaskini Status Bayaran</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('permohonan.statusPembayaran.update')}}" method="post">
                              @csrf
                              <div class="modal-body">

                                  <div class="form-group">
                                    <label for="dokumen_ke_luar_negara">Status pembayaran:</label>

                                    <!-- All Radio Button  -->
                                    <div class="switchs">
                                        <!-- Primary Radio Button  -->

                                    <!-- <div class="custom-control custom-radio">
                                        <input type="radio" id="Perlu Dibayar" name="status_pembayaran" class="custom-control-input"  value="Perlu Dibayar" @if(old('status_pembayaran')=="Perlu Dibayar") checked @endif>
                                        <label class="custom-control-label" for="Perlu Dibayar">Perlu Dibayar</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Pengecualian Bayaran" name="status_pembayaran" class="custom-control-input"  value="Pengecualian Bayaran" @if(old('status_pembayaran')=="Pengecualian Bayaran") checked @endif>
                                        <label class="custom-control-label" for="Pengecualian Bayaran">Pengecualian Bayaran</label>
                                    </div> -->

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Sudah Dibayar" name="status_pembayaran" class="custom-control-input"  value="Sudah Dibayar" @if(old('status_pembayaran')=="Sudah Dibayar") checked @endif>
                                        <label class="custom-control-label" for="Sudah Dibayar">Pemohon Sudah Membuat Pembayaran</label>
                                    </div>


                                  </div>

                                  </div>

                                  <input type="hidden" name="permohonan_id" id="permohonan_id" value="">
                              </div>
                              <div class="modal-footer">
                                  <button type="submit"  class="btn btn-primary" >Update Status Pembayaran</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="upload_surat_bayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Surat Kelulusan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('permohonan.upload.surat_bayaran')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">

                                <div class="form-group">
                                  <label for="">Upload Surat Kelulusan</label>
                                  <div class="custom-file">
                                      <input type="file" required class="custom-file-input" required id="attachment_surat_bayaran" onchange="return fileValidation('attachment_surat_bayaran')" name="attachment_surat_bayaran">
                                      <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih fail</label>
                                  </div>
                                  <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 100MB</small>
                                </div>

                                <div class="form-group">
                                  <label for="">Upload Borang Akuan Penerimaan Data</label>
                                  <div class="custom-file">
                                      <input type="file" required class="custom-file-input" required id="attachment_penerimaan_data" onchange="return fileValidation('attachment_penerimaan_data')" name="attachment_penerimaan_data">
                                      <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih fail</label>
                                  </div>
                                  <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 100MB</small>

                                </div>




                                  <input type="hidden" id="permohonan_id_upload_surat_bayaran" name="permohonan_id_upload_surat_bayaran" value="" readonly>

                              </div>
                              <div class="modal-footer">
                                  <button type="submit"  class="btn btn-primary" >Muatnaik</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="upload_link_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Dokumen Dan Link Data</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="{{route('permohonan.upload.link_data')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">

                                <div class="form-group">
                                  <label for="">Link data</label>
                                  <input required class="form-control bg-light" type="text" name="link_data" placeholder="Masukkan link untuk muat turun data">
                                </div>



                                  <input type="hidden" id="permohonan_id_link_data" name="permohonan_id_link_data" value="">
                                  <div class="row">
                                    <div class="col-md">
                                      <div class="card-header" style="text-align: justify; text-justify: inter-word; border: 1px solid black;">
                                        <h6 >Catatan:</h6>
                                        <span>Sekiranya permohonan tiada data Vektor Shapefile, sila letakkan nilai "#".</span><br>

                                      </div>
                                    </div>
                                  </div>

                              </div>
                              <div class="modal-footer">
                                  <button type="submit"  class="btn btn-primary" >Muatnaik</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="list_permohonan_lulus" style="width: 100%;">

                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">NAMA PEMOHON</th>
                              <th class="all">KATEGORI PEMOHON</th>
                              @if($userInfo->role == 0)
                              <th class="all">MUAT NAIK SURAT & BORANG</th>
                              @endif
                              <th class="all">STATUS PEMBAYARAN PEMOHON</th>
                              <th class="all">JUMLAH BAYARAN</th>
                              <th class="all">RESIT PEMBAYARAN</th>
                              <th class="all">BORANG AKUAN PENERIMAAN DATA DARIPADA PEMOHON</th>
                              @if($userInfo->role == 0)
                              <th class="all">MUATNAIK LINK DATA GEOSPATIAL</th>
                              @endif

                            </tr>
                        </thead>

                        <tbody>
                          @foreach($listPermohonanLulus as $lulus)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $lulus->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $lulus->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$lulus->user->name}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <span style="font-size: 100%; text-transform:capitalize;">{{ $lulus->user->kategori  }}</span>
                            </td>

                            @if($lulus->attachment_surat_bayaran == null && $userInfo->role == 0)
                            <td><button class="btn btn-warning mr-1" onclick="passId_upload_surat_bayaran({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#upload_surat_bayaran"><i class="fa fa-upload"></i></button></td>
                            @else
                            <td><button class="btn btn-success mr-1" onclick="passId_upload_surat_bayaran({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#upload_surat_bayaran"><i class="fa fa-upload"></i></button></td>
                            @endif

                            @if($lulus->status_pembayaran == 'Belum Dibayar')
                            <td>
                              @if($userInfo->role == 0)
                              <button class="btn btn-warning rounded m-2" onclick="passId({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#status_harga">Pilih Status Bayaran</button>
                              @else
                              <div style="padding : 4px;"></div>
                              <span class="badge badge-warning badge-pill" style="font-size: 100%;">Berbayar</span>
                              @endif
                            </td>
                            @elseif($lulus->status_pembayaran == 'Pengecualian Bayaran')
                            <td>
                              <div style="padding : 4px;"></div>
                              <span class="badge badge-primary badge-pill" style="font-size: 100%;">{{ $lulus->status_pembayaran  }}</span>
                            </td>
                            @elseif($lulus->status_pembayaran == 'Berbayar')
                            <td><button class="btn btn-warning rounded m-2" onclick="passId({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#status_harga">{{$lulus->status_pembayaran}}</button></td>
                            @elseif($lulus->status_pembayaran == 'Sudah Dibayar')
                            <td>
                              <div style="padding : 4px;"></div>
                              <span class="badge badge-success badge-pill" style="font-size: 100%;">{{ $lulus->status_pembayaran  }}</span>
                            </td>
                            @endif



                            <td>
                              <div style="padding : 4px;"></div>
                              <span >RM {{ $lulus->jumlah_bayaran  }}</span>
                            </td>


                            @if($lulus->attachment_receipt_pembayaran != null)
                            <td>
                              <a href="{{route('permohonan.download.attachment_receipt_pembayaran',  $lulus->id)}}" class="btn btn-success mr-1">
                                <i class="fa fa-download"></i>
                              </a>
                            </td>
                            @else
                            <td>
                              <div style="padding : 4px;"></div>
                              <span>Tiada Data</span>
                            </td>
                            @endif

                            @if($lulus->attachment_penerimaan_data_user != null)
                            <td>
                              <a href="{{route('permohonan.download.attachment_penerimaan_data_user',  $lulus->id)}}" class="btn btn-success mr-1">
                                <i class="fa fa-download"></i>
                              </a>
                            </td>
                            @else
                            <td>
                              <div style="padding : 4px;"></div>
                              <span>Tiada Data</span>
                            </td>
                            @endif

                            @if($lulus->link_data == null)
                            <td><button class="btn btn-warning mr-1" onclick="passId_upload_link_data({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#upload_link_data"><i class="fa fa-upload"></i></button></td>
                            @else
                            <td><button class="btn btn-success mr-1" onclick="passId_upload_link_data({{ $lulus->id  }})" data-id="" data-toggle="modal" data-target="#upload_link_data"><i class="fa fa-upload"></i></button></td>
                            @endif


                          </tr>
                          @endforeach
                        </tbody>

                      </table>
                      </div>

                </div>
            </div>
        </main>
        <script type="text/javascript">
        $('#attachment_surat_bayaran').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

        $('#attachment_penerimaan_data').on('change',function(){
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

            $('#attachment_surat_bayaran').on('change', function() {
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


              $('#attachment_penerimaan_data').on('change', function() {
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

          function passId(id){
            //var permohonan_id = $(this).data('id');
            $(".modal-body #permohonan_id").val( id );
          }

          function passId_upload_surat_bayaran(id){
            $(".modal-body #permohonan_id_upload_surat_bayaran").val( id );
          }

          function passId_upload_link_data(id){
            $(".modal-body #permohonan_id_link_data").val( id );
          }


        </script>
@endsection
