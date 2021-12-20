<x-app-layout>
    <x-slot name="header">
        <h4 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Custom Design') }}
        </h4>
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
                        <a href="/artist/pasangcustom" class="btn"><i class="fas fa-chevron-left"></i> Kembali</a>
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
                            Pengerjaan: {{ $c->estimated_time }}<br>
                            Harga: Rp{{ $c->base_price }},-</p>


                        <div class="mb-2 mt-3">
                            <div class="text-small font-weight-bold">Stock: 
                                
                                {{ $c->stock }} </div>
                        </div>
                        <div class="mb-2 mt-3">
                            <form action="{{ url('/artist/tambahstok') }}" method="get">
                                @csrf
                                <input type="hidden" id="custom_id" name="custom_id" value = {{ $c->id }}>
                                <button type="submit" class="btn btn-icon btn-primary"><i class="fa fa-plus"> Tambah Stok</i></button>
                            </form>
                            <br>
                            <form action="{{ url('/artist/kurangstok') }}" method="get">
                                @csrf
                                <input type="hidden" id="custom_id" name="custom_id" value = {{ $c->id }}>
                                <button type="submit" class="btn btn-icon btn-warning"><i class="fa fa-minus"> Kurangi Stok</i></button>
                            </form>
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

    <br>
    @endforeach

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pesanan</h4>
                        <div class="card-header-action">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            @if (count($orders) == 0)
                            <div class="card">
                                <div class="card-body">
                                    <div class="empty-state">
                                        <h3>Belum ada pesanan</h3>
                                        <p class="lead">
                                            Anda harus menunggu pembeli memesan design custom.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @else
                            <table class="table table-striped" id="sortable-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-th"></i>
                                        </th>
                                        <th>Permintaan</th>
                                        <th>Status Pembayaran</th>
                                        <th>Waktu Pemesanan</th>
                                        <th>Status Pengiriman</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="ui-sortable">

                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            <div class="sort-handler ui-sortable-handle">
                                                <i class="fas fa-th"></i>
                                            </div>
                                        </td>
                                        <td>{{ $order->request }}</td>
                                        <td class="align-middle">
                                            <div class="progress" data-height="4" data-toggle="tooltip" title=""
                                                data-original-title="100%" style="height: 4px;">
                                                <div class="progress-bar bg-success" data-width="100"
                                                    style="width: 100px;"></div>
                                            </div>
                                        </td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>
                                            {{-- <div class="badge badge-success">Completed</div> --}}
                                            @if ($order->delivery_status == "1")
                                            <div class="badge badge-secondary">Belum dibuat</div>
                                            @elseif($order->delivery_status == "2")
                                            <div class="badge badge-warning">Dibuat</div>
                                            @elseif($order->delivery_status == "3")
                                            <div class="badge badge-info">Dikirim</div>
                                            @else
                                            <div class="badge badge-success">Terkirim</div>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="#" class="btn btn-secondary">Detail</a> --}}
                                            <form action="{{url('/artist/pasangcustom/detail/order')}}" method="get">
                                                @csrf
                                                <input type="hidden" id="order_id" name="order_id" value={{ $order->id }}>
                                                <button type="submit" class="btn btn-primary">Detail</a>
                        
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach

                                    @endif

                                    {{-- @foreach ($orders as $order)

                                    @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        @foreach ($custom as $c)
            
        @endforeach
        <div class="row">
            <form action="{{ url('/artist/pasangcustom/delete') }}" method="get">
                @csrf
                <input type="hidden" id="custom_id" name="custom_id" value = {{ $c->id }}>
                <button type="submit" class="btn btn-icon btn-danger">  <i class="fa fa-trash"> Hapus Design Custom</i></button>
            </form>
        </div>
    </div>

    <script>
        deleteButtons = document.querySelectorAll('.btn-danger');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                let konfirmasi = confirm(
                    'Apakah anda yakin menghapus Design Custom ini?');
            });
        });

    </script>

    <br><br>

    



</x-app-layout>