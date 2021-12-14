<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Design Custom') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            {{-- <div class="input-group-btn"> --}}
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            {{-- </div> --}}
        </div>
    </div>
    <br><br>
    
        <div class="row">
            @foreach ($customs as $custom)
    
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article" style="height: 400px;">
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
                        <p>Kategori: {{$custom->category}}</p>
                        <p>{{$custom->city}}</p>
                        <p>Stok: {{$custom->stock}}</p><br>
                        <div class="article-cta">
        
                            <form action="{{url('/client/custom/detail')}}" method="get">
                                @csrf
                                <input type="hidden" id="custom_id" name="custom_id" value={{ $custom->id }}>
                                <button type="submit" class="btn btn-primary">Detail Custom</a>
        
                            </form>
                        </div>
                    </div>
                </article>
            </div>
            
            @endforeach
        
    
        </div>
    
    
</x-app-layout>
