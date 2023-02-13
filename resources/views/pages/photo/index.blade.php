@extends('layouts.app')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
    <x-link href="{{ route('photoAdd') }}" class="m-4 px-2 py-1 rounded">Add Photo</x-link>
    {{-- <x-jet-button onclick="downloadBulkentryFormat()">
        {{ __('Download') }}
    </x-jet-button> --}}
    {{-- <x-link  class="m-4 px-2 py-1 rounded"></x-link> --}}

    <div class="row">
        @foreach ($photos as $photo)                            

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                    <i class="mb-3 bx bx-md bx-file"></i>
                    <h5>Task {{$photo->serial_number}}</h5>
                    </button>
                    <a href="{{route('photoView',$photo->serial_number)}}" class="m-4 px-2 py-1 rounded">                                    
                        <div class="card">
                            <div class="card-body">
                                Show
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    function downloadBulkentryFormat(serial_no){
        var url = "{{route('photoDownload', '')}}"+"/"+serial_no;
        window.open(url,"_blank");
    }
</script>
@endsection