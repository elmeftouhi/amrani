<tr class="border-b border-gray-200 bg-white hover:bg-gray-100">
    <td class="py-3 px-6 text-left">
        <div class="flex items-center">
            <span class="font-medium">{{$client->client_code}}</span>
        </div>
    </td>
    <td class="py-3 px-6 text-left">
        <div class="flex items-center">
            <span class="font-medium">{{$client->client_name}}</span>
        </div>
    </td>
    <td class="py-3 px-6 text-left">
        <div class="flex items-center">
            {{$client->category->client_category}}
        </div>
    </td>
    <td class="py-3 px-6 text-left">
        <div class="flex items-center">
            {{$client->client_telephone}}
        </div>
    </td>
    <td class="py-3 px-6 text-left">
        <div class="flex items-center">
            {{$client->client_city}}
        </div>
    </td>
    <td class="py-3 px-6 text-center">
        @if ($client->client_status_id == 1)
            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{$client->status->client_status}}</span>
        @endif

        @if ($client->client_status_id == 2)
            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{$client->status->client_status}}</span>
        @endif

        @if ($client->client_status_id == 3)
            <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">{{$client->status->client_status}}</span>
        @endif

    </td>
    <td class="py-3 px-6 text-center">
        <div class="flex item-center justify-center">
            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                @include('amrani.pages.client.partials.btn-delete')
            </div>
            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                @include('amrani.pages.client.partials.btn-edit')
            </div>
        </div>
    </td>
</tr>