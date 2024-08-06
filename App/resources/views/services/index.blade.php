<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- Include Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto px-4 py-6">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-3xl font-bold mb-6">Our Services</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="bg-white p-4 rounded shadow-md">
                    <h2 class="text-xl font-semibold">{{ $service->title }}</h2>
                    <p class="mt-2">{{ $service->description }}</p>
                    <!-- Add more service details if needed -->
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
