<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">

            <div class="flex items-center justify-center">
                <div class="flex flex-col justify-around">
                    <div class="space-y-6">

                        <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                            {{ config('app.name') }}
                        </h1>

                        <ul class="list-reset">
                            <li class="inline px-4">
                                <a href="https://tailwindcss.com"
                                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Tailwind
                                    CSS</a>
                            </li>
                            <li class="inline px-4">
                                <a href="https://vuejs.org/"
                                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Vue</a>
                            </li>
                            <li class="inline px-4">
                                <a href="https://laravel.com"
                                    class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Laravel</a>
                            </li>
                        </ul>
                        <example-component></example-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>