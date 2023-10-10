@extends('layouts.partials.main')
@section('content')
    <section class="bg-gray-500 w-full lg:pt-16">
        <div class="px-32">
            <h1 class="py-10 font-semibold text-3xl text-gray-100 text-center">{{ $post->title }}</h1>
        </div>
    </section>

    <section class="w-full bg-gray-100">
        <div class="grid grid-cols-10 max-w-screen-xl mx-auto space-x-3 px-10">
            <div class="col-span-7 p-5 shadow-md rounded-md mx-auto bg-white mt-5 mb-10">

                <img class="w-full h-auto rounded-lg bg-cover bg-center overflow-hidden mb-5"
                    src="{{ asset('storage/' . $post->post_image) }}" alt="">
                <div class="text-base font-poppins text-slate-800 leading-7 w-full space-y-3">{!! $post->body !!}</div>
            </div>
            <div class="col-span-3">

                <div
                    class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-md my-5 shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                            View all
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@windster.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $320
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
