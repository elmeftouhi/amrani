@extends('amrani.layout.app')
@section('title') {{ __('Ajouter un Intermediaire') }} @endsection

@section('content')
    <div class="w-full h-full bg-gray-100">
        <div class="flex gap-4 items-center h-12 px-4 text-gray-600 bg-white">
            <a href="" class="py-2 px-4 hover:bg-gray-200 rounded-lg"><i class="fas fa-arrow-left"></i></a>
            <h1 class="font-bold text-xl">{{ __('Ajouter un Intermediaire') }} </h1>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
                <div class="w-full lg:w-4/6 bg-white my-5 py-5 rounded border">
                    <form class="m-0" action="{{route('intermediaire.store')}}" method="POST">
                        @csrf
                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="intermediaire_code">Code Intermediaire</label>
                            <input readonly value="{{$code_intermediaire}}" class="form-input bg-green-100 font-bold" type="text" id="intermediaire_code" name="intermediaire_code" required>
                        </div>
                        
                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="intermediaire">Nom Intermediaire</label>
                            <input class="form-input w-3/5" type="text" id="intermediaire" name="intermediaire_name" required>
                        </div>

                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="intermediairecategory_id">Category</label>
                            <select class="form-input w-3/5" id="intermediaire_category_id" name="intermediaire_category_id" required>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if ($category->is_default) selected @endif>{{$category->intermediaire_category}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="intermediaire_status_id">Status</label>
                            <select class="form-input w-3/5" id="intermediaire_status_id" name="intermediaire_status_id" required>
                            @foreach ($statuses as $status)
                                <option value="{{$status->id}}" @if ($status->is_default) selected @endif>{{$status->intermediaire_status}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="intermediaire_city">Ville</label>
                            <input class="form-input w-3/5" type="text" id="intermediaire_city" name="intermediaire_city" required>
                        </div>

                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="intermediaire_telephone">Téléphone</label>
                            <input class="form-input" type="text" id="intermediaire_telephone" name="intermediaire_telephone" required>
                        </div>

                        <hr>

                        <div class="flex justify-center lg:justify-start items-center block gap-4 mt-4">
                            <div class="lg:block lg:w-1/5 hidden"></div>
                            <button class="py-2 px-4 border rounded-lg bg-green-500 text-white center"><i class="far fa-save"></i> Enregistrer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection