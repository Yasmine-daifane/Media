@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-3xl font-bold mb-6">Our Services</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($services as $service)
                <div class="bg-white p-4 rounded shadow-md">
                    <h2 class="text-xl font-semibold mb-2">{{ $service->title }}</h2>
                    <p class="mb-4">{{ $service->description }}</p>
                    <a href="{{ route('services.packs', $service->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        View Packs
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
