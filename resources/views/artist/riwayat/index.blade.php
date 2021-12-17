<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Pesanan Anda') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Statistik Pemesanan (Coming soon)</h4>
            <div class="card-header-action">
                <a href="#" class="btn active">Mingguan</a>
                <a href="#" class="btn">Bulanan</a>
                <a href="#" class="btn">Tahunan</a>
            </div>
        </div>
        <div class="card-body">
            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand"
                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink"
                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
            </div>
            <canvas id="myChart2" height="600" style="display: block; height: 300px; width: 500px;" width="1000"
                class="chartjs-render-monitor"></canvas>
            <div class="statistic-details mt-1">
                <div class="statistic-details-item">
                    <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                        7%</div>
                    <div class="detail-value">$243</div>
                    <div class="detail-name">Hari ini</div>
                </div>
                <div class="statistic-details-item">
                    <div class="text-small text-muted"><span class="text-danger"><i
                                class="fas fa-caret-down"></i></span> 23%</div>
                    <div class="detail-value">$2,902</div>
                    <div class="detail-name">Minggu ini</div>
                </div>
                <div class="statistic-details-item">
                    <div class="text-small text-muted"><span class="text-primary"><i
                                class="fas fa-caret-up"></i></span>9%</div>
                    <div class="detail-value">$12,821</div>
                    <div class="detail-name">Bulan ini</div>
                </div>
                <div class="statistic-details-item">
                    <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>
                        19%</div>
                    <div class="detail-value">$92,142</div>
                    <div class="detail-name">Tahun ini</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Riwayat Pesanan</h4>
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
                                    <th>Waktu Transaksi</th>
                                    <th>Status Pengiriman</th>
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
                                        @if ($order->status == "1")
                                        <div class="badge badge-warning">Belum dibayar</div>
                                        @elseif($order->status == "2")
                                        <div class="badge badge-info">Sudah bayar DP</div>
                                        @elseif($order->status == "3")
                                        <div class="badge badge-success">Lunas</div>
                                        @else
                                        <div class="badge badge-secondary">Tidak Diketahui</div>
                                        @endif

                                    </td>
                                    <td>{{ $order->updated_at }}</td>
                                    <td class="align-middle">
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
    <script src="/assets/js/page/components-statistic.js"></script>
    <div class="jqvmap-label" style="display: none;"></div>
    <script src="assets/js/stisla.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/modules/jquery.sparkline.min.js"></script>
    <script src="assets/modules/chart.min.js"></script>


</x-app-layout>