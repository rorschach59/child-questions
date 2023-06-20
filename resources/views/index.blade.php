@extends('base')

@section('title', 'Liste des FAQ')

@section('content')

    <div class="px-4 md:px-12">
        <h1 class="mt-6 mb-14 text-3xl text-center">Mon enfant <span class="myUnderline font-bold">questionne</span>
        </h1>

        @if(session('success'))
            <div class="flex items-center p-4 mb-4 text-gray-500 bg-white rounded-lg shadow md:w-1/4 md:mx-auto">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                    <img src="{{ Vite::asset('resources/images/icon-check.svg') }}"
                         alt="Icone de réussite"
                         width="24" height="24"
                    >
                </div>
                <div class="ml-3 font-normal">
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <livewire:search-faq/>

        <div class="fixed right-6 bottom-6">
            <a href="{{ route('create') }}">
                <svg aria-hidden="true" class="w-12 h-12 rounded-full bg-[#FF81A7] text-white shadow-xl hover:rotate-45 transition-transform" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </a>
        </div>

    </div>

@endsection
