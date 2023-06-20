@extends('base')

@section('title', 'Dashboard')

@section('content')

    <h1 class="mt-12 mb-24 text-2xl font-bold text-center">Dashboard</h1>

    <div class="md:grid md:grid-cols-3 md:gap-24 md:px-24">
        @forelse($faqs as $faq)

            <div class="faqs grid grid-cols-1 gap-12">
                <div>
                    <p class="mb-2 text-xs font-bold">
                        {{ $faq->question }}
                    </p>
                    <p class="">
                        {{ $faq->answer }}
                    </p>
                </div>
                <div class="flex items-center justify-center gap-16">
                    <a href="{{ route('dashboard.refuse', ['faq' => $faq->id]) }}">
                        <img src="{{ Vite::asset('resources/images/button-nok.svg') }}"
                             alt="Ne pas valider la question">
                    </a>
                    <a href="{{ route('dashboard.accept', ['faq' => $faq->id]) }}">
                        <img src="{{ Vite::asset('resources/images/button-ok.svg') }}"
                             alt="Valider la question">
                    </a>
                </div>
            </div>
        @empty
            <div>
                <p>Il n'y a rien à modérer</p>
            </div>
        @endforelse
    </div>

@endsection()
