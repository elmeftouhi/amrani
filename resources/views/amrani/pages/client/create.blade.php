@extends('amrani.layout.app')
@section('title') {{ __('Ajouter un Client') }} @endsection

@section('content')
    <div class="w-full h-full bg-gray-100">
        <div class="flex gap-4 items-center h-12 px-4 text-gray-600 bg-white">
            @include('components.ui.back')
            <h1 class="font-bold text-xl">{{ __('Ajouter un Client') }} </h1>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
                <div class="w-full lg:w-4/6 bg-white my-5 py-5 rounded border">
                    <form class="m-0" action="{{route('client.store')}}" method="POST">
                        @csrf
                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="client_code">Code Client</label>
                            <input readonly value="{{$code_client}}" class="form-input bg-green-100 font-bold" type="text" id="client_code" name="client_code" required>
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

                        <div class="flex items-center block gap-4 mb-4 flex-1">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="appartement_service_id">Ville</label>
                            @include('amrani.pages.common.city', ['cities'=>$cities])
                        </div>

                        <div class="flex items-center block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm" for="client_telephone">Téléphone</label>
                            <input class="form-input" type="text" id="client_telephone" name="client_telephone" required>
                        </div>

                        <div class="flex items-top block gap-4 mb-4">
                            <label class="w-1/5 text-right text-gray-500 text-sm pt-1" for="client_contacts">Contacts</label>
                            <div class="contacts w-3/5 ">
                                <div class="flex gap-1 lg:gap-4 mb-4">
                                    <input class="form-input flex-1" type="text" name="client_contact_name[]">
                                    <input class="form-input flex-1" type="text" name="client_contact_telephone[]">
                                    <div class=" w-12 ">
                                        <button class="add_contact w-full py-2 rounded border px-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i></button>
                                    </div>
                                </div>
                            </div>
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
    <script>
        $(document).ready(function(){
            $(document).on('click', '.add_contact', function(e){
                e.preventDefault();
                $(this).remove();
                var content = `
                <div class="flex gap-1 lg:gap-4 mb-4">
                    <input class="form-input flex-1" type="text" name="client_contact_name[]">
                    <input class="form-input flex-1" type="text" name="client_contact_telephone[]">
                    <div class=" w-12 ">
                        <button class="add_contact w-full py-2 rounded border px-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i></button>
                    </div>
                </div>
                `;
                $('.contacts').append(content);
            });
        });
    </script>
@endsection