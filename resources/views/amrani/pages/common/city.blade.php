<div class="flex items-center gap-4">
    <select class="form-input" id="city_id" name="city_id">
        <option value="-1">--Ville</option>
        @foreach ($cities as $city)
            @if (isset($city_id))
                <option @if($city->id == $city_id) selected @endif value="{{$city->id}}">{{$city->city_name_fr}}</option>  
            @else
                <option @if($city->is_default) selected @endif value="{{$city->id}}">{{$city->city_name_fr}}</option>               
            @endif
        @endforeach
    </select>
    <select class="form-input" id="city_sector_id" name="city_sector_id">
        <option value="-1">--Sector</option>
    </select>
</div>

<script>
    $(document).ready(function(){
        $('#city_id').on('change', function(){
            var route = "{{ route('sectors.list', 69) }}";
            var city_id = $(this).val();
            route = route.replace(69, city_id);
            console.log( route );
            $.get(
                route ,
                function(response){

                    $('#city_sector_id').find('option')
                                    .remove()
                                    .end()
                                    .append('<option value="-1">--Sector</option>')
                                    .val(-1);

                    for (const key in response) {
                        if (Object.hasOwnProperty.call(response, key)) {
                            const element = response[key].city_sector_name_fr;
                            $('#city_sector_id').find('option')
                                    .end()
                                    .append('<option value="'+response[key].id+'">'+response[key].city_sector_name_fr.trim()+'</option>');
                            
                        }
                    }
                    clearInterval(timer);
                    console.log('clear');
                }
            )
        });

        let timer = setInterval(() => {
            $('#city_id').trigger('change');
        }, 1000);

    });
</script>