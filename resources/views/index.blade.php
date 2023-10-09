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

    <section class="bg-gray-50 w-full px-5 py-8 text-center lg:pb-32 lg:px-6 overflow-hidden">
        <h1 class="text-4xl font-semibold inline-block mb-2">Berita</h1>
        <p class="text-lg block mb-16 text-gray-500">Temukan informasi anda disini</p>

        <div
            class="flex lg:flex-row flex-col border-2 border-gray-200 bg-white shadow-lg max-w-screen-xl lg:space-x-5 space-x-0 lg:space-y-0 space-y-5 mx-auto p-6 rounded-lg text-white">
            <div class="min-w-[300px] bg-slate-100 rounded-md max-h-[489px]">
                <div id="default-carousel" class="relative w-full rounded-md min-h-full border"
                    data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg h-[505px]">
                        @foreach ($posts as $post)
                            <div class="hidden duration-700 ease-in-out group" data-carousel-item>
                                <figure
                                    class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 h-full">
                                    <a href="#">
                                        <img class="absolute block w-full group-hover:scale-125 duration-700 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full bg-cover"
                                            src="{{ asset('storage/' . $post->post_image) }}" alt="image description">
                                    </a>
                                    <figcaption
                                        class="absolute px-4 text-lg uppercase text-white bottom-6 bg-black opacity-80">
                                        <a href="{{ url($post->slug) }}"
                                            class="hover:text-blue-300 duration-300">{{ $post->title }}</a>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>

                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
            <div class="flex flex-col space-y-5">
                <div class="flex flex-row text-gray-800">
                    <h1 class="font-semibold text-3xl">Berita terkini</h1>
                    <div class="flex-1 flex justify-center flex-col text-center px-3">
                        <div class="border-b border-gray-400 "></div>
                    </div>
                    <div class="flex flex-row-reverse text-gray-500 items-center">
                        <a href="#" class="hover:text-blue-500 duration-300">
                            <span class="text-sm">Lihat semua</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1 inline-flex">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col text-left space-y-2">
                    @foreach ($posts as $post)
                        <div
                            class="flex flex-row rounded-md max-h-36 min-h-[9rem] overflow-hidden border border-gray-300">
                            <div class="hidden lg:flex items-center rounded md:w-60 overflow-hidden">
                                <img src="{{ asset('storage/' . $post->post_image) }}"
                                    class="hover:scale-105 duration-300">
                            </div>
                            <div class="w-full my-auto pl-3 text-gray-800">
                                <a href="{{ url($post->slug) }}" class="font-semibold">{{ $post->title }}</a>
                                <p class="py-2 md:block hidden">{!! $post->excerpt !!}
                                <p class="py-2 md:hidden block">{!! Str::limit($post->excerpt, 100, '...') !!}
                                </p>
                                <span class="text-xs">Kategori : {{ $post->category->name }}, {{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>

    </section>
    
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

    {{-- <section class="bg-gray-50 max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-sm mx-auto text-center">
            <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900">
                Start your free trial today</h2>
            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Landwind Platform for 30
                days. No credit card required.</p>
            <a href="#"
                class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Free
                trial for 30 days</a>
        </div>
        </div>
    </section> --}}
@endsection
