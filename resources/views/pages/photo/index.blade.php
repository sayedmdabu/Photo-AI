<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Photo') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                    <x-link href="{{ route('photoAdd') }}" class="m-4 px-2 py-1 rounded">Add Photo</x-link>
                    {{-- <x-jet-button onclick="downloadBulkentryFormat()">
                        {{ __('Download') }}
                    </x-jet-button> --}}
                    {{-- <x-link  class="m-4 px-2 py-1 rounded"></x-link> --}}
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    User Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Serial No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Photo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($photos as $photo_serial)
                                @foreach ($photo_serial as $key=>$photo)
                                    <?php 
                                        $total_serial=count($photo_serial);                                   
                                        $total+=$key;
                                    ?>                                                                               
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ $photo->user_id }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ $photo->serial_number }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <img class="" src="{{url('/').'/photo_ai/user_'.$photo->user_id.'/serial_'.$photo->serial_number.'/'.$photo->photo}}" height="300" width="100" alt="photo">
                                        
                                        </td>
                                        @if ($total==0)
                                            <td class="px-6 py-4" rowspan="{{$total_serial}}">
                                                <x-jet-button onclick="downloadBulkentryFormat('{{$photo->serial_number}}')">
                                                    {{ __('Download') }}
                                                </x-jet-button>
                                            </td>                               
                                        @endif
                                    </tr>
                                @endforeach
                                <?php 
                                    $total_serial=0;                                   
                                    $total=0;
                                ?>   
                            @endforeach
                        </tbody>
                        {{-- @forelse ($tasks as $task)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $task->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('tasks.edit', $task) }}"
                                       class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td colspan="2"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ __('No tasks found') }}
                                </td>
                            </tr>
                        @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function downloadBulkentryFormat(serial_no){
            var url = "{{route('photoDownload', '')}}"+"/"+serial_no;
            window.open(url,"_blank");
        }
    </script>
</x-app-layout>