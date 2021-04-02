@extends('amrani.layout.app')
@section('title') {{ __('Ajouter un Client') }} @endsection

@section('content')
    <div class="w-full h-full bg-white">
        <div class="flex gap-4 items-center h-12 px-4 text-gray-600">
            <a href="" class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-blue-600"><i class="fas fa-arrow-left"></i></a>
            <h1 class="font-bold text-xl">{{ __('Ajouter un Client') }} </h1>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden bg-gray-100">
                <div class="w-full lg:w-4/6 bg-white my-5 rounded border">
                    <form action="">
                        <label for="client_name">Nom Client</label>
                        <input class="form-input" type="text" id="client_name" name="client_name" required>

                        <!-- You can actually customize padding on a select element now: -->
<select class="px-4 py-3 rounded-full">
    <!-- ... -->
  </select>
  
  <!-- Or change a checkbox color using text color utilities: -->
  <input type="checkbox" class="rounded text-pink-500" />
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection