@extends('amrani.layout.app')
@section('title') {{ __('Agence Amrani') }} @endsection

@section('content')
    <div class="w-full">
        <div class="flex items-center justify-between h-12 px-4 text-gray-600">
            <h1 class="font-bold text-xl">Dashboard</h1>
        </div>

        <div class="flex px-4 gap-4">

            <div class="w-2/3">
                <div class="border rounded-lg p-2">
                    <div class="flex items-center justify-between h-12 px-4 text-gray-600">
                        <h1 class="font-bold text-lg">Total des Propriétés</h1>
                        <button class="text-blue-400 p-2 hover:text-gray-600"><i class="fas fa-sync-alt"></i></button>
                    </div>
                    <canvas id="myChart" width="400" height="150"></canvas>
                </div>
            </div>
            <div class="w-1/3">
                <div class="border rounded-lg">
                    <div class="flex items-center justify-between h-12 px-4 text-gray-600">
                        <h1 class="font-bold text-lg">Activités</h1>
                        <button class="text-blue-400 p-2 hover:text-gray-600"><i class="fas fa-sync-alt"></i></button>
                    </div>
                    @for ($i = 0; $i < 8; $i++)
                        <div class="flex items-center justify-between border-b py-2 px-4">
                            <p class="text-xs">
                                Soufian a ajouté un appartement
                            </p>
                            <p class="text-xs font-bold">
                                Il y a 12min
                            </p>
                        </div>                        
                    @endfor
                        <div class="text-center">
                            <a href="" class="text-blue-400 pt-4 px-4 block text-sm">Voir Tous</button>
                        </div>
                </div>
            </div>

        </div>
    </div>
@endsection