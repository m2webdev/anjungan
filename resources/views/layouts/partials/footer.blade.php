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
            @foreach (App\Models\MediaSosial::all() as $sosial)
                <li>
                    <a href="{{ $sosial->link }}" target="sites"
                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                        {{ svg($sosial->tipe_media_sosial->icon, 'w-6 h-6') }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
</footer>

<div class="fixed bottom-5 right-5">
    <button id="scrollToTop" onclick="backTop()"
        class="z-50 hidden animate-bounce text-white bg-slate-700 hover:bg-blue-800 font-medium rounded-full text-sm p-4 text-center items-center mr-2 ">
        <svg class="w-4 h-4 -rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
        <span class="sr-only">Icon description</span>
    </button>
</div>