@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Pemohonan Baru</div>

                      <form action="{{route('user.submit')}}" method="post">
                        @csrf
                        <div class="card-title">Tambah Harga</div>
                        <!-- jenis data input-->
                        <div class="form-group">
                            <label for="select-1">Jenis Data:</label>
                              <select id="select-1" class="custom-select  bg-light" name="jenis_data">
                                  <option value="" selected disabled hidden>Pilih Jenis Data</option>
                                  <option value="Vector" {{ old('jenis_data') == "Vector" ? 'selected' : '' }}>Vector</option>
                                  <option value="Digitize" {{ old('jenis_data') == "Digitize" ? 'selected' : '' }}>Digitize</option>
                                  <option value="Option3" {{ old('jenis_data') == "Option3" ? 'selected' : '' }}>Option 3</option>
                              </select>
                              @error('jenis_data')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                        </div>

                        <!-- jenis hutan input-->
                        <div class="form-group">
                            <label for="select-1">Jenis Hutan:</label>
                              <select id="select-1" class="custom-select  bg-light" name="jenis_hutan">
                                  <option value="" selected disabled hidden>Pilih Jenis Hutan</option>
                                  <option value="Hutan Ericaceous" {{ old('jenis_hutan') == "Hutan Ericaceous" ? 'selected' : '' }}>Hutan Ericaceous</option>
                                  <option value="Hutan Montane" {{ old('jenis_hutan') == "Hutan Montane" ? 'selected' : '' }}>Hutan Montane</option>
                                  <option value="Hutan Dipterokarpa Atas" {{ old('jenis_hutan') == "Hutan Dipterokarpa Atas" ? 'selected' : '' }}>Hutan Dipterokarpa Atas</option>
                                  <option value="Hutan Dipterokarpa Bukit" {{ old('jenis_hutan') == "Hutan Dipterokarpa Bukit" ? 'selected' : '' }}>Hutan Dipterokarpa Bukit</option>
                                  <option value="Hutan Dipterokarpa Pamah" {{ old('jenis_hutan') == "Hutan Dipterokarpa Pamah" ? 'selected' : '' }}>Hutan Dipterokarpa Pamah</option>
                                  <option value="Hutan Paya Gambut" {{ old('jenis_hutan') == "Hutan Paya Gambut" ? 'selected' : '' }}>Hutan Paya Gambut</option>
                                  <option value="Hutan Paya Laut" {{ old('jenis_hutan') == "Hutan Paya Laut" ? 'selected' : '' }}>Hutan Paya Laut</option>
                              </select>
                              @error('jenis_hutan')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                        </div>

                        <!-- negeri input -->
                        <div class="form-group">
                          <label for="select-1">Negeri:</label>
                            <select id="select-1" class="custom-select  bg-light" name="negeri">
                                <option value="" selected disabled hidden>Pilih Negeri</option>
                                <option value="Johor" {{ old('negeri') == "Johor" ? 'selected' : '' }}>Johor</option>
                                <option value="Kedah" {{ old('negeri') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                <option value="Kelantan" {{ old('negeri') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                <option value="Melaka" {{ old('negeri') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                <option value="Negeri Sembilan" {{ old('Negeri Sembilan') == "Johor" ? 'selected' : '' }}>Negeri Sembilan</option>
                                <option value="Pahang" {{ old('negeri') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                <option value="Pulau Pinang" {{ old('negeri') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                <option value="Perak" {{ old('negeri') == "Perak" ? 'selected' : '' }}>Perak</option>
                                <option value="Perlis" {{ old('negeri') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                <option value="Sabah" {{ old('negeri') == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                <option value="Sarawak" {{ old('negeri') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                <option value="Selangor" {{ old('negeri') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                <option value="Terengganu" {{ old('negeri') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                <option value="Kuala Lumpur" {{ old('negeri') == "Kuala Lumpur" ? 'selected' : '' }}>Kuala Lumpur</option>
                                <option value="Labuan" {{ old('negeri') == "Labuan" ? 'selected' : '' }}>Labuan</option>
                                <option value="Putrajaya" {{ old('negeri') == "Putrajaya" ? 'selected' : '' }}>Putrajaya</option>
                            </select>
                            @error('negeri')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!--tahun input -->
                        <div class="form-group">
                            <label for="tahun">Tahun:</label>
                            <input type="text" class="form-control bg-light" name="tahun" id="tahun" aria-describedby="tahun" placeholder="Masukkan Tahun" value="{{ old('tahun') }}">
                            @error('tahun')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!-- attachment input -->
                        <div class="form-group">
                            <label for="attachment_permohonan">Muatnaik Lampiran:</label>
                            <input type="file" class="form-control bg-light" id="attachment_permohonan" name="attachment_permohonan" aria-describedby="attachment_permohonan">
                            <small id="saiz_data" class="form-text text-secondary">Muat naik fail tidak melebihi 120MB</small>
                            @error('attachment_permohonan')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <!-- dokumen ke luar negara input -->
                        <div class="form-group">
                            <label for="dokumen_ke_luar_negara">Dokumen Ke Luar Negara:</label>

                            <!-- All Radio Button  -->
                            <div class="switchs">
                                <!-- Primary Radio Button  -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Ya" name="dokumen_ke_luar_negara" class="custom-control-input" value="Ya" @if(old('dokumen_ke_luar_negara')=="Ya") checked @endif>
                                    <label class="custom-control-label" for="Ya">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Tidak" name="dokumen_ke_luar_negara" class="custom-control-input" value="Tidak" @if(old('dokumen_ke_luar_negara')=="Tidak") checked @endif>
                                    <label class="custom-control-label" for="Tidak">Tidak</label>
                                </div>
                            @error('dokumen_ke_luar_negara')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror

                            <input type="text" class="form-control bg-light" name="status_permohonan"    value="Sedang Diproses"hidden>
                            <input type="text" class="form-control bg-light" name="status_pembayaran"   value="Belum Dibayar" hidden>

                        </div>

                          <button type="submit" class="btn btn-primary">Mohon</button>
                      </form>

                  </div>
                </div>
            </div>
        </main>
@endsection
