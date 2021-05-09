<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Kuli') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accessible only for mandor.
            <div class="container p-3 my-3 bg-light">
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
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
