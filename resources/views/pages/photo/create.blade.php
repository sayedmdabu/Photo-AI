@extends('layouts.app')

@section('content')
<h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #FFF;">
    {{ __('Photo Add') }}
</h2>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('photoStore') }}" enctype="multipart/form-data">
                    @csrf 
                    <div>
                        <x-jet-label for="name" value="{{ __('Photo') }}" />
                        <x-jet-input id="photo" class="block mt-1 w-full" type="file" name="photo[]" multiple required autofocus autocomplete="name" />
                    </div> 
                    <div class="flex mt-4">
                        <x-jet-button>
                            {{ __('Save Task') }}
                        </x-jet-button>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection