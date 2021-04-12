<div class="w-full lg:w-4/6 mx-auto bg-white my-5 rounded border shadow-sm">
    <div class="flex items-center justify-between bg-gray-50">
        @include('components.ui.title', ['title'=>'Upload Image'])
        <div class="new_image btn p-2 mr-2 text-green-400 cursor-pointer hover:text-green-600"><i class="fas fa-cloud-upload-alt"></i> Upload</div>
    </div>
    
    <hr>

    <div class="bg-gray-300">
        <div class="w-full h-60 relative flex justify-center">
            <img class="bg-contain bg-center max-h-60 my-2" src="https://statics.ganga.ma/ganga/annonces/1b82740af138593fe301ffe5d96650bf/1615208039.jpeg">
            <div class="destroy_image absolute top-0 right-0 m-1 text-red-400 p-3 hover:text-red-600 cursor-pointer">
                <i class="fas fa-times"></i>
            </div>
        </div>

        <div class="w-full h-16 flex justify-center">
            <img class="bg-contain bg-center max-h-16 my-2 border-gray-50 border-4 mr-1 rounded" src="https://statics.ganga.ma/ganga/annonces/779230e26fe7df65da3c33fe224671b2/1615727460(default).jpg">
            <img class="bg-contain bg-center max-h-16 my-2 mr-1 rounded" src="https://statics.ganga.ma/ganga/annonces/779230e26fe7df65da3c33fe224671b2/1615727460(default).jpg">
            <img class="bg-contain bg-center max-h-16 my-2 mr-1 rounded" src="https://statics.ganga.ma/ganga/annonces/779230e26fe7df65da3c33fe224671b2/1615727460(default).jpg">
            <img class="bg-contain bg-center max-h-16 my-2 mr-1 rounded" src="https://statics.ganga.ma/ganga/annonces/779230e26fe7df65da3c33fe224671b2/1615727460(default).jpg">
        
        </div>        
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
});

</script>