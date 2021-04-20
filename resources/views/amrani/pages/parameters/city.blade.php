
<div class="overflow-x-auto">
    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
        <div class="w-full lg:w-1/3">

            @foreach ($cities as $city)
                <div class="border-l-4 border-blue-300 rounded-lg p-1 my-2 bg-white shadow">
                    <div class="flex items-center justify-between bg-blue-50">
                        <div class="flex items-center">
                            <button class="border p-2 bg-gray-200 mr-2 show">
                                <i class="fas fa-arrow-right"></i>
                                <i class="fas fa-arrow-down hidden"></i>
                            </button>
                            <input type="text" data-value="{{$city->city_name_fr}}" readonly class="input-city form-control border-0 bg-transparent flex-1 p-0" value="{{$city->city_name_fr}}">
                        </div>
                        <div class="flex">
                            <button class="p-2 edit"><i class="far fa-edit"></i></button>
                            <button class="p-2"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    @foreach ($city->sectors as $sector)
                        <div class="sector hidden flex items-center justify-between ml-4 text-xs mt-2 hover:bg-gray-50 rounded-lg px-2">
                            <div class="flex items-center">
                                <i class="fas fa-caret-right mr-2"></i>
                                <span class="flex-1">{{$sector->city_sector_name_fr}}</span>
                            </div>
                            <div class="flex">
                                <button class="p-2"><i class="far fa-edit"></i></button>
                                <button class="p-2"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endforeach



            <div class="flex items-center justify-between pt-6">
                <div class="flex items-center gap-4">
                    <div class="rounded-lg border border-gray-300 overflow-hidden relative p-0">
                        <input type="text" class="input-form border-0 text-xs w-64 m-0 h-auto" placeholder="Chercher">
                        <button class="absolute top-0 right-0 m-2 text-sm text-gray-400"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <a href="{{ route('city.create') }}" class="border px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i> Ajouter</a>
            </div>
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left cursor-pointer">Ville</th>
                            <th class="py-3 px-6 text-center cursor-pointer">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($cities as $city)
                            <tr class="border-b border-gray-200 bg-white hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$city->city_name_fr}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if ($city->city_status == 1)
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                    @endif

                                    @if ($city->city_status == 0)
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Desactive</span>
                                    @endif

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('client.edit', $city->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('client.edit', $city->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
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
<style>
.form-control:focus {
  border-color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
}
</style>
<script>
    $(document).ready(function(){
        $('.show').on('click', function(){
            $(this).find('.fas').toggleClass('hidden');
            $(this).parent().parent().parent().find('.sector').toggleClass('hidden');
        });

        $('.edit').on('click', function(){
            $(this).parent().parent().find('.input-city').prop('readonly', false).select();
        });

        $('.input-city').on('focusout', function(){
            if($(this).val() == ""){
                $(this).val( $(this).data('value') );
            }
        });

        $('.input-city').keyup(function(e){
            if(e.keyCode == 13)
            {
                alert('clicked');
            }
        });

    })
</script>