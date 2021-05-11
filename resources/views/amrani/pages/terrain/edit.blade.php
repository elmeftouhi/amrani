@extends('amrani.layout.app')
@section('title') {{ __('Modifier un Terrain') }} @endsection

@section('content')
<div class="w-full h-full bg-gray-100">
    <div class="flex gap-4 items-center h-12 px-4 text-gray-600 bg-white">
        @include('components.ui.back')
        <h1 class="font-bold text-xl">{{ __('Modifier un Terrain') }} </h1>
    </div>

    <div class="overflow-x-auto">
        <div class="min-w-screen justify-center font-sans overflow-hidden bg-gray-100">
            @if ($errors->any())
                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border shadow-sm">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif
            <form class="m-0" action="{{route('terrain.update', $terrain->id)}}" method="POST">
                @csrf
                @method('PUT')

                @include('amrani.pages.common.upload', ['folder'=>'terrains/'.$terrain->terrain_code])
                @include('amrani.pages.common.client', ['client'=>$terrain->client, 'intermediaire'=>$terrain->intermediaire])

                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border pb-4 shadow-sm">

                    @include('components.ui.title', ['title'=>'terrain / شقة'])
                    <hr>

                    <div class="flex items-center block gap-4 mb-4 mt-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_code">Code terrain</label>
                        <input readonly value="{{$terrain->terrain_code}}" class="form-input bg-green-100 font-bold" type="text" name="terrain_code" required>
                    </div>
                    
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_service_id">Services</label>
                        <select class="form-input w-3/5" name="terrain_service_id">
                            <option value="-1">-- Services --</option> 
                            @foreach ($services as $service)
                                <option @if($service->id == $terrain->terrain_service_id) selected @endif value="{{$service->id}}">{{$service->terrain_service}}</option>    
                            @endforeach
                        </select>
                    </div>  

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="city_id">Ville</label>
                        @include('amrani.pages.common.city', ['cities'=>$cities, 'city_id'=>$terrain->city_id, 'city_sector_id'=>$terrain->city_sector_id])
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="description">Description</label>
                        <input value="{{$terrain->description}}" class="form-input w-3/5" type="text" name="description">
                    </div>

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_etat">Etat</label>
                        <select class="form-input w-3/5" name="terrain_etat">
                            <option value="-1">-- Etats --</option> 
                            @foreach ($etats as $etat)
                                <option @if($etat == $terrain->terrain_etat) selected @endif value="{{$etat}}">{{$etat}}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-top block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_recule">Recule</label>
                        <div class="w-3/5 grid grid-cols-2 gap-4">
                            @foreach ($recules as $recule)
                                <label class="flex items-center space-x-3">
                                    @if (isset($terrain->terrain_recule) && $terrain->terrain_recule !=="" )
                                        @if (in_array($recule, json_decode($terrain->terrain_recule)))
                                            <input type="checkbox" checked name="terrain_recule[]" value="{{$recule}}" class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
                                            <span class="text-gray-900 font-medium">{{$recule}}</span>
                                        @else
                                            <input type="checkbox" name="terrain_recule[]" value="{{$recule}}" class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
                                            <span class="text-gray-900 font-medium">{{$recule}}</span>   
                                        @endif
                                    @else
                                        <input type="checkbox" name="terrain_recule[]" value="{{$recule}}" class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
                                        <span class="text-gray-900 font-medium">{{$recule}}</span>
                                    @endif

                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_situation">Situation</label>
                        <select class="form-input w-3/5" name="terrain_situation">
                            <option value="-1">-- Situation --</option> 
                            @foreach ($situations as $situation)
                                <option @if($situation == $terrain->terrain_situation) selected @endif value="{{$situation}}">{{$situation}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_situation">Facades</label>
                        <select class="facade form-input w-3/5" name="terrain_facade">
                            <option value="-1">-- Facade --</option> 
                            @foreach ($facades as $facade)
                                <option @if($facade == $terrain->terrain_facade) selected @endif value="{{$facade}}">{{$facade}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="largeur @if($terrain->terrain_facade != 'Rue') hidden @endif flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_etage">Largeur</label>
                        <input value="{{$terrain->largeur_1}}" placeholder="0" class="form-input w-16 text-center" type="text" name="largeur_1">
                        <input value="{{$terrain->largeur_2}}" placeholder="0" class="form-input w-16 text-center" type="text" name="largeur_2">
                        <input value="{{$terrain->largeur_3}}" placeholder="0" class="form-input w-16 text-center" type="text" name="largeur_3">
                    </div> 

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="surface">Surface</label>
                        <input value="{{$terrain->surface}}" placeholder="0" class="form-input" type="number" name="surface">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_etage">Nbr. Etage</label>
                        <input value="{{$terrain->terrain_etage}}" placeholder="0" class="form-input" type="text" name="terrain_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="terrain_garage_hauteur">H. Garage</label>
                        <input value="{{$terrain->terrain_garage_hauteur}}" placeholder="0" class="form-input" type="text" name="terrain_garage_hauteur">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_metre">Prix / M</label>
                        <input value="{{$terrain->prix_metre}}" placeholder="0" class="form-input bg-red-50" type="number" name="prix_metre">
                        <span class="text-xs text-gray-500">DH</span>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_total">Prix Total</label>
                        <input value="{{$terrain->prix_total}}" placeholder="0" class="form-input bg-blue-50" type="number" name="prix_total">
                        <span class="text-xs text-gray-500">DH</span>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_declaration">Prix Declare</label>
                        <input value="{{$terrain->prix_declaration}}"placeholder="0" class="form-input bg-blue-50" type="number" name="prix_declaration">
                        <span class="text-xs text-gray-500">DH</span>
                    </div>

                    <hr>

                    <div class="flex justify-center lg:justify-start items-center block gap-4 mt-4">
                        <div class="lg:block lg:w-1/5 hidden"></div>
                        <button class="py-2 px-4 border rounded-lg bg-green-500 text-white center"><i class="far fa-save"></i> Enregistrer</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
        $('.facade').on('change', function(){
            if($(this).val() == 'Rue'){
                $('.largeur').removeClass('hidden');
            }else{
                $('.largeur').addClass('hidden')
            }
        })
    });
</script>

@endsection