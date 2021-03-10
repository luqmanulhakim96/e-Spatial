@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Permohonan Tidak Lulus</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Permohonan Gagal</div> -->

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_gagal" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">KATEGORI PEMOHON</th>
                              <th class="all">NAMA PEMOHON</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">Muat Naik Surat Tidak Lulus</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($listPermohonanGagal as $baru2)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru2->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru2->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->user->kategori == 'kementerian')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                KEMENTERIAN
                              </div>
                              @elseif($baru2->user->kategori == 'agensi')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                AGENSI
                              </div>
                              @elseif($baru2->user->kategori == 'penyelidik')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                PENYELIDIK
                              </div>
                              @elseif($baru2->user->kategori == 'institut')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                INSTITUT PENGAJIAN TINGGI
                              </div>
                              @elseif($baru2->user->kategori == 'awam')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                ORANG AWAM
                              </div>
                              @elseif($baru2->user->kategori == 'dalaman')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                WARGA JPSM
                              </div>
                              @elseif($baru2->user->kategori == 'lain')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                LAIN-LAIN
                              </div>
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->user->name}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->created_at}}
                            </td>

                            @if($baru2->remarks_admin == null)
                            <td>
                              <!-- <a href="{{ route('permohonan.alasanGagal', $baru2->id) }}">
                                <button class="btn btn-warning mr-1">
                                  <i class="far fa-comment-alt"></i>
                                </button>

                              </a> -->
                              <button class="btn btn-warning mr-1" onclick="passId_upload_surat_gagal({{ $baru2->id  }})" data-id="" data-toggle="modal" data-target="#upload_surat_gagal"><i class="fa fa-upload"></i></button>
                            </td>
                            @else
                            <td>
                              <button class="btn btn-success mr-1" onclick="passId_upload_surat_gagal({{ $baru2->id  }})" data-id="" data-toggle="modal" data-target="#upload_surat_gagal"><i class="fa fa-upload"></i></button>
                            </td>
                            @endif
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>


                    <div class="modal fade" id="upload_surat_gagal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Muatnaik Surat Tidak Lulus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="{{route('permohonan.submitAlasan')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                              <div class="form-group">
                                <label for="">Muatnaik Surat Tidak Lulus</label>
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" required id="attachment_surat_gagal" onchange="return fileValidation('attachment_surat_gagal')" name="attachment_surat_gagal">
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


                </div>
            </div>
        </main>

        <script type="text/javascript">
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

        $('#attachment_surat_gagal').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

        $('#attachment_surat_gagal').on('change', function() {
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

        function passId_upload_surat_gagal(id){
          $(".modal-body #permohonan_id_upload_surat_bayaran").val( id );
        }
        </script>
@endsection
