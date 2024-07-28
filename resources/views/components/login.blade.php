<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Job Portal' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Job Portal' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100">
    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg w-full h-full">
            <!-- Left Section with Logo and Content -->
            <div class="w-full md:w-1/2 p-8 bg-blue-500 flex flex-col justify-center items-center text-center">
                <img src="{{ asset('images/jobvector.png') }}" alt="Website Logo" class="h-40 mb-4">
                <h1 class="text-4xl font-bold text-white">Welcome to Job Junction</h1>
                <p class="mt-4 text-white">Find your dream job or the perfect candidate with us.</p>
                <!-- <p class="mt-4 text-white">Perfect Jobs For Perfect Candidates.</p> -->
            </div>
            <!-- Right Section with Slot Content -->
            <div class="w-full md:w-1/2 p-8 flex items-center justify-center">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>

