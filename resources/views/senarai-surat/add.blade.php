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
                      <form action="{{route('senarai-surat.submit')}}" method="post" id="senarai_surat_submit">
                        @csrf
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card-title">Surat Baharu</div>
                              <!--jumlah harga input -->
                              <div class="form-group">
                                  <label for="jumlah_harga">Alamat 1</label>
                                  <input type="text" class="form-control bg-light" name="alamat_1" id="alamat_1" aria-describedby="alamat_1" placeholder="" value="{{ old('alamat_1') }}">
                                  <small id="alamat_1" class="form-text text-secondary"></small>
                              </div>
                              @error('alamat_1')
                              <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                              </div>
                              @enderror
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="jumlah_harga">Alamat 2</label>
                                <input type="text" class="form-control bg-light" name="alamat_2" id="alamat_2" aria-describedby="alamat_2" placeholder="" value="{{ old('alamat_2') }}">
                                <small id="alamat_2" class="form-text text-secondary"></small>
                            </div>
                            @error('alamat_2')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                                <label for="jumlah_harga">Alamat 3</label>
                                <input type="text" class="form-control bg-light" name="alamat_3" id="alamat_3" aria-describedby="alamat_3" placeholder="" value="{{ old('alamat_3') }}">
                                <small id="alamat_3" class="form-text text-secondary"></small>
                            </div>
                            @error('alamat_3')
                            <div class="alert alert-danger">
                              <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jumlah_harga">Poskod</label>
                                    <input type="text" class="form-control bg-light" name="poskod" id="poskod" aria-describedby="poskod" placeholder="" value="{{ old('poskod') }}">
                                    <small id="poskod" class="form-text text-secondary"></small>
                                </div>
                                @error('poskod')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jumlah_harga">Negeri</label>
                                    <input type="text" class="form-control bg-light" name="negeri" id="negeri" aria-describedby="negeri" placeholder="" value="{{ old('negeri') }}">
                                    <small id="negeri" class="form-text text-secondary"></small>
                                </div>
                                @error('negeri')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kandungan">Kandungan</label>
                                    <textarea type="text" class="form-control bg-light" name="kandungan" id="kandungan" aria-describedby="kandungan" placeholder="" form="senarai_surat_submit" value="{{ old('kandungan') }}" rows="10"></textarea>
                                    <small id="kandungan" class="form-text text-secondary"></small>
                                </div>
                                @error('kandungan')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </main>
@endsection
