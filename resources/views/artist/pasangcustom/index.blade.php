<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Design Custom') }}
        </h2>
    </x-slot>

    <div class="row">
        @foreach ($customs as $custom)

        @if ($custom->user_id == auth()->user()->id)
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article" style="height: 350px;">
                <div class="article-header">
                    <div class="article-image" data-background={{ $custom->file_path }}
                        style="background-image: url(&quot;https://demo.getstisla.com/assets/img/news/img08.jpg&quot;);">
                    </div>
                    <div class="article-title">
                        <h2><a href="#">{{$custom->name}}</a></h2>
                    </div>
                </div>
                <div class="article-details" maxlength="20">
                    <p>Rp{{$custom->base_price}},-</p>
                    <p>Estimasi pengerjaan: {{$custom->estimated_time}}</p>
                    <p>Stok: {{$custom->stock}}</p><br>
                    <div class="article-cta">
    
                        <form action="{{url('/artist/pasangcustom/detail')}}" method="get">
                            @csrf
                            <input type="hidden" id="custom_id" name="custom_id" value={{ $custom->id }}>
                            <button type="submit" class="btn btn-primary">Detail Custom</a>
    
                        </form>
                    </div>
                </div>
            </article>
        </div>
        @endif
        
        @endforeach
    
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article">
                {{-- <div class="card"> --}}
                    {{-- <div class="card-body"> --}}
                      <div class="empty-state" data-height="350" style="height: 300px;">
                        <div class="empty-state-icon">
                          <i class="fas fa-edit"></i>
                        </div>
                        <h2>Tambahkan Custom Design</h2>
                        <a href="{{ url('/artist/pasangcustom/buat') }}" rel="stylesheet" class="btn btn-primary mt-4">Tambah</a>
                      </div>
                    {{-- </div> --}}
                  {{-- </div> --}}
            </article>
        </div>

    </div>

    


</x-app-layout>
