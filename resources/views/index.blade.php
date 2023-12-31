@extends('layouts.partials.main')
@section('content')
<section class="lg:pt-[13vh] pt-[23vh] h-[100vh] bg-blend-multiply bg-gray-700 w-full">
    <div class="max-w-screen-lg px-4 pb-8 mx-auto">
        <div class="text-center col-span-12">
            <h1
                class="mb-4 text-2xl sm:text-3xl font-extrabold lg:leading-none leading-normal md:text-4xl lg:text-5xl text-white">
                Selamat Datang di Balai Pemantapan Kawasan Hutan dan Tata Lingkungan</h1>
            <p
                class="mx-auto mb-8 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl text-sm">
                Jl.
                Rusli Datau No.10, Dulomo Sel., Kec. Kota Utara, Kota Gorontalo, Gorontalo 96128</p>

            <a href="#sambutan"
                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br font-medium rounded-lg md:text-lg px-5 py-3 text-center md:w-40 w-20 text-sm">Lihat
                Sambutan</a>
        </div>
    </div>

    <div class="duration-700 ease-in-out" data-carousel-item>
        <img src="/images/Untitled-1.jpg"
            class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
    </div>

<section class="bg-gray-50 w-full px-4 py-8 text-center lg:py-32 lg:px-6 overflow-hidden" style="margin-top: 10%">
    <div class="max-w-screen-lg mx-auto text-center mb-5">
        <h1 class="text-3xl font-semibold text-gray-700 mb-2">Pegawai</h1>
        <h2 class="text-lg text-gray-500">Informasi Kepegawaian
        </h2>
    </div>
    <div class="max-w-screen-lg py-5 mx-auto grid md:grid-cols-3 gap-3 overflow-hidden">
        <button data-tooltip-target="tooltip-default1" type="button"
            class="bg-green-600 shadow-lg rounded-lg px-20 py-10 text-center">
            <span class="text-2xl font-semibold text-gray-200 block mb-4">Tata Usaha</span>
            <span class="text-xl font-medium text-gray-200">19 Orang</span>
        </button>
        <div id="tooltip-default1" role="tooltip"
            class="absolute z-10 invisible inline-block p-10 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            <span class="block">PNS 5 Orang</span>
            <span>PPNPN 14 Orang</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-default2" type="button"
            class="bg-green-600 shadow-lg rounded-lg px-20 py-10 text-center">
            <span class="text-2xl font-semibold text-gray-200 block mb-4">PPKH</span>
            <span class="text-xl font-medium text-gray-200">14 Orang</span>
        </button>
        <div id="tooltip-default2" role="tooltip"
            class="absolute z-10 invisible inline-block p-10 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            <span class="block">PNS 12 Orang</span>
            <span>PPNPN 2 Orang</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <button data-tooltip-target="tooltip-default3" type="button"
            class="bg-green-600 shadow-lg rounded-lg px-20 py-10 text-center">
            <span class="text-2xl font-semibold text-gray-200 block mb-4">SDHTL</span>
            <span class="text-xl font-medium text-gray-200">17 Orang</span>
        </button>
        <div id="tooltip-default3" role="tooltip"
            class="absolute z-10 invisible inline-block p-10 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            <span class="block">PNS 13 Orang</span>
            <span>PPNPN 4 Orang</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

</section>

@include('sections.posts')

<section id="sambutan" class="flex justify-center items-center overflow-hidden">
    <div class="flex flex-col overflow-hidden h-screen">
        <img class="thumbnail blur-sm w-screen h-[110vh] bg-blend-multiply"
            srcset="{{ asset('images/kantor.jpg') }} 1x, {{ asset('images/kantor.jpg') }} 2x" alt="">
    </div>
    <div class="w-full absolute h-screen bg-black opacity-70 space-y-96"></div>

    <figure class="max-w-screen-md absolute px-5 duration-1000 py-5 overflow-hidden" id="blockquote">
        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                fill="currentColor" />
        </svg>
        <blockquote>
            <p class="text-sm text-center font-medium text-gray-100 md:text-2xl">"Selamat datang di website resmi Balai
                Pemantapan Kawasan Hutan dan Tata Lingkungan! Kami berkomitmen untuk melestarikan kekayaan alam dan
                lingkungan. Terus dukung upaya kami dalam menjaga keindahan alam kita. Terima kasih!"</p>
        </blockquote>
        <figcaption class="flex items-center justify-center mt-6 space-x-3">
            <a href="{{ asset('images/fiqri.jpg') }}" target="_blank">
                <img class="w-6 h-6 rounded-full" src="{{ asset('images/fiqri.jpg') }}" alt="profile picture">
            </a>
            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                <div class="pr-3 font-medium text-gray-300">Fiqriansyah</div>
                <div class="pl-3 text-sm font-light text-gray-300">Kepala Balai</div>
            </div>
        </figcaption>
    </figure>
</section>

<section class="bg-gray-50 w-full px-4 py-8 mx-auto lg:py-16 lg:px-6 mySwiper">
    <div class="max-w-screen-lg mx-auto pb-4 text-center mb-5">

        <h1 class="sm:text-3xl text-2xl font-semibold text-gray-700 mb-2">Informasi PPKH - KLHK</h1>
        <h2 class="text-base text-gray-400">Pelayanan Informasi Permohonan Persetujuan Penggunaan Kawasan Hutan (PPKH)
        </h2>
    </div>
    <div class="max-w-screen-xl mx-auto flex space-x-3 text-center overflow-x-auto">
        @include('sections.swiper')

    </div>
</section>
@endsection