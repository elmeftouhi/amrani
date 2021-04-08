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
                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 py-5 rounded border">
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_code">Code Client</label>
                        <input readonly value="" class="form-input bg-green-100 font-bold" type="text" id="client_code" name="client_code" required>
                    </div>
                    
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_name">Nom Client</label>
                        <input class="form-input w-3/5" type="text" id="client_name" name="client_name" required>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_category_id">Category</label>
                        <select class="form-input w-3/5" id="client_category_id" name="client_category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if ($category->is_default) selected @endif>{{$category->client_category}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_status_id">Status du client</label>
                        <select class="form-input w-3/5" id="client_status_id" name="client_status_id" required>
                        @foreach ($statuses as $status)
                            <option value="{{$status->id}}" @if ($status->is_default) selected @endif>{{$status->client_status}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_city">Ville</label>
                        <input class="form-input w-3/5" type="text" id="client_city" name="client_city" required>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_telephone">Téléphone</label>
                        <input class="form-input" type="text" id="client_telephone" name="client_telephone" required>
                    </div>
                </div>
                <div class="w-full lg:w-4/6 mx-auto bg-white my-5 py-5 rounded border">
                    <div class="flex items-center block gap-4 mb-4 flex-1">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="client_name">Client</label>
                        <input class="form-input" type="text" name="client_name" required>
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
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
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_etage">Etage Appartement</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartement_etage">
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>
                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
                    </div>

                    <div class="flex items-center block gap-4 mb-4">
                        <label class="w-1/5 text-right text-gray-500 text-sm" for="appartements_en_etage">Appartements / Etage</label>
                        <input value="" placeholder="0" class="form-input" type="text" name="appartements_en_etage">
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
@endsection