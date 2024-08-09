@extends('layouts.app')

@section('content')



@if (session('status'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('status') }}
    </div>
@endif

<h1 class="text-3xl font-bold mb-8">{{ $service->title }}</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($packs as $pack)
        <div class="bg-white p-4 rounded-lg shadow-lg overflow-hidden">
            <!-- Video Header -->
            <div class="relative">
                <video class="w-full h-56 object-cover" controls>
                    <source src="{{ asset('storage/' . $pack->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <!-- Card Content -->
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $pack->name }}</h2>
                <p class="text-gray-700 mb-4">{{ $pack->description }}</p>
                <ul class="mb-4">
                    @foreach ($pack->features as $feature)
                        <li class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M10 15l-3-3 1.41-1.41L10 12.17l5.59-5.59L17 8l-7 7z"/></svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <div class="text-center">
                    <!-- Modal Trigger Button -->
                    <button data-modal-toggle="modal-{{ $pack->id }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Order</button>
                </div>
            </div>
        </div>

<!-- Modal -->
<div id="modal-{{ $pack->id }}" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg w-full max-w-lg mx-4 p-6 relative">
        <button data-modal-toggle="modal-{{ $pack->id }}" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <h3 class="text-2xl font-bold mb-4">{{ $pack->name }}</h3>
        <p class="text-gray-600 mb-4">{{ $pack->description }}</p>
        <!-- Type of Pack Options -->
        <form id="orderForm-{{ $pack->id }}" action="{{ route('order.store') }}" method="POST" class="space-y-4">
       @csrf
       @foreach ($pack->typeServices as $typeService)
           <div class="flex items-center">
               <input type="radio" name="orderOption" id="option-{{ $typeService->id }}" value="{{ $typeService->id }}" class="h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
               <label for="option-{{ $typeService->id }}" class="ml-3 block text-sm font-medium text-gray-700">
                   {{ $typeService->duration }} days - {{ $typeService->price }} $
               </label>
           </div>
       @endforeach
       <div class="text-center mt-6">
           <button type="button" data-modal-toggle="modal-{{ $pack->id }}" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Close</button>
           <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Order</button>
       </div>
   </form>
    </div>
</div>
    @endforeach
</div>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-modal-toggle]').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-toggle');
            document.getElementById(modalId).classList.toggle('hidden');
        });
    });
});
</script>
@endsection