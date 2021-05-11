<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Proyek') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="container p-3 my-3 bg-light rounded-3">

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
                                                        <input type="hidden" id="proyek_id" name="proyek_id" value={{ $p->id }}>
                                                        <input type="hidden" id="mandor_id" name="mandor_id" value={{ $user->id }}>
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
                            </div>


                            {{-- <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-mall.jpg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-mall.jpg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Proyek Mall Cimalang</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Dibutuhkan kuli bangunan dengan spesialisasi mekanik</p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-kolam.jpg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-kolam.jpg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. </p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-rumah.jpg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-rumah.jpg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. </p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-rumah2.jpeg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-rumah2.jpeg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. </p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-stadion.jpg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-stadion.jpg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Proyek Mall Cimalang</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. </p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-tanah.jpg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-tanah.jpg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. </p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                    <article class="article">
                                        <div class="article-header">
                                            <div class="article-image" data-background="/assets/img/gambar-tol.jpeg"
                                                style="background-image: url(&quot;/assets/img/proyek/gambar-tol.jpeg&quot;);">
                                            </div>
                                            <div class="article-title">
                                                <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. </p>
                                            <div class="article-cta">
                                                <a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
