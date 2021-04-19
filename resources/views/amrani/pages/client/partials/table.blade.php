<div class="overflow-x-auto">
    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
        <div class="w-full lg:w-5/6">
            <div class="flex items-center justify-between pt-6">
                <div class="flex items-center gap-4">
                    <div class="rounded-lg border border-gray-300 overflow-hidden relative p-0">
                        <input type="text" class="input-form border-0 text-xs w-64 m-0 h-auto" placeholder="Chercher">
                        <button class="absolute top-0 right-0 m-2 text-sm text-gray-400"><i class="fas fa-search"></i></button>
                    </div>
                    <select class="form-input w-40" id="appartement_serivce_id">
                        <option value="-1">Categories</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->client_category}}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('client.create') }}" class="border px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i> Ajouter</a>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left cursor-pointer">#CODE</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Client</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Categorie</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Tele.</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Ville</th>
                            <th class="py-3 px-6 text-center cursor-pointer">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($clients as $client)
                            <tr class="border-b border-gray-200 bg-white hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$client->client_code}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$client->client_name}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$client->category->client_category}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$client->client_telephone}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$client->client_city}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if ($client->client_status_id == 1)
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{$client->status->client_status}}</span>
                                    @endif

                                    @if ($client->client_status_id == 2)
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{$client->status->client_status}}</span>
                                    @endif

                                    @if ($client->client_status_id == 3)
                                        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">{{$client->status->client_status}}</span>
                                    @endif

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @include('amrani.pages.client.partials.btn-show')
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @include('amrani.pages.client.partials.btn-delete')
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @include('amrani.pages.client.partials.btn-edit')
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>