<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajukan Diri') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- <div class="col-12 col-md-6 col-lg-6"> --}}


            <div class="container p-3 my-3 bg-primary text-black rounded-3">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Pengajuan Diri</h4>
                            </div>
                            <div class="card-body">
                                Dengan mengajukan diri, status anda menjadi available, yang berarti siap dipanggil kerja
                                kapanpun.
                                <br>
                                Anda bisa membatalkan kapanpun.
                            </div>


                            @if (auth()->user()->kuli_availability == 0)
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Ajukan Diri</button>
                            </div>
                            @endif

                            @if (auth()->user()->kuli_availability == 1)
                            <div class="card-footer text-right">
                                <button class="btn btn-danger">Batal Ajukan Diri</button>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Keterangan</h4>
                            </div>
                            <div class="card-body">
                                @if (auth()->user()->kuli_availability == 0)
                                <div class="card-body">
                                    <p class="card-text">Status Anda saat ini tidak siap panggil (Unavailable)</p>
                                </div>
                                @endif

                                @if (auth()->user()->kuli_availability == 1)
                                <div class="card-body">
                                    <p class="card-text">Status Anda saat ini siap panggil (Available)</p>
                                    <p class="card-text">Anda akan langsung dihubungi mandor jika ada panggilan melalui nomor telepon anda.</p>

                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>





    </div>
</x-app-layout>
