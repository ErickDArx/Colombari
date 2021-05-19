<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acceso - EACC</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <div class="flex flex-col h-screen">

    <nav
      class="shadow-xl container mx-auto px-10 dark:bg-gray-900 bg-gray-100 flex items-center justify-between flex-wrap bg-teal-500 p-6">

      <div class="items-center flex-shrink-0 dark:text-white mr-6">
        <div class="space-y-1">
          <span class="block font-semibold text-base tracking-tight dark:text-gray-200">Gestión de
            estudiantes</span>
          <span class="block text-gray-500 font-weight-light text-sm tracking-tight">Augusto Colombari
            Chicoli</span>
        </div>
      </div>

      <div class="flex">

        <button id="switchTheme"
          class="focus:outline-none focus:ring-2 transition duration-500 ease-in-out border-2 border-gray-800 dark:border-yellow-500 rounded-full h-10 w-10 flex items-center justify-center">

          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7 transition duration-500 ease-in-out text-transparent dark:text-yellow-500" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7 transition duration-500 ease-in-out absolute dark:text-transparent" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>

        </button>
      </div>

    </nav>

    <div class="">

      <div class="img">
        <img class="" src="{{ asset('img/pexels-karolina-grabowska-4977479.jpg') }}" alt="">
      </div>

      <div class="px-10  grid grid-cols-2 gap-1 right-0 absolute bg-gray-100 py-5">
        
        <div class=" border-gray-500 flex items-center">
          <h2 class="font-bold">Inicio de sesión</h2>
        </div>
        <div class="ml-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z"
              clip-rule="evenodd" />
          </svg>
        </div>


        <div class="col-span-2 flex">

          <div class="flex items-center mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="rounded-sm bg-gray-500 text-white h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          <label class="uppercase md:text-sm text-xs text-gray-600 text-light font-semibold">Nombre de usuario</label>
          </div>
        </div>

        <div class="col-span-2">
            <input class="py-2 px-3 rounded-sm border-2 border-gray-500 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent" type="text" placeholder="" />
        </div>

        <div class="col-span-2 mt-2.5">
          <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
            </svg>
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Contraseña</label>

          </div>
        </div>

        <div class="col-span-2">
            <input class="py-2 px-3 rounded-sm border-2 border-gray-500 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent" type="text" placeholder="" />
        </div>

        <div class="col-span-2">
          <input type="checkbox" class="appearance-none checked:bg-blue-600 checked:border-transparent ...">
        </div>
      </div>

      

    </div>
    {{-- <main class="">
    <div class="dark:bg-gray-400 max-w-7xl mx-auto grid grid-cols-2 gap-10">
      <img src="{{ asset('img/pexels-karolina-grabowska-4977479.jpg') }}" alt="">
    <form action="" class="container mx-auto px-5 py-4">
      <div class="text-left">
        <h2 class="font-bold">Inicio de sesión</h2>
      </div>

      <div class="py-5">
        <label for="" class="font-light">Nombre de usuario</label>
        <input type="text" class="shadow">

        <label for="" class="font-light">Contraseña</label>
        <input type="text" class="shadow">
      </div>

    </form>
  </div>
  </main> --}}

  {{-- <footer class="dark:text-white dark:bg-gray-700 footer-1 bg-gray-100 ">
    <div class="container mx-auto px-5">
      <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
        <div class=" sm:w-full px-4 md:w-1/6">
          <strong>Escuela Augusto Colombari Chicoli</strong>
        </div>
      </div>
    </div>
    <div class="dark:text-gray-400 container mx-auto px-5 dark:bg-gray-900">
      <p>Creado por Erick Matamoros</p>
    </div>
  </footer> --}}

  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/modo.js') }}"></script>
</body>

</html>