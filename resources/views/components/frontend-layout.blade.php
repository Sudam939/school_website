<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code IT School</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="/frontend/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- flex -> direction row --}}
    {{-- flex-col -> direction row --}}


    <header class="primary-bg py-2">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-2 md:space-y-0">
                <div class="flex items-center gap-2">
                    <p class="text-sm">{{ $school->address ?? 'Bijuli Office Line, Dharan' }}</p>
                    <a href="mailto:info@dmcdharan.com">{{ $school->email ?? 'info@dmcdharan.com' }}</a>
                </div>

                <div class="flex items-center gap-4  ">

                    <div class="space-x-2">
                        <a href="">F</a>
                        <a href="">Y</a>
                        <a href="">L</a>
                    </div>

                    <div class="h-6 w-0.5 bg-white"></div>

                    <div class="space-x-2">
                        <a href="{{ route('login') }}">Login</a>

                        <a href="#" class="bg-[#ffc107] px-3 py-1 rounded">Web email</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <x-frontend-navbar />

        {{ $slot }}
    </main>

    <footer>
        <x-frontend-footer />
    </footer>


</body>

</html>
