<div class="vertical_menu flex flex-col justify-between min-w-48 w-48 h-full bg-gradient-to-r from-gray-100 to-gray-200 border-r border-gray-300 pb-4 overflow-y-auto" style="min-width: 185px">
    <div class="">
        <div class="flex items-center border-b border-gray-300 px-4 h-14 mb-2">
            <!-- http://adminmart.com/src/assets/images/logo-icon.png -->
            <img class="w-8 mr-2" src="{{Storage::url("images/logo.png")}}" alt="">
            <div class="text-gray-100 text-lg text-gray-800">
                <span class="font-bold text-sm">Agence</span> 
                <span class="text-sm">Amrani</span>
            </div>
        </div>
        <ul>
            <li class="">
                <a href="{{ route('dashboard.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if(Route::currentRouteNamed( 'dashboard.index' )) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                
                    <div class="w-6"><i class="fas fa-columns"></i> </div>
                    Dashboard
                </a>
                <a href="{{ route('client.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if( Str::contains(Route::currentRouteName(), 'client') ) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                
                    <div class="w-6"><i class="fas fa-user-tie"></i> </div>
                     Clients
                     <small class="ml-2 text-xs font-bold total_clients">
                         <i class="fas fa-sync fa-spin"></i>
                    </small>
                </a>
                <a href="{{ route('intermediaire.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if( Str::contains(Route::currentRouteName(), 'intermediaire') ) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                
                    <div class="w-6"><i class="fas fa-user-friends"></i> </div>
                    Intermédiaires 
                    <small class="ml-2 text-xs font-bold total_intermediaires">
                        <i class="fas fa-sync fa-spin"></i>
                   </small>
               </a>
               <a href="{{ route('appartement.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if( Str::contains(Route::currentRouteName(), 'appartement') ) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                 
                    <div class="w-6"><i class="far fa-building"></i> </div>
                     Appartements 
                     <small class="ml-2 text-xs font-bold total_appartements">
                        <i class="fas fa-sync fa-spin"></i>
                   </small>
                </a>
                <a href="{{ route('dashboard.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if(Route::currentRouteNamed( 'terrain.index' )) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                
                    <div class="w-6"><i class="fas fa-map-marked"></i> </div>
                     Terrains <small class="ml-2 text-xs font-bold">(24)</small>
                </a>
                <a href="{{ route('dashboard.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if(Route::currentRouteNamed( 'maison.index' )) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                
                    <div class="w-6"><i class="fas fa-home"></i> </div>
                     Maison <small class="ml-2 text-xs font-bold">(12)</small>
                </a>
                <a href="{{ route('dashboard.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if(Route::currentRouteNamed( 'commercial.index' )) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                 
                    <div class="w-6"><i class="fas fa-warehouse"></i> </div>
                     Local Commercial <small class="ml-2 text-xs font-bold">(5)</small>
                </a>
                <a href="{{ route('dashboard.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if(Route::currentRouteNamed( 'villa.index' )) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                                
                    <div class="w-6"><i class="fas fa-home"></i> </div>
                     Villas <small class="ml-2 text-xs font-bold">(2)</small>
                </a>
                <a href="{{ route('dashboard.index') }}" 
                    class="flex items-center block py-2 px-3 text-sm 
                    @if(Route::currentRouteNamed( 'ferme.index' )) 
                        bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                    @else 
                        hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
                >                               
                    <div class="w-6"><i class="fas fa-horse-head"></i> </div>
                     Fermes <small class="ml-2 text-xs font-bold">(1)</small>
                </a>
            </li>
        </ul>
    </div>
    <ul>
        <li>
            <a href="{{ route('user.index') }}" 
                class="flex items-center block py-2 px-3 text-sm 
                @if(Route::currentRouteNamed( 'user.index' )) 
                    bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                @else 
                    hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
            > 
                <div class="w-6"><i class="fas fa-users"></i> </div>
                Utilisateurs
           </a> 
           <a href="{{ route('params') }}" 
                class="flex items-center block py-2 px-3 text-sm 
                @if(Route::currentRouteNamed( 'params' )) 
                    bg-gray-600 rounded-r-full text-gray-100 pointer-events-none
                @else 
                    hover:bg-gray-300 cursor-pointer hover:text-gray-800 text-gray-600 @endif "
            > 
                <div class="w-6"><i class="fas fa-wrench"></i> </div>
                Paramêtres
       </a> 
        </li>
    </ul>
</div>
<script>
    $(document).ready(function(){
        $.get(
            "{{route('dashboard.totals')}}",
            function(r){
                $('.total_clients').html('(' + r.total_clients + ')');
                $('.total_intermediaires').html('(' + r.total_intermediaires + ')');
                $('.total_appartements').html('(' + r.total_appartements + ')');
            }
        );
    });
</script>