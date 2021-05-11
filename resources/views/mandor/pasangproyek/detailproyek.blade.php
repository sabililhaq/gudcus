<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Proyek') }}
        </h2>
    </x-slot>

    
    <div class="container p-3 my-3 bg-primary rounded-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Kuli Mendaftar</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Spesialisasi</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($kulis as $k)
                                <tr>
                                    <td>
                                        <img alt="image" src='/assets/img/avatar/avatar-4.png'
                                            class="rounded-circle" width="35" data-toggle="tooltip" title="">
                                    </td>
                                    <td>{{ $k->name }}</td>
                                    <td>{{ $k->address }}</td>
                                    <td>{{ $k->kuli_specialties }}</td>
                                    <td>
                                        <form action="{{ url('/mandor/pasangproyek/detailproyek/seleksi') }}" method="post">
                                            @csrf
                                            <input type="hidden" id="kuli_id" name="kuli_id" value={{ $k->id }}>
                                            {{-- <a href="javascript:$('form').submit()">{{ $p->name }}</a> --}}
                                            <button type="submit" class="btn-seleksi btn-primary">Seleksi</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="py-12">

            <div class="container p-1 rounded-3">
                <div class="card author-box card-primary">
                    <div class="card-body">

                        @foreach ($proyek as $p)
                        <div class="author-box-name">

                        </div>
                        <div class="card">

                            <div class="card-header">
                                <h4>{{ $p->name }}</h4>
                            </div>
                            <img alt="image" src='/assets/img/gambar-mall.jpg' class="img-fluid" data-toggle="tooltip"
                                title="">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <h4>Nama Proyek:</h4>
                                        </div>
                                        <div class="col-8">
                                            <h4>{{ $p->name }}</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4>Lokasi:</h4>
                                        </div>
                                        <div class="col-8">
                                            <h4>{{ $p->address }}</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4>Detail:</h4>
                                        </div>
                                        <div class="col-8">
                                            <h4>{{ $p->detail }}</h4>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <h4>Spesifikasi Kuli Dibutuhkan:</h4>
                                        </div>
                                        <div class="col-8">
                                            <h4>{{ $p->specialties_needed }}</h4>
                                        </div>
                                    </div>
                                </div>



                                {{-- <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                        Proyek:</label>
                                    <div class="col-sm-12 col-md-7">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $p->name }}</label>
                            </div>
                        </div>

                        @foreach ($mandor as $man)
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                Mandor:</label>
                            <div class="col-sm-12 col-md-7">
                                <label
                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $man->name }}</label>
                            </div>
                        </div>
                        @endforeach


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi
                                Proyek:</label>
                            <div class="col-sm-12 col-md-7">
                                <label
                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $p->address }}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Detail
                                Proyek:</label>
                            <div class="col-sm-12 col-md-7">
                                <label
                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $p->detail }}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Spesifikasi
                                Kuli Dibutuhkan:</label>
                            <div class="col-sm-12 col-md-7">
                                {{-- <input type="text" id="spek" name="spek" required> --}}
                                {{-- <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $p->specialties_needed }}</label>
                            </div>
                        </div> --}}

                    </div>

                </div>



                <div class="float-right mt-sm-0 mt-3 p-4">
                    {{-- <a href="#" class="btn btn-danger mt-3 follow-btn" data-follow-action="alert('follow clicked');"
                        data-unfollow-action="alert('unfollow clicked');" data-nama = {{ $p->name }}>Hapus</a> --}}
                    <form action="{{ url('/hapusproyek') }}" method="post">
                        @csrf
                        <input type="hidden" id="proyek_id" name="proyek_id" value={{ $p->id }}>
                        <button type="submit" class="btn-delete btn-danger" data-nama={{ $p->name }}>Hapus</button>
                    </form>
                </div>

                @endforeach




                <script>
                    deleteButtons = document.querySelectorAll('.btn-delete');
                    deleteButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                            let konfirmasi = confirm(
                                'Apakah anda yakin menghapus Proyek ' + btn
                                .dataset.nama + ' ?');
                        });
                    });

                </script>


                <div class="float-left mt-sm-0 mt-3">
                    <br>
                    <a href="javascript:history.back()" class="btn"><i class="fas fa-chevron-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
</x-app-layout>
