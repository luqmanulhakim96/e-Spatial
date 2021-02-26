@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Status Perlaksanaan</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Permohonan Gagal</div> -->

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_status_perlaksanaan" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">NAMA PEMOHON</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">PENTADBIR SISTEM</th>
                              <th class="all">PENYOKONG 1</th>
                              <th class="all">PENYOKONG 2</th>
                              <th class="all">KETUA PENGARAH</th>
                              <th class="all">STATUS TUGAS</th>
                              <th class="all">STATUS PERMOHONAN</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($listPermohonan as $baru2)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru2->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru2->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->user->name}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->tarikh_permohonan != null)
                              {{$baru2->tarikh_permohonan}}
                              @else
                              -
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->tarikh_pentadbir_sistem != null)
                              {{$baru2->tarikh_pentadbir_sistem}}
                              @else
                              -
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->tarikh_penyokong_1 != null)
                              {{$baru2->tarikh_penyokong_1}}
                              @else
                              -
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->tarikh_penyokong_2 != null)
                              {{$baru2->tarikh_penyokong_2}}
                              @else
                              -
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->tarikh_ketua_pengarah != null)
                              {{$baru2->tarikh_ketua_pengarah}}
                              @else
                              -
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->ulasan_admin == null && $baru2->status_permohonan == 'Sedang Diproses')
                              Pentadbir Sistem
                              @elseif($baru2->ulasan_penyokong_1 == null && $baru2->status_permohonan == 'Sedang Diproses')
                              Penyokong 1
                              @elseif($baru2->ulasan_penyokong_2 == null && $baru2->status_permohonan == 'Sedang Diproses')
                              Penyokong 2
                              @elseif($baru2->ulasan_ketua_pengarah == null && $baru2->status_permohonan == 'Sedang Diproses')
                              Ketua Pengarah
                              @else
                              Selesai
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($baru2->status_permohonan == 'Lulus')
                              <span class="badge m-1 p-2 badge-pill badge-success" style="font-size: 11px;">{{$baru2->status_permohonan}}</span>
                              @elseif( $baru2->status_permohonan == 'Sedang Diproses')
                              <span class="badge m-1 p-2 badge-pill badge-warning" style="font-size: 11px;">{{$baru2->status_permohonan}}</span>
                              @else
                              <span class="badge m-1 p-2 badge-pill badge-danger" style="font-size: 11px;">{{$baru2->status_permohonan}}</span>
                              @endif

                            </td>
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

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

        <!-- <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script> -->
        <!-- <script src="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"></script> -->


        <script type="text/javascript">
        // Responsive Data Table
        let list_status_perlaksanaan = $("#list_status_perlaksanaan")
        $(list_status_perlaksanaan).DataTable({
          "responsive" : true,
          "dom": 'Bfrtip',
          "buttons": [
              'excel',
              {
                  extend: 'pdfHtml5',
                  orientation: 'landscape',
                  pageSize: 'A4',
                  title: 'STATUS PERLAKSANAAN',
              },
              {
                  extend: 'print',
                  text: 'Cetak',
                  pageSize: 'LEGAL',
                  title: 'STATUS PERLAKSANAAN',
                  customize: function(win)
                  {

                      var last = null;
                      var current = null;
                      var bod = [];

                      var css = '@page { size: landscape; }',
                          head = win.document.head || win.document.getElementsByTagName('head')[0],
                          style = win.document.createElement('style');

                      style.type = 'text/css';
                      style.media = 'print';

                      if (style.styleSheet)
                      {
                        style.styleSheet.cssText = css;
                      }
                      else
                      {
                        style.appendChild(win.document.createTextNode(css));
                      }

                      head.appendChild(style);
               },
              },
          ],
          "scrollX": true,
          "language": {
              "lengthMenu": "Memaparkan _MENU_ rekod per halaman",
              "zeroRecords": "Maaf, tiada rekod.",
              "info": "Memaparkan halaman _PAGE_ dari _PAGES_",
              "infoEmpty": "Tidak ada rekod yang tersedia",
              "infoFiltered": "(Ditapis dari _MAX_ jumlah rekod)",
              "search": "ID Pemohon / Nama",
              "previous": "Sebelum",
              "paginate": {
                  "first":      "Pertama",
                  "last":       "Terakhir",
                  "next":       "Seterusnya",
                  "previous":   "Sebelumnya"
              },
          },
            responsive : true,
            columnDefs: [
                         {
                              "targets": "_all", // your case first column
                              "className": "text-center",
                         },
                       ],
        });
        </script>

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
