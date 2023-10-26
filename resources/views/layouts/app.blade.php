<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-cursive bg-gray-100">
    <div class="container mx-auto mt-5">
        <header class="w-full p-4">
            <div class="text-center text-4xl font-bold">MONARIKSA</div>
            <div class="text-sm text-center text-gray-500">Version 1.0</div>
        </header>
        <x-navigation-menu />
        {{ $slot }}
        <footer>
            <div class="mt-16 text-gray-600">
                <div class="">
                    <div class="flex justify-center">
                        Seksi Pemeriksaan, Penilaian dan Penagihan
                    </div>
                    <div class="flex justify-center font-bold text-2xl">
                        KPP Penanaman Modal Asing Tiga
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
