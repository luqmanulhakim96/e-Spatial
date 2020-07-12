@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Edit Permohonan</div>

                      

                      <form action="{{route('user.update', $info->id)}}" method="post">
                        @csrf

                      </form>

                  </div>
                </div>
            </div>
        </main>
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
@endsection
