@extends('layouts.app_user_eng')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
              <div class="theme-option p-3 border-1" style="border: 1px solid;border-color: #003e61 !important;">
                  <div class="theme-pck" data-toggle="tooltip" data-placement="left" title="Bahasa | Language">
                      <i class="fa fa-globe" aria-hidden="true" style="font-size: 180% !important;"></i>
                  </div>
                  <p style="font-size: 110%;">Pilih Bahasa | Choose Language</p>
                  <div class="row">
                    <div class="col-md">
                      <div class="btn-group">
                          <!-- <button class="btn btn-primary">Bahasa Melayu</button> -->
                          <a href="{{ route('user.listSedangDiproses') }}" class="btn btn-outline-primary">Bahasa Melayu</a>
                          <button class="btn btn-primary">English</button>
                          <!-- <a href="{{ route('user.listSedangDiproses_eng') }}" class="btn btn-outline-primary">English</a> -->
                      </div>
                    </div>
                  </div>
                  <!-- <div class="side-nav-themes d-flex flex-row">
                      <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                      <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
                  </div> -->
              </div>
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">List of Applications In Processing</div>

                  <div class="card-body">

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user_eng" style="width: 100%;">
                          <!-- Table head -->
                          <thead>
                              <tr>
                                <th class="all">APPLICATION ID</th>
                                <th class="all">DATE OF APPLICATION</th>
                                <th class="all">EDIT APPLICATION</th>
                                <th class="all">CANCEL APPLICATION</th>

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
                                        <a href="{{ route('user.edit_eng', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                              </td>
                              <td>
                                <div class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="{{ route('user.batal', $data->id) }}" class="btn btn-danger mr-1" onclick="return confirm('Are you sure you want to cancel this application?')"><i class="fas fa-times-circle"></i></a>
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
