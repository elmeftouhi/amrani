@extends('amrani.layout.app')
@section('title') {{ __('Agence Amrani') }} @endsection

@section('content')
    <div class="w-full h-full bg-white">
        <div class="flex items-center justify-between h-12 px-4 text-gray-600">
            <h1 class="font-bold text-xl">Dashboard</h1>
        </div>

        <div class="flex gap-4 px-4">
            <div class="w-2/3">
                @include('amrani.dashboard.charts.pie')
                
            </div>
            <div class="w-1/3">
                
                @include('amrani.dashboard.partials.logs')
            </div>
        </div>
    </div>
@endsection