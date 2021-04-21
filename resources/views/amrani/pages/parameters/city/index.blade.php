
<div class="overflow-x-auto">
    <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
        <div class="w-full lg:w-1/3">
            <div class="flex items-center justify-between py-2">
                <div class="font-bold">Villes</div>
                <button class="add_city border px-4 py-1 rounded-lg bg-blue-400 hover:bg-gray-400 text-white text-sm">
                    <i class="fas fa-plus"></i> Ajouter
                </button>
            </div>

            @include('amrani.pages.parameters.city.create')


            @foreach ($cities as $city)
                <div class="border-l-4 border-blue-300 rounded-lg p-1 my-1 bg-white shadow text-xs">
                    <div class="flex items-center justify-between bg-blue-50">
                        <div class="flex items-center">
                            <button class="border p-2 bg-gray-200 mr-2 show">
                                <i class="fas fa-arrow-right"></i>
                                <i class="fas fa-arrow-down hidden"></i>
                            </button>
                            <input type="text" data-id="{{$city->id}}" data-value="{{$city->city_name_fr}}" readonly class="input-city form-control border-0 bg-transparent flex-1 p-0 text-xs" value="{{$city->city_name_fr}}">
                            <i class="loader hidden text-gray-500 fas fa-sync fa-spin"></i>
                        </div>
                        <div class="flex">
                            <button class="p-2 edit"><i class="far fa-edit"></i></button>
                            <button data-id="{{$city->id}}" class="p-2 destroy_city"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                    @foreach ($city->sectors as $sector)
                        <div class="sector hidden flex items-center justify-between ml-4 text-xs mt-2 hover:bg-gray-50 rounded-lg px-2">
                            <div class="flex items-center">
                                <i class="fas fa-caret-right mr-2"></i>
                                <input type="text" data-id="{{$sector->id}}" data-value="{{$sector->city_sector_name_fr}}" readonly class="input-sector form-control border-0 bg-transparent flex-1 p-0 text-xs" value="{{$sector->city_sector_name_fr}}">
                                <i class="loader hidden text-gray-500 fas fa-sync fa-spin"></i>
                            </div>
                            <div class="flex">
                                <button class="p-2 edit_sector"><i class="far fa-edit"></i></button>
                                <button data-id="{{$sector->id}}" class="p-2 destroy_city_sector"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endforeach
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
            $(this).prop('readonly', true)
        });

        $('.input-city').keyup(function(e){
            if(e.keyCode == 13)
            {
                if($(this).val() == ""){
                    $(this).val( $(this).data('value') );
                }else{
                    var city = $(this).data('id');
                    var route = "{{ route('city.update', 69) }}";
                    route = route.replace(69, city);
                    var data = {
                        '_token'        :   $('meta[name="csrf-token"]').attr('content'),
                        'city_name_fr'  :   $(this).val()
                    };
                    var that = $(this);
                    that.parent().find('.loader').toggleClass('hidden');
                    $.ajax({
                        url: route,
                        data: data,
                        type: 'PUT',
                        success: function(data){
                            that.parent().find('.loader').toggleClass('hidden');
                            that.prop('readonly', true)
                            console.log(data);
                        }
                    });                    
                }

            }
        });

        $('.destroy_city').on('click', function(e){
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
                    var city = that.data('id');
                    var route = "{{ route('city.destroy', 69) }}";
                    route = route.replace(69, city);
                    var data = {
                        '_token'    :   $('meta[name="csrf-token"]').attr('content')
                    };
                    that.parent().parent().find('.loader').toggleClass('hidden');
                    $.ajax({
                        url: route,
                        data: data,
                        type: 'DELETE',
                        success: function(data){
                            that.parent().parent().parent().remove();
                        }
                    });
                }
            });
        });

        /** Sectors **/

        $('.edit_sector').on('click', function(){
            $(this).parent().parent().find('.input-sector').prop('readonly', false).select();
        });

        $('.input-sector').on('focusout', function(){
            if($(this).val() == ""){
                $(this).val( $(this).data('value') );
            }
            $(this).prop('readonly', true)
        });

        $('.input-sector').keyup(function(e){
            if(e.keyCode == 13)
            {
                if($(this).val() == ""){
                    $(this).val( $(this).data('value') );
                }else{
                    var sector = $(this).data('id');
                    var route = "{{ route('city.sector.update', 69) }}";
                    route = route.replace(69, sector);
                    var data = {
                        '_token'        :   $('meta[name="csrf-token"]').attr('content'),
                        'city_sector_name_fr'  :   $(this).val()
                    };
                    var that = $(this);
                    that.parent().find('.loader').toggleClass('hidden');
                    $.ajax({
                        url: route,
                        data: data,
                        type: 'PUT',
                        success: function(data){
                            that.parent().find('.loader').toggleClass('hidden');
                            that.prop('readonly', true)
                            console.log(data);
                        }
                    });                    
                }

            }
        });

        $('.destroy_city_sector').on('click', function(e){
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
                    var city = that.data('id');
                    var route = "{{ route('city.sector.destroy', 69) }}";
                    route = route.replace(69, city);
                    var data = {
                        '_token'    :   $('meta[name="csrf-token"]').attr('content')
                    };
                    that.parent().parent().find('.loader').toggleClass('hidden');
                    $.ajax({
                        url: route,
                        data: data,
                        type: 'DELETE',
                        success: function(data){
                            console.log(data);
                            that.parent().parent().remove();
                        }
                    });
                }
            });
        });

    })
</script>