<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Poppins&display=swap"
        rel="stylesheet">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-f1bc0f87.css') }}">
</head>

<body class="font-inter">

    <header class="w-full lg:bg-transparent bg-slate-900 absolute top-0 left-0">
        <nav class="z-20 top-0 left-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg/900px-Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg.png"
                        class="h-12 mr-2" alt="Flowbite Logo">
                    <div class="flex flex-col">
                        <span class="text-2xl font-semibold whitespace-nowrap text-white">BPKHTL-XV</span>
                        <span class="text-xl -mt-2 font-semibold whitespace-nowrap text-white">GORONTALO</span>
                    </div>
                </a>
                <div class="flex">
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 lg:-ml-44 font-medium rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Home</a>
                        </li>
                        <li>
                            <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-white rounded md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Struktur</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white md:p-0">Sejarah</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="mega-menu-full-dropdown"
                class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y hidden">
                <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:px-6">
                    <ul>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="font-semibold">Online Stores</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                    that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="font-semibold">Segmentation</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                    that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="font-semibold">Marketing CRM</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                    that you're already using.</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="font-semibold">Online Stores</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                    that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="font-semibold">Segmentation</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                    that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="font-semibold">Marketing CRM</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools
                                    that you're already using.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <section
        class="lg:pt-[29vh] pt-[23vh] h-[100vh] bg-[url('https://images.unsplash.com/photo-1511884642898-4c92249e20b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')] bg-blend-multiply bg-gray-700">
        <div class="max-w-screen-lg px-4 pb-8 mx-auto">
            <div class="text-center col-span-12">
                <h1 class="mb-4 text-3xl font-extrabold lg:leading-none leading-normal md:text-4xl lg:text-5xl text-white">
                    Selamat Datang di Balai Pemantapan Kawasan Hutan dan Tata Lingkungan</h1>
                <p class="lg:max-w-2xl max-w-md mx-auto mb-16 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">Jl. Rusli
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
                    <h1 class="max-w-screen-md mx-auto font-light text-md text-gray-300 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias autem error libero laboriosam.</h1>
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
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}"
                                    alt="Buku Tamu" />
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
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}"
                                    alt="Buku Tamu" />
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
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}"
                                    alt="Buku Tamu" />
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
                                <img class="rounded-t-lg" src="{{ asset('images/bpkhtl-qrcode.png') }}"
                                    alt="Buku Tamu" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="sambutan" class="bg-gray-50 w-full px-4 py-8 text-center lg:py-32 lg:px-6 overflow-hidden">
        <figure class="max-w-screen-md mx-auto px-5 duration-1000" id="blockquote">
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

    <section class="flex justify-center items-center relative overflow-hidden">
        <div class="overflow-hidden lg:h-screen relative">
            <img class="thumbnail blur-sm w-screen bg-blend-multiply"
                src="https://lh5.googleusercontent.com/p/AF1QipPyfcXCtGc9HBsJ5IUfSraDgCnQTQlvesyvzhLa=w408-h306-k-no"
                alt="">
            </div>
            <div class="w-full absolute lg:h-screen h-auto bg-black opacity-60"></div>

        <figure class="max-w-screen-md absolute duration-1000" id="blockquote">
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
                    <img class="w-6 h-6 rounded-full"
                    src="{{ asset('images/fiqri.jpg') }}"
                    alt="profile picture">
                </a>
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-gray-300">Fiqriansyah</div>
                    <div class="pl-3 text-sm font-light text-gray-300">Kepala Balai</div>
                </div>
            </figcaption>
        </figure>
    </section>

    <section class="bg-gray-50 max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
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
    </section>

    <footer class="bg-whitemax-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-5">
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Company</h3>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class=" hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Careers</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Brand Center</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Help center</h3>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Discord Server</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Facebook
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Legal</h3>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Licensing</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Terms</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Company</h3>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class=" hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Careers</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Brand Center</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Download</h3>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">iOS</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Android</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Windows</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">MacOS</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="text-center">
            <a href="#"
                class="flex flex-col items-center justify-center mb-5 text-2xl font-semibold text-gray-900 uppercase">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg/900px-Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg.png"
                    class="h-6 mr-3 sm:h-14 mb-3" alt="Landwind Logo" />
                Balai Pemantapan Kawasan Hutan
            </a>
            <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2023 Mahasiswa Magang
                Universitas Negeri Gorontalo
            </span>
            <ul class="flex justify-center mt-5 space-x-5">
                <li>
                    <a href="#"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </footer>

    <div class="fixed bottom-5 right-5">
        <button id="scrollToTop" onclick="backTop()"
            class="hidden animate-bounce text-white bg-slate-700 hover:bg-blue-800 font-medium rounded-full text-sm p-4 text-center items-center mr-2 ">
            <svg class="w-4 h-4 -rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
            <span class="sr-only">Icon description</span>
        </button>
    </div>


    <script src="{{ asset('build/assets/app-55b385e2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
