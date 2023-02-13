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
                    <x-jet-button onclick="downloadBulkentryFormat1('{{$serial_number}}')">
                        {{ __('Download') }}
                    </x-jet-button>
                    {{-- <x-link  class="m-4 px-2 py-1 rounded"></x-link> --}}

                    <div class="row">
                        @foreach ($photos as $photo)        
                            <div  style="float:left; width:20%; text-align:center; border:1px solid #181717; margin:4px; border-radius:5px;">
                               <div class="card">                                
                                <div class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    <img src="{{url('/').'/photo_ai/user_'.$photo->user_id.'/serial_'.$photo->serial_number.'/'.$photo->photo}}" height="200" width="100" alt="">
                                </div>
                                <div class="card-footer" style="padding:5px;">
                                    <x-jet-button onclick="downloadBulkentryFormat('{{$photo->photo}}')">
                                        {{ __('Download') }}
                                    </x-jet-button>
                                </div>
                               </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function downloadBulkentryFormat(photo){
            var url = "{{route('photoSingleDownload', '')}}"+"/"+photo;
            window.open(url,"_blank");
        }

        function downloadBulkentryFormat1(photo){
            var url = "{{route('photoDownload', '')}}"+"/"+serial_number;
            window.open(url,"_blank");
        }
    </script>
</x-app-layout>