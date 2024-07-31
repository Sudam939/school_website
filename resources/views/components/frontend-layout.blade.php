<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code IT School</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/frontend/style.css">
</head>

<body>

    <header>

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
