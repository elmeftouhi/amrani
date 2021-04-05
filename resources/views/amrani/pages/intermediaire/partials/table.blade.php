<div class="overflow-x-auto">
    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
        <div class="w-full lg:w-5/6">
            <div class="flex items-center justify-between pt-6">
                <div class="rounded-lg border overflow-hidden relative">
                    <input type="text" class="border-0 text-sm w-64" placeholder="Chercher">
                    <button class="absolute top-0 right-0 m-2 pt-1 text-sm text-gray-400"><i class="fas fa-search"></i></button>
                </div>
                <a href="{{ route('intermediaire.create') }}" class="border px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i> Ajouter</a>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left cursor-pointer">#CODE</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Intermediaire</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Categorie</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Tele.</th>
                            <th class="py-3 px-6 text-left cursor-pointer">Ville</th>
                            <th class="py-3 px-6 text-center cursor-pointer">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($intermediaires as $intermediaire)
                            <tr class="border-b border-gray-200 bg-white hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$intermediaire->intermediaire_code}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$intermediaire->intermediaire_name}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$intermediaire->category->intermediaire_category}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$intermediaire->intermediaire_telephone}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        {{$intermediaire->intermediaire_city}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if ($intermediaire->intermediaire_status_id == 1)
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{$intermediaire->status->intermediaire_status}}</span>
                                    @endif

                                    @if ($intermediaire->intermediaire_status_id == 2)
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{$intermediaire->status->intermediaire_status}}</span>
                                    @endif

                                    @if ($intermediaire->intermediaire_status_id == 3)
                                        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">{{$intermediaire->status->intermediaire_status}}</span>
                                    @endif

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @include('amrani.pages.intermediaire.partials.btn-show')
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @include('amrani.pages.intermediaire.partials.btn-edit')
                                        </div>
                                        <form action="{{route('intermediaire.destroy', $intermediaire->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="destroy_intermediaire w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                @include('amrani.pages.intermediaire.partials.btn-delete')
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
    $('.destroy_intermediaire').on('click', function(e){
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