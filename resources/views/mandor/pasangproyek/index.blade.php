<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pasang Proyek') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="container p-3 my-3 bg-info rounded-3">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Proyek Anda</h4>
                      </div>
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <tbody><tr>
                              <th>Nama Proyek</th>
                              <th>Lokasi</th>
                              <th>Spesifikasi Kuli Dibutuhkan</th>
                              <th>Action</th>
                            </tr>

                            {{-- Contoh Data --}}
                            <tr>
                              <td><a href = "{{ url('/mandor/pasangproyek/detailproyek') }}">Kolam Renang Hotel Cisangkuy</a> </td>
                              <td>Jalan Cisangkuy no. 69, Jember Utara</td>
                              <td>Kuli spesialis kolam renang</td>

                              {{-- <td class="align-middle">
                                <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                                  <div class="progress-bar bg-success" data-width="100" style="width: 100px;"></div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                              </td> --}}
                              <td><a href="#" class="btn btn-danger">Hapus</a></td>

                            </tr>


                          </tbody></table>
                        </div>
                      </div>
                    </div>
                  <p class="text-black">#Keterangan : klik nama proyek untuk melihat detail</p>

                  </div>

            </div>

            <div class="container p-3 my-3 bg-primary text-black">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Formulir Pendaftaran Proyek</h4>
                            </div>
                            <div class="card-body">

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Proyek</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Proyek</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Detail Proyek</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Spesifikasi Kuli Dibutuhkan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Pasang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
