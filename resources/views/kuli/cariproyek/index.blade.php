<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Proyek') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- <div class="container p-3 my-3 bg-light rounded-3"> --}}

                <div class="card">
                    <div class="card-body p-0 bg-light">

                        <div class="section-body">

                            <div class="row">
                                @if (count($proyeks) == 0)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="empty-state" data-height="400" style="height: 400px;">
                                            <div class="empty-state-icon">
                                                <i class="fas fa-question"></i>
                                            </div>
                                            <h2>Tidak ada Proyek yang sedang dipasang</h2>
                                            <p class="lead">
                                                Anda harus menunggu mandor memasang sebuah proyek
                                            </p>
                                            <a href="{{ route('kuli.cariproyek.index') }}"
                                                class="btn btn-primary mt-4">Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if (auth()->user()->applying == '1')
                                
                                <div class="hero align-items-center bg-success text-white">
                                    <div class="hero-inner text-center">
                                      <h2>Menunggu</h2>
                                      @foreach ($proyeks as $p)
                                          @if ($p->id == auth()->user()->proyek_id)
                                            <p class="lead">Berhasil mendaftarkan diri ke proyek {{ $p->name }}</p>
                                            <p class="lead">Anda akan dihubungi langsung oleh mandor jika diterima.</p>
                                          @endif
                                      @endforeach
                                      <div class="mt-4">
                                          <form action="{{ url('/batal') }}" method="post">
                                              @csrf
                                            <button type="submit" class="btn btn-outline-white btn-danger btn-icon icon-left" data-nama={{ $p->name }}>Batalkan</button>
                                          </form>
                                        {{-- <a href="#" class="btn btn-outline-white btn-danger btn-icon icon-left"><i class="fas fa-sign-in-alt"></i> Batalkan</a> --}}
                                      </div>
                                    </div>
                                  </div>

                                  <script>
                                    deleteButtons = document.querySelectorAll('.btn');
                                    deleteButtons.forEach(btn => {
                                        btn.addEventListener('click', () => {
                                            // let konfirmasi = confirm(
                                            //     'Apakah anda yakin mendaftar pada proyek ' + btn
                                            //     .dataset.nama + ' ?');
                                            const data = btn.dataset.nama;
                                            alert('Berhasil membatalkan pendaftaran anda pada proyek ' + data);
                                        });
                                    });
                                </script>
                                @else
                                @foreach ($proyeks as $p)
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-mall.jpg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-mall.jpg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">{{ $p->name }}</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>{{ $p -> detail }}</p>
                                            {{-- <p>{{ $user=User::all()->where('user_id', '=', $p -> user_id) }}</p>
                                            --}}

                                            @foreach ($users as $user)
                                            @if($user->id == $p->user_id)
                                            <p>Mandor : {{ $user->name }}</p>
                                            <div class="article-cta">
                                                <form action="{{ url('/kuli/cariproyek/detail') }}" method="get">
                                                    @csrf
                                                    <input type="hidden" id="proyek_id" name="proyek_id"
                                                        value={{ $p->id }}>
                                                    <input type="hidden" id="mandor_id" name="mandor_id"
                                                        value={{ $user->id }}>
                                                    {{-- <a href="javascript:$('form').submit()">{{ $k->name }}</a> --}}
                                                    <button type="submit" class="btn btn-primary">Detail</a>
                                                </form>
                                            </div>
                                            @endif
                                            @endforeach



                                        </div>
                                    </article>
                                </div>
                                @endforeach
                                @endif


                            </div>

                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
    </div>
</x-app-layout>
