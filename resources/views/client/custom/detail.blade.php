<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail custom') }}
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
                        <a href="/client/custom" class="btn"><i class="fas fa-chevron-left"></i> Kembali</a>
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

    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <form action="{{ url('/client/custom/order') }}" method="get">
                    @csrf
                    @foreach ($custom as $c)
                        <input type="hidden" id="custom_id" name="custom_id" value = {{ $c->id }}>
                    @endforeach

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-icon btn-primary"><i class="far fa-edit"></i> Buat Pesanan</button>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>

    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Review ⭐️⭐️⭐️ (coming soon)</h5>
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Review 1</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Review 2</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Review 3 </h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
</x-app-layout>