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
              Status Pembayaran: asdasd
            </div>
            <div class="col">
              Status Pengiriman: asdasd

            </div>
          </div>

        </div>

      </div>
      <br>
      @endforeach
      @endforeach

      <div class="float-left mt-sm-0 mt-3">
      <br><br>

      <div class="container">
        <div class="row">
          <div class="col">asd</div>
          <div class="col">asd</div>
          <div class="col">asd</div>
          <div class="col">asd</div>

        </div>
      </div>
      </div>
    </div>

    <br>

  </div>






</x-app-layout>