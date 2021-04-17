<div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border shadow-sm">
    <div class="flex items-center justify-between bg-gray-50">
        @include('components.ui.title', ['title'=>'Upload Image'])
        <div class="new_image btn p-2 mr-2 text-green-400 cursor-pointer hover:text-green-600"><i class="fas fa-cloud-upload-alt"></i> Upload</div>
        <div class="reload hidden">reload</div>
        <input name="file" id="poster" type="file" class="hidden">
    </div>
    
    <hr>

    <div class="bg-gray-300">
        <div class="w-auto h-60 relative flex images overflow-x-auto px-2"></div>    
    </div>


</div>

<script>


$(document).ready(function(){

    $('.destroy_image').on('click', function(e){
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
                
            }
        }
        );
    });

    $('.new_image').on('click', function(){
        $('#poster').trigger('click');
    });

    $('#poster').on('change', function(){
        var data = new FormData();
        jQuery.each(jQuery('#poster')[0].files, function(i, file) {
            data.append('file', file);
        });
        data.append( '_token', $('meta[name="csrf-token"]').attr('content') );
        data.append( 'folder', "{{$folder}}" );

        jQuery.ajax({
            url: "{{ route('file.upload') }}",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(data){
                console.log(data.response);
                $('.reload').trigger('click');
            }
        });
    });

    $('.reload').on('click', function(){

        var loader = `
            <div class="loader absolute bottom-0 top-0 left-0 right-0 bg-red-100 bg-opacity-40">
                <div class="w-24 mx-auto mt-24 text-center">
                    <i class="fas fa-sync fa-spin"></i>
                </div>
            </div>
        `;
        $('.images').html(loader);

        $.ajax({
            url:"{{ route('file.read') }}",
            data:{ 
                _token:     $('meta[name="csrf-token"]').attr('content'),
                folder:     "{{$folder}}"
            },
            method: 'POST',
            success: function(response){
                for (let i = 0; i < response.length; i++) {
                    if(i === 0){
                        $('.images').html('<img class="border-2 bg-contain bg-center max-h-60 my-2 mr-4" src="' + response[i] + '">');
                    }else{
                        $('.images').append('<img class="border-2 bg-contain bg-center max-h-60 my-2 mr-4" src="' + response[i] + '">');
                    }
                }
                if(response.length==0){
                    $('.loader').remove();
                }
            }
        });
    });

    $('.reload').trigger('click');

});

</script>