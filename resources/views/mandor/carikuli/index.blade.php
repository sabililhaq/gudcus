<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Kuli') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="container p-3 my-3 bg-primary rounded-3">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Kuli Tersedia</h4>
                      </div>
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <tbody><tr>
                              <th>Foto</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Spesialisasi</th>
                              <th>Action</th>
                            </tr>

                            {{-- Contoh Data --}}
                            <tr>
                              <td>
                                <img alt="image" src="/assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                              </td>
                              <td><a href = "#">Ahmad Kuliawan</a> </td>
                              <td>Jalan Masih Ada no 420, Jember Utara</td>
                              <td>Besi, Cor, Mekanik</td>
                              <td><a href="#" class="btn btn-primary">Panggil</a></td>
                            </tr>

                            <tr>
                              <td>
                                <img alt="image" src="/assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                              </td>
                              <td><a href = "#">Fulan</a> </td>
                              <td>Jalan Rambutan no 123, Queensland</td>
                              <td>Besi, Cor, Mekanik, Kayu</td>
                              <td><a href="#" class="btn btn-primary">Panggil</a></td>
                            </tr>

                            <tr>
                              <td>
                                <img alt="image" src="/assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian">
                              </td>
                              <td><a href = "#">Dummy</a> </td>
                              <td>Perumahan Elitis no 11, Arkansas</td>
                              <td>Kayu, Besi</td>
                              <td><a href="#" class="btn btn-primary">Panggil</a></td>
                            </tr>


                          </tbody></table>
                        </div>
                      </div>
                    </div>
                    <p class="text-white">#Keterangan : klik nama kuli untuk melihat detail</p>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
