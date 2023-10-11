@extends('layouts.partials.main')
@section('content')
    <section
        class="lg:pt-[29vh] pt-[23vh] h-[100vh] bg-[url('https://images.unsplash.com/photo-1511884642898-4c92249e20b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-blend-multiply bg-gray-700">
        <div class="max-w-screen-lg px-4 pb-8 mx-auto">
            <div class="text-center col-span-12">
                <h1 class="mb-4 text-3xl font-extrabold lg:leading-none leading-normal md:text-4xl lg:text-5xl text-white">
                    Selamat Datang di Balai Pemantapan Kawasan Hutan dan Tata Lingkungan</h1>
                <p class="lg:max-w-2xl max-w-md mx-auto mb-16 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">Jl.
                    Rusli
                    Datau No.10, Dulomo Sel., Kec. Kota Utara, Kota Gorontalo, Gorontalo 96128</p>

                <a href="#sambutan"
                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-lg px-5 py-3 text-center w-40">Lihat
                    Sambutan</a>
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-6 py-8 mx-auto lg:pt-24 lg:pb-0 lg:px-6">
            <div class="w-full lg:-mt-40 -mt-[200px] p-4 bg-slate-800 rounded-lg shadow-md sm:p-8">
                <div class="w-full text-center mb-5">
                    <h1 class="font-bold text-2xl text-white">Website BPKHTL-XV Gorontalo</h1>
                    <h1 class="max-w-screen-md mx-auto font-light text-md text-gray-300 py-2">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Molestias autem error libero laboriosam.</h1>
                </div>

                <div class="flex xl:flex-row flex-col xl:space-x-8 xl:space-y-0 space-y-4 justify-center">
                    <div class="p-6 bg-slate-700 border border-slate-600 rounded-lg shadow  duration-700 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100">Verifikasi PNBP</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-200 dark:text-gray-400">Memudahkan pengunjung dalam
                            mengisi data kedatangan dan keperluan secara elektronik untuk rekam jejak.</p>
                        <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                            class="block w-full md:w-auto text-white duration-200 bg-green-600 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                            type="button">
                            Scan QRCode
                        </button>
                        <div id="small-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}" alt="Buku Tamu" />
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-700 border border-slate-600 rounded-lg shadow  duration-700 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100">Peminjaman BMN</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-200 dark:text-gray-400">Memudahkan pengunjung dalam
                            mengisi data kedatangan dan keperluan secara elektronik untuk rekam jejak.</p>
                        <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                            class="block w-full md:w-auto text-white duration-200 bg-green-600 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                            type="button">
                            Scan QRCode
                        </button>
                        <div id="small-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}" alt="Buku Tamu" />
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-700 border border-slate-600 rounded-lg shadow  duration-700 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100">Buku Tamu Digital</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-200 dark:text-gray-400">Memudahkan pengunjung dalam
                            mengisi data kedatangan dan keperluan secara elektronik untuk rekam jejak.</p>
                        <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                            class="block w-full md:w-auto text-white duration-200 bg-green-600 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                            type="button">
                            Scan QRCode
                        </button>
                        <div id="small-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}" alt="Buku Tamu" />
                            </div>
                        </div>
                    </div>
                    <div class="p-6 bg-slate-700 border border-slate-600 rounded-lg shadow  duration-700 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-100">WebGIS</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-200 dark:text-gray-400">Memudahkan pengunjung dalam
                            mengisi data kedatangan dan keperluan secara elektronik untuk rekam jejak.</p>
                        <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                            class="block w-full md:w-auto text-white duration-200 bg-green-600 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                            type="button">
                            Scan QRCode
                        </button>
                        <div id="small-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}" alt="Buku Tamu" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="sambutan" class="bg-gray-50 w-full px-4 py-8 text-center lg:py-32 lg:px-6 overflow-hidden">
        <figure class="max-w-screen-md mx-auto px-5 duration-1000 scale-110" id="blockquote">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                    fill="currentColor" />
            </svg>
            <blockquote>
                <p class="text-lg font-medium text-gray-900 md:text-2xl">"Selamat datang di website resmi Balai
                    Pemantapan Kawasan Hutan dan Tata Lingkungan! Kami berkomitmen untuk melestarikan kekayaan alam dan
                    lingkungan. Terus dukung upaya kami dalam menjaga keindahan alam kita. Terima kasih!"</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img class="w-6 h-6 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                    alt="profile picture">
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-gray-900">Micheal Gough</div>
                    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Kepala Balai</div>
                </div>
            </figcaption>
        </figure>
    </section>

    @include('sections.posts')

    <section class="flex justify-center items-center relative overflow-hidden">
        <div class="overflow-hidden lg:h-screen relative">
            <img class="thumbnail blur-sm w-screen bg-blend-multiply"
                srcset="{{ asset('images/kantor.jpg') }} 1x, {{ asset('images/kantor.jpg') }} 2x" alt="">
        </div>
        <div class="w-full absolute lg:h-screen h-auto bg-black opacity-70"></div>

        <figure class="max-w-screen-md absolute px-5 duration-1000 py-5" id="blockquote">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                    fill="currentColor" />
            </svg>
            <blockquote>
                <p class="text-lg text-center font-medium text-gray-100 md:text-2xl">"Selamat datang di website resmi Balai
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
        <div class="max-w-screen-lg mx-auto pb-4 text-center mb-10">

            <h1 class="text-3xl font-semibold text-gray-700 mb-2">Informasi PPKH - KLHK</h1>
            <h2 class="text-lg text-gray-400">Pelayanan Informasi Permohonan Persetujuan Penggunaan Kawasan Hutan (PPKH)</h2>
        </div>
        <div class="max-w-screen-xl mx-auto flex space-x-3 text-center overflow-x-auto">
            @include('sections.swiper')

        </div>
    </section>

    <script>
        window.onscroll = function() {
            const header = document.querySelector("header");
            const scrollToTop = document.getElementById("scrollToTop");
            const blockquote = document.getElementById("blockquote");
            const fixedNv = header.offsetTop;

            if (window.pageYOffset > fixedNv) {
                header.classList.add("navbar-fixed");
                header.classList.remove("bg-slate-900");
                header.classList.remove("lg:bg-transparent");
                scrollToTop.classList.remove("hidden");
            } else {
                header.classList.add("bg-slate-900");
                header.classList.add("lg:bg-transparent");
                header.classList.add("text-white");
                header.classList.remove("navbar-fixed");
                scrollToTop.classList.add("hidden");
            }

            if (window.pageYOffset > 524 && window.pageYOffset < 1000) {
                blockquote.classList.add("scale-110");
                // blockquote.classList.add("bg-red-500");
            } else {
                blockquote.classList.remove("scale-110");
                // blockquote.classList.remove("bg-red-500");
            }
        };
    </script>
@endsection
