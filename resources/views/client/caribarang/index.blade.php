<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Barang') }}
        </h2>
        <h5>{{ __('Goasdasd') }}</h5>
    </x-slot>


    <div class="row">
        @foreach ($items as $i)

        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article">
                <div class="article-header">
                    <div class="article-image" data-background="/assets/img/gambar-mall.jpg"
                        style="background-image: url(&quot;/assets/img/proyek/gambar-mall.jpg&quot;);">
                    </div>
                    <div class="article-title">
                        <h2><a href="#">{{ $i->name }}</a></h2>
                    </div>
                </div>
                <div class="article-details">
                    <p>{{ $i -> description }}</p>
                    {{-- <p>{{ $user=User::all()->where('user_id', '=', $p -> user_id) }}</p>
                    --}}

                    {{-- @foreach ($users as $user)
                    @if($user->id == $i->user_id)
                    <p>Mandor : {{ $user->name }}</p>
                    <div class="article-cta">
                        <form action="{{ url('/kuli/cariproyek/detail') }}" method="get">
                            @csrf
                            <input type="hidden" id="proyek_id" name="proyek_id" value={{ $i->id }}>
                            <input type="hidden" id="mandor_id" name="mandor_id" value={{ $user->id }}>
                            <button type="submit" class="btn btn-primary">Detail</a>
                        </form>
                    </div>
                    @endif
                    @endforeach --}}



                </div>
            </article>
        </div>
        @endforeach

    </div>



</x-app-layout>