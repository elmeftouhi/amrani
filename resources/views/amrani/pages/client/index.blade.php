@extends('amrani.layout.app')
@section('title') {{ __('Gestion des Clients') }} @endsection

@section('content')
    <div class="w-full h-full bg-white">
        <div class="flex items-center justify-between h-12 px-4 text-gray-600">
            <h1 class="font-bold text-xl">{{ __('Gestion des Clients') }} </h1>
        </div>

        @include('amrani.pages.client.partials.table')

    </div>
@endsection