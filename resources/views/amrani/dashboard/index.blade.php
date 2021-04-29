@extends('amrani.layout.app')
@section('title') {{ __('Agence Amrani') }} @endsection

@section('content')
    <div class="w-full h-full bg-white flex flex-col">
        <div class="flex items-center justify-between h-12 px-4 text-gray-600 shadow">
            <h1 class="font-bold text-xl">Dashboard</h1>
        </div>

        <div class="lg:flex gap-4 px-4 py-6 flex-1 overflow-auto bg-gray-50">
            <div class="lg:w-1/3">
                @include('amrani.dashboard.charts.bars')
            </div>
            <div class="lg:w-1/3">
                @include('amrani.dashboard.charts.pie')
            </div>
            <div class="lg:w-1/3">
                @include('amrani.dashboard.partials.logs')
            </div>
        </div>
    </div>
@endsection