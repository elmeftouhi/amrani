@extends('amrani.layout.app')
@section('title') {{ __('Ajouter un Appartement') }} @endsection

@section('content')
<div class="w-full h-full bg-gray-100">
    <div class="flex gap-4 items-center h-12 px-4 text-gray-600 bg-white">
        @include('components.ui.back')
        <h1 class="font-bold text-xl">{{ __('Ajouter un Appartement') }} </h1>
    </div>

    <div class="overflow-x-auto">
        <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
            
            <form class="m-0 w-full" action="{{route('appartement.store')}}" method="POST">
                    @csrf
                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border shadow-sm">
                    <div class="flex items-center justify-between bg-gray-50">
                        @include('components.ui.title', ['title'=>'Client / Intermediaire'])
                        <a class="p-2 mr-2 text-gray-400 cursor-pointer hover:text-gray-600"><i class="fas fa-search"></i></a>
                    </div>
                    
                    <hr>
                    
                    <div class="flex items-center block gap-4 mb-4 mt-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for=""></label>
                        <div class="relative w-3/5">
                            @include('components.ui.switch', ['title'=>'Intermediaire / صمصار', 'name'=>'client_id'])
                        </div>
                    </div>


                    <div class="flex items-center block gap-4 mb-4 ">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_name">Nom Client</label>
                        <div class="relative w-3/5">
                            <input class="form-input w-full form-input-search" type="text" id="client_name" name="client_name" required>
                            <span class="absolute top-0 right-0 p-2 mr-2 text-gray-400 cursor-pointer hover:text-gray-600"><i class="fas fa-search"></i></span>
                            <div class="form-input-search-result hidden absolute top-0 left-0 bg-gray-50 border w-full h-30 py-2 px-2 mt-8 overflow-y-auto shadow-lg">
                                <ul>
                                    <li>
                                        client 1
                                    </li>
                                    <li>
                                        client 1
                                    </li>
                                </ul>
                            </div>                            
                        </div>

                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_category_id">Category</label>
                        <select class="form-input w-3/5" id="client_category_id" name="client_category_id">
                        @foreach ($client_categories as $category)
                            <option value="{{$category->id}}" @if ($category->is_default) selected @endif>{{$category->client_category}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_status_id">Status du client</label>
                        <select class="form-input w-3/5" id="client_status_id" name="client_status_id">
                        @foreach ($client_statuses as $status)
                            <option value="{{$status->id}}" @if ($status->is_default) selected @endif>{{$status->client_status}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_city">Ville</label>
                        <input class="form-input w-3/5" type="text" id="client_city" name="client_city">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_telephone">Téléphone</label>
                        <input class="form-input" type="text" id="client_telephone" name="client_telephone">
                    </div>
                </div>

                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border pb-4 shadow-sm">

                    @include('components.ui.title', ['title'=>'Appartement / شقة'])
                    <hr>

                    <div class="flex items-center block gap-4 mb-4 mt-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_code">Code Appartement</label>
                        <input readonly value="{{$code_appartement}}" class="form-input bg-green-100 font-bold" type="text" name="appartement_code" required>
                    </div>
                    
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_etat">Etat</label>
                        <select class="form-input w-3/5" name="appartement_etat">
                            <option value="-1">-- Etats --</option> 
                            @foreach ($etats as $etat)
                                <option value="{{$etat}}">{{$etat}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_type">Type</label>
                        <select class="form-input w-3/5" name="appartement_type">
                            <option value="-1">-- Types --</option> 
                            @foreach ($types as $type)
                                <option value="{{$type}}">{{$type}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_situation">Situation</label>
                        <select class="form-input w-3/5" name="appartement_situation">
                            <option value="-1">-- Situation --</option> 
                            @foreach ($situations as $situation)
                                <option value="{{$situation}}">{{$situation}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_situation">Situation</label>
                        <select class="form-input w-3/5" name="appartement_facade">
                            <option value="-1">-- Facade --</option> 
                            @foreach ($facades as $facade)
                                <option value="{{$facade}}">{{$facade}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_etage">Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartement_etage">
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="surface">Surface</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="surface">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="ascenseur">Ascenseur</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="ascenseur">
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="parking">Place Parking</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="parking">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_chambre">Nbr. Chambres</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="nbr_chambre">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_salon">Nbr. Salons</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="nbr_salon">
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_facade">Nbr. Facades</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="nbr_facade">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_patio">nbr. Patios</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="nbr_patio">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_toilette">Nbr. Toilettes</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="nbr_toilette">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="nbr_cuisine">Nbr. Cuisines</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="nbr_cuisine">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_metre">Prix / M</label>
                        <input value="" placeholder="0" class="form-input bg-red-50" type="text" name="prix_metre">
                        <span class="text-xs text-gray-500">DH</span>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="prix_total">Prix Total</label>
                        <input value="" placeholder="0" class="form-input bg-blue-50" type="text" name="prix_total">
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
        $('.form-input-search').on('keyup', function(){
            var input = $(this).val();
            if(input.length > 1){

                $.ajax({
                    type		: 	"POST",
                    url: "{{route('client.search')}}",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        req: input
                    },
                    dataType	: 	"json",
                }).done(function(response){
                    var ul = '<ul class="">'
                    for (item in response) {
                        ul += '<li data-id="'+response[item].id+'" class="select_this text-sm hover:bg-gray-100 cursor-pointer px-2 py-1">'+ response[item].client_name + '</li>';
                    } 
                    ul += '</ul>';
                    $('.form-input-search-result').removeClass('hidden').html(ul);

                }).fail(function(xhr){
                    alert("Error");
                    console.log(xhr.responseText);
                });                
            }else{
                $('.form-input-search-result').addClass('hidden');
            }
        });

        $(document).click(function(e) { 
            if (e.target.id !== 'client_name') {
                $('.form-input-search-result').addClass('hidden');
            }        
        });

        $('.form-input-search').on('focusout', function(){
            //$('.form-input-search-result').addClass('hidden');
        });

        $(document).on('click', '.select_this', function(){
            $("#client_name").val($(this).html())
        })
    });
</script>

@endsection