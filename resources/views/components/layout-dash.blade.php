<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans h-screen flex">

    <x-sidebar />

    <div class="flex-1 flex flex-col">
        
        <x-navbar />
        <x-header>{{ $title }}</x-header>

        <div class="flex-1 overflow-y-auto">
            {{ $slot }}
        </div>

    </div>

    @stack('scripts')

</body>
</html>