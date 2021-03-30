@extends('amrani.layout.app')
@section('title') {{ __('Gestion des utilisateurs') }} @endsection

@section('content')
    <div class="w-full h-full bg-gray-100">
        <div class="flex items-center justify-between h-12 px-4 text-gray-600">
            <h1 class="font-bold text-xl">{{ __('Gestion des Utilisateurs') }} </h1>
            <button class="border border-white px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i> Ajouter</button>
        </div>

        @include('amrani.pages.user.partials.table')

    </div>
@endsection