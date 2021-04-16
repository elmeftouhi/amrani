<div class="overflow-x-auto">
    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
        <div class="w-full lg:w-5/6">
            <div class="flex items-center justify-between pt-6">
                <div class="rounded-lg border overflow-hidden relative">
                    <input type="text" class="border-0 text-sm w-64" placeholder="Chercher">
                    <button class="absolute top-0 right-0 m-2 pt-1 text-sm text-gray-400"><i class="fas fa-search"></i></button>
                </div>
                <a href="{{ route('appartement.create') }}" class="border px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i> Ajouter</a>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left cursor-pointer">#CODE</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Client/Inter.</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Type</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Etat</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Situation</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Etage</th>
                            <th class="py-3 px-6 text-center cursor-pointer">App/Etage</th>
                            <th class="py-3 px-6 text-right cursor-pointer">Prix</th>
                            <th class="py-3 px-2 text-center"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($appartements as $appartement)
                            <tr class="border-b border-gray-200 bg-white hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$appartement->appartement_code}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">
                                            @if ($appartement->client_id)
                                                {{$appartement->client->client_name}}
                                            @else
                                               {{$appartement->intermediaire->intermediaire_name}} 
                                            @endif
                                            
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$appartement->appartement_type}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$appartement->appartement_etat}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$appartement->appartement_situation}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$appartement->appartement_etage}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$appartement->appartements_en_etage}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-right text-pink-700 font-bold">
                                    @money($appartement->prix_total) <span style="font-size: 8px" class="font-light">MAD</span>
                                </td>
                                <td class="py-3 text-right" style="width: 90px">
                                    <div class="flex justify-end pt-2">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @include('amrani.pages.appartement.partials.btn-edit')
                                        </div>
                                        <form action="{{route('appartement.destroy', $appartement->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="destroy_appartement w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                @include('amrani.pages.appartement.partials.btn-delete')
                                            </button>
                                        </form>
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
<script>


    $(document).ready(function(){
        $('.destroy_appartement').on('click', function(e){
            e.preventDefault();
            var that = $(this);
            Swal.fire({
                title: 'Supprimer?',
                icon: 'warning',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: `Supprimer`,
                denyButtonText: `Annuler`,
            }).then((result) => {
                if (result.isConfirmed) {
                    that.closest( "form" ).submit();
                }
            }
            );
        });
    });
    
    </script>