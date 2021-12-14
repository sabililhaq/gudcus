<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Design Custom') }}
        </h2>
    </x-slot>


    <div class="container py-12 ">
        <div class="card">
            <div class="card-header">
                <h5>Masukkan Data Design Custom</h5>
            </div>
            <div class="card-body">
                <br>

                <form action="{{ url('/artist/pasangcustom/create') }}" method="get">
                    

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="name" name="name" size="80" required>
                        </div>
                    </div>

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="description" name="description" size="80" placeholder="Deskripsikan barang anda secara detail" required>
                        </div>
                    </div>

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="category" name="category" size="80" placeholder="e.g.: Furnitur, Aksesoris" required>
                        </div>
                    </div>

                    

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kota</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="city" name="city" size="80" required>
                        </div>
                    </div>

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Waktu Pengerjaan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="estimated_time" name="estimated_time" size="80" placeholder = "e.g.: 7-10 Hari, 2 Minggu" required>
                        </div>
                    </div>

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" id="base_price" name="base_price" required>
                        </div>
                    </div>

                    <div class="form-group row mb-8">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock Awal</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" id="stock" name="stock" required>
                        </div>
                    </div>



                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Pasang</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>

</x-app-layout>