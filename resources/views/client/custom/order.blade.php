<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Pesanan pada Custom') }}
        </h2>
    </x-slot>

    <br><br>
    @foreach ($custom as $c)
    <div class="container">
        <div class="row">

            {{-- <div class="card card-primary"> --}}
                <br>
                <div class="col-4">
                    <img alt="image" src={{ $c->file_path }} >
                    <div class="float-left mt-sm-0 mt-3">
                        <a href="javascript:history.back()" class="btn"><i class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-8">
                    <div class="author-box-details">
                        <div class="author-box-name">
                            <div class="h3">{{ $c->name }}</div>
                        </div>
                        <div class="author-box-job">{{ $c->description }}</div>
                        <p>{{ $c->city }}<br><br>
                            Kategori: {{ $c->category }}<br>
                            @foreach ($artist as $art)
                            Penjual: {{ $art->name }} [{{ $art->phone_number }}]<br>
                            @endforeach
                            Pengerjaan: {{ $c->estimated_time }}<br>
                            Harga: Rp{{ $c->base_price }},-</p>
                        <div class="mb-2 mt-3">
                            <div class="text-small font-weight-bold">Stock: {{ $c->stock }}</div>
                        </div>
                        {{-- <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a> --}}
                    </div>

                </div>
                <br>
                {{--
            </div> --}}


        </div>

        <br>

    </div>

    @endforeach


    <div class="container py-12 ">
        <div class="card">
            <div class="card-header">
                <h5>Masukkan Data Pesanan</h5>
            </div>
            <div class="card-body">
                <br>

                <form action="{{ url('/client/custom/new') }}" method="get">

                    <input type="hidden" id="custom_id" name="custom_id" value = {{ $custom_id }}> 

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Permintaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="request" name="request" size="80" placeholder="e.g.: Gambar Kartun" required>
                        </div>
                    </div>

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Catatan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="notes" name="notes" placeholder="e.g.: Tolong dipercepat pembuatannya, saya perlu secepatnya" size="80" required>
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>

    <br>
</x-app-layout>