@extends('layouts.partials.main')
@section('content')
<section class="min-w-full bg-green-600 pt-16">
    <div class="max-w-screen-xl mx-auto">
        <h1 class="pt-10 pb-5 px-16 font-semibold md:text-3xl sm:text-2xl text-xl text-gray-100">{{ is_object($item) ? $item->category->name : $item }}</h1>
    </div>
</section>
<section class="w-full bg-gray-100 overflow-hidden">
    <div class="grid grid-cols-10 max-w-screen-xl mx-auto lg:space-x-3 lg:px-10 px-3">
        <div class="lg:col-span-7 col-span-10 p-5 shadow-md rounded-md mx-auto bg-white mt-3 lg:mb-10">
            <h1 class="md:text-3xl sm:text-2xl text-lg font-semibold text-gray-800">{{ is_object($item) ? $item->title : $item }}</h1>
            @if (is_object($item))
                <div class="text-base font-poppins text-slate-800 leading-7 w-full space-y-3">{!! $item->body !!}</div>
            @endif
        </div>
        <div class="lg:col-span-3 col-span-10">
            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-md my-3 shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Profil</h5>
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                    
                    </a>
                </div>
                <ul>
                    @foreach ($items as $itm)
                    <li class="mb-1">
                        <a href="{{ route('profile.show', ['title' => $itm->title]) }}" class="{{ $item->id == $itm->id ? 'text-green-600' : '' }} hover:text-green-600 duration-300">{{ $itm->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-md my-3 shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                @include('comment.create')
            </div>
        </div>
    </div>
</section>
@endsection