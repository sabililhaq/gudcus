<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Kuli') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container p-1 rounded-3">
            <div class="card author-box card-primary">
                <div class="card-body">
                    <div class="author-box-left">
                        <img alt="image" src='/assets/img/avatar/avatar-4.png' class="rounded-circle" width="128"
                            data-toggle="tooltip" title="">
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="author-box-details">
                        {{-- @foreach ($profil as $p)
                        <div class="author-box-name">
                            <a href="#">{{ $p->name }}</a>
                        </div>
                        <div class="author-box-job">Web Developer</div>
                        <div class="author-box-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                        @endforeach --}}

                        <div class="author-box-name">
                            asd
                        </div>
                        <div class="author-box-job">Web Developer</div>
                        <div class="author-box-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                        </div>
                        
                        <div class="float-right mt-sm-0 mt-3">
                            <a href="#" class="btn btn-primary mt-3 follow-btn"
                                data-follow-action="alert('follow clicked');"
                                data-unfollow-action="alert('unfollow clicked');">Panggil</a>

                        </div>
                        
                        

                        <div class="float-left mt-sm-0 mt-3">
                            <br>
                            <a href="javascript:history.back()" class="btn"><i class="fas fa-chevron-left"></i> Kembali </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
