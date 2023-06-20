@extends('base')

@section('title', 'Nouvelle FAQ')

@section('content')

    <div class="px-4 md:px-0 md:w-1/2 md:mx-auto">
        <h1 class="mt-6 mb-14 text-xl font-bold text-center">Ajouter une question / réponse</h1>
        <livewire:create-faq />
    </div>

@endsection
