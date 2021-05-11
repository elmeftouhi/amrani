@extends('amrani.layout.app')
@section('title') {{ __('Modifier une Villa') }} @endsection
@section('content')
<div class="w-full h-full bg-gray-100">
    <div class="flex gap-4 items-center h-12 px-4 text-gray-600 bg-white">
        @include('components.ui.back')
        <h1 class="font-bold text-xl">{{ __('Modifier une Villa') }} </h1>
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
            <form class="m-0" action="{{route('villa.update', ['villa'=>$villa->id])}}" method="POST">
                @csrf
                @method('PUT')

                @include('amrani.pages.common.upload', ['folder'=>'villas/'.$villa->villa_code])
                @include('amrani.pages.common.client', ['client'=>$villa->client, 'intermediaire'=>$villa->intermediaire])

                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border pb-4 shadow-sm">

                    @include('components.ui.title', ['title'=>'Villa / فيلا'])
                    <hr>

                    <div class="flex items-center block gap-4 mb-4 mt-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_code">Code villa</label>
                        <input readonly value="{{$villa->villa_code}}" class="form-input bg-green-100 font-bold" type="text" name="villa_code" required>
                    </div>
                    
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_service_id">Services</label>
                        <select class="form-input w-3/5" name="villa_service_id">
                            <option value="-1">-- Services --</option> 
                            @foreach ($services as $service)
                                <option @if($service->id == $villa->villa_service_id) selected @endif value="{{$service->id}}">{{$service->villa_service}}</option>    
                            @endforeach
                        </select>
                    </div>  

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="city_id">Ville</label>
                        @include('amrani.pages.common.city', ['cities'=>$cities, 'city_id'=>$villa->city_id, 'city_sector_id'=>$villa->city_sector_id])
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="description">Description</label>
                        <input value="{{$villa->description}}" class="form-input w-3/5" type="text" name="description">
                    </div>

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_etat">Etat</label>
                        <select class="form-input w-3/5" name="villa_etat">
                            <option value="-1">-- Etats --</option> 
                            @foreach ($etats as $etat)
                                <option @if($etat == $villa->villa_etat) selected @endif value="{{$etat}}">{{$etat}}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_situation">Situation</label>
                        <select class="form-input w-3/5" name="villa_situation">
                            <option value="-1">-- Situation --</option> 
                            @foreach ($situations as $situation)
                                <option @if($situation == $villa->villa_situation) selected @endif value="{{$situation}}">{{$situation}}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-top block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_details">Détails</label>
                        <div class="w-3/5 grid grid-cols-2 gap-4">
                            @foreach ($details as $detail)
                                <label class="flex items-center space-x-3">
                                    @if(isset($villa->villa_details) && !empty($villa->villa_details))
                                        @if (in_array($detail, json_decode($villa->villa_details)))
                                            <input type="checkbox" checked name="villa_details[]" value="{{$detail}}" class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
                                            <span class="text-gray-900 font-medium">{{$detail}}</span>  
                                        @else
                                            <input type="checkbox" name="villa_details[]" value="{{$detail}}" class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
                                            <span class="text-gray-900 font-medium">{{$detail}}</span>   
                                        @endif
                                    @else
                                        <input type="checkbox" name="villa_details[]" value="{{$detail}}" class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md checked:bg-blue-600 checked:border-transparent focus:outline-none">
                                        <span class="text-gray-900 font-medium">{{$detail}}</span>   
                                    @endif


                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_facade">Facades</label>
                        <select class="facade form-input w-3/5" name="villa_facade">
                            <option value="-1">-- Facade --</option> 
                            @foreach ($facades as $facade)
                                <option @if($facade == $villa->villa_facade) selected @endif value="{{$facade}}">{{$facade}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="largeur @if($villa->villa_facade != 'Rue') hidden @endif flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="largeur_1">Largeur</label>
                        <input value="{{$villa->largeur_1}}" placeholder="0" class="form-input w-16 text-center" type="text" name="largeur_1">
                        <input value="{{$villa->largeur_2}}" placeholder="0" class="form-input w-16 text-center" type="text" name="largeur_2">
                        <input value="{{$villa->largeur_3}}" placeholder="0" class="form-input w-16 text-center" type="text" name="largeur_3">
                    </div> 


                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_surface_total">Surface Total</label>
                        <input value="{{$villa->villa_surface_total}}" placeholder="0" class="form-input" type="text" name="villa_surface_total">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="villa_surface_batie">Surface Batie</label>
                        <input value="{{$villa->villa_surface_batie}}" placeholder="0" class="form-input" type="text" name="villa_surface_batie">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_garage">Nbr Garage</label>
                        <input value="{{$villa->nbr_garage}}" placeholder="0" class="form-input" type="text" name="nbr_garage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="surface_jardin">Surface Jardin</label>
                        <input value="{{$villa->surface_jardin}}" placeholder="0" class="form-input" type="text" name="surface_jardin">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="surface_patio">Surface Pateo</label>
                        <input value="{{$villa->surface_patio}}" placeholder="0" class="form-input" type="text" name="surface_patio">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_etages">Nbr. Etages</label>
                        <input value="{{$villa->nbr_etages}}" placeholder="0" class="form-input" type="text" name="nbr_etages">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_metre">Prix / M</label>
                        <input value="{{$villa->prix_metre}}" placeholder="0" class="form-input bg-red-50" type="number" name="prix_metre">
                        <span class="text-xs text-gray-500">DH</span>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_total">Prix Total</label>
                        <input value="{{$villa->prix_total}}" placeholder="0" class="form-input bg-blue-50" type="number" name="prix_total">
                        <span class="text-xs text-gray-500">DH</span>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_declaration">Prix Declare</label>
                        <input value="{{$villa->prix_declaration}}"placeholder="0" class="form-input bg-blue-50" type="number" name="prix_declaration">
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