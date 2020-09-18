@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Sedang Sedang Diproses</div>

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user" style="width: 100%;">
                          <!-- Table head -->
                          <thead>
                              <tr>
                                <th class="all">PERMOHONAN ID</th>
                                <th class="all">TARIKH PERMOHONAN</th>
                                <th class="all">KEMASKINI PERMOHONAN</th>
                                <th class="all">BATALKAN PERMOHONAN</th>

                              </tr>
                          </thead>
                          <!-- Table body -->
                          <tbody>
                            @foreach($listSedangDiproses as $data)
                            <tr>
                              <td>
                                <div style="padding : 4px;"></div>
                                <span>{{ $data->getPermohonanID()  }}</span>
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}
                              </td>

                              @if($data->ulasan_admin == NULL)
                              <td>
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                        <a href="{{ route('user.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                              </td>
                              <td>
                                <div class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="{{ route('user.batal', $data->id) }}" class="btn btn-danger mr-1" onclick="return confirm('Anda pasti mahu membatalkan permohonan ini?')"><i class="fas fa-times-circle"></i></a>
                                </div>
                              </td>
                              @else
                              <td>
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                        <a href="#" class="btn btn-dark mr-1" ><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                              </td>
                              <td>
                                <div class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="#" class="btn btn-dark mr-1" ><i class="fas fa-times-circle"></i></a>
                                </div>
                              </td>
                              @endif

                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </main>
@endsection
