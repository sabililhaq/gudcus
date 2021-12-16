<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesanan Anda') }}
        </h2>
    </x-slot>

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
                                            Silakan memesan design custom terlebih dahulu
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
                                            <div class="badge badge-warning">Belum Dikirim</div>
                                        </td>
                                        <td>
                                            {{-- <a href="#" class="btn btn-secondary">Detail</a> --}}
                                            <form action="{{url('/client/order/detail')}}" method="get">
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
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="container">
        <div class="wizard-steps">
            <div class="wizard-step wizard-step-active">
              <div class="wizard-step-icon">
                <i class="fas fa-tshirt"></i>
              </div>
              <div class="wizard-step-label">
                Design Custom
              </div>
            </div>
            <div class="wizard-step wizard-step-active">
              <div class="wizard-step-icon">
                <i class="fas fa-credit-card"></i>
              </div>
              <div class="wizard-step-label">
                Pembayaran DP
              </div>
            </div>
            <div class="wizard-step wizard-step-active">
              <div class="wizard-step-icon">
                <i class="fas fa-shipping-fast"></i>
              </div>
              <div class="wizard-step-label">
                Pengiriman Produk
              </div>
            </div>
            <div class="wizard-step wizard-step-success">
              <div class="wizard-step-icon">
                <i class="fas fa-check"></i>
              </div>
              <div class="wizard-step-label">
                Pesanan Selesai & Pelunasan
              </div>
            </div>
          </div>

    </div>
    
</x-app-layout>
