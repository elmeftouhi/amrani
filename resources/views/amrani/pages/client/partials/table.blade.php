<div class="overflow-x-auto">
    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
        <div class="w-full lg:w-5/6">
            <div class="flex items-center justify-between pt-6">
                <div class="flex items-center gap-4">
                    <div class="rounded-lg border border-gray-300 overflow-hidden relative p-0">
                        <input id="req" type="text" class="input-form border-0 text-xs w-64 m-0 h-auto" placeholder="Chercher">
                        <button id="req_submit" class="absolute top-0 right-0 m-2 text-sm text-gray-400"><i class="fas fa-search"></i></button>
                    </div>
                    <select class="form-input w-40" id="client_category_id">
                        <option value="-1">Categories</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->client_category}}</option>
                        @endforeach
                    </select>
                    @include('amrani.pages.common.city', ['cities'=>$cities])
                </div>
                <a href="{{ route('client.create') }}" class="border px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm"><i class="fas fa-user-plus"></i> Ajouter</a>
            </div>
            <div class="bg-white shadow-md rounded my-6 relative overflow-auto">
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
                            @include('amrani.pages.client.partials.tr', ['client'=>$client])
                        @endforeach
                    </tbody>
                </table>
                <div class="flex items-center gap-8 pb-4">
                    <div class="flex py-2 px-2 gap-1">
                        <button class="hover:bg-gray-400 active:bg-gray-500 py-2 px-5 bg-gray-300 rounded-md text-gray-600 border">
                            <i class="fas fa-angle-left"></i>
                        </button>
                        <button class="hover:bg-gray-400 active:bg-gray-500 py-2 px-5 bg-gray-300 rounded-md text-gray-600 border">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="text-blue-400 text-xs total_items">Total Items</div>
                </div>
                <div class="absolute hidden loader_ top-0 left-0 right-0 bottom-0 bg-gray-600 bg-opacity-30">
                    <div class="w-24 mt-24 mx-auto text-center text-2xl">
                        <i class="fas fa-sync fa-spin"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

$(document).ready(function(){

    $(document).on('click', '.destroy_client', function(e){
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

    $('#req').keyup(function(e){
        if(e.keyCode == 13){
            $('#req_submit').trigger('change');
        }
    });

    $('#req_submit').on('click', function(){

        let data = {
                    '_token'                :   $('meta[name="csrf-token"]').attr('content'),
                    };

        $('.loader_').toggleClass('hidden');
        if($('#req').val() != ""){
            data.req = $('#req').val();
        }
        if($('#client_category_id').val() != "-1"){
            data.client_category_id = $('#client_category_id').val();
        }
        if($("#city_id").val() != "-1"){
            data.client_city_id = $("#city_id").val();
        }
        if($("#city_sector_id").val() != "-1"){
            data.client_city_sector_id = $("#city_sector_id").val();
        }

        $.ajax({
            url: "{{route('client.filter')}}",
            data: data,
            type: 'POST',
            success: function(data){
                $('table tbody').html(data.success);
                $('.total_items').html('Total items ' + data.total)
                $('.loader_').toggleClass('hidden');
            },
            error: function(e){
                $('.loader_').toggleClass('hidden');
                console.log(e)
            }
        });
    });
});
    
</script>