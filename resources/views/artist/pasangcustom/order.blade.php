<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Detail Pesanan') }}
    </h2>
  </x-slot>

  <div class="container">
    <br>

    <div class="row">
      <div class="float-left mt-sm-0 mt-3">
        <a href="javascript:history.back()" class="btn"><i class="fas fa-chevron-left"></i> Kembali</a>
      </div>
      <br>

      @foreach ($order as $o)
      @foreach ($client as $c)
      <br>
      <div class="col-4">

        <div class="float-right mt-sm-0 mt-3">
          <img alt="gambar pesanan" width="300" src={{ $o->file_path }} >

        </div>

        <div class="clearfix"></div>
      </div>
      <div class="col-8">
        <br><br><br>
        <div class="author-box-details">
          <div class="author-box-name">
            <div class="h3">{{ $o->request }}</div>
          </div>
          <div class="author-box-job">Nama Pemesan: {{ $c->name }}</div>
          <p>Catatan Pemesan: {{ $o->notes }}<br><br>
            Alamat Pemesan: {{ $c->address }}<br>
            Nomor Telepon: {{ $c->phone_number }}</p>

          <div class="row">
            <div class="col">
              Status Pembayaran: 
              @if ($o->status == "1")
                                        <div class="badge badge-warning">Belum dibayar</div>
                                        @elseif($o->status == "2")
                                        <div class="badge badge-info">Sudah bayar DP</div>
                                        @elseif($o->status == "3")
                                        <div class="badge badge-success">Lunas</div>
                                        @else
                                        <div class="badge badge-secondary">Tidak Diketahui</div>
                                        @endif
            </div>
            <div class="col">
              Status Pengiriman:
              @if ($o->delivery_status == "1")
              <div class="badge badge-secondary">Belum dibuat</div>
              @elseif($o->delivery_status == "2")
              <div class="badge badge-warning">Dibuat</div>
              @elseif($o->delivery_status == "3")
              <div class="badge badge-info">Dikirim</div>
              @else
              <div class="badge badge-success">Terkirim</div>
              @endif

            </div>
          </div>

        </div>

      </div>
      <br>
      @endforeach
      @endforeach

      <div class="float-left mt-sm-0 mt-3">
      <br><br>

      </div>
    </div>

    <br>

  </div>






</x-app-layout>