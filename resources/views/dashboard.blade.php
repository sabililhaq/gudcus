<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="hero text-white hero-bg-image hero-bg-parallax"
                style="background-image: url('assets/img/gambar-kuli1.jpg');">
                <div class="hero-inner">
                    <h2>Halo, {{ auth()->user()->name }} !</h2>
                    <p class="lead">Selamat datang di nguli.id, Bersama kuli membangun negeri, bersama mandor anti
                        kendor</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                            Setup Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
