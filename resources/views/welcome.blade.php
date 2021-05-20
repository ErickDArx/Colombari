<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acceso - EACC</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="portada transition delay-1000 ease-in-out">
  <div class="flex flex-col h-screen justify-between">

    <nav
      class="transition duration-500 ease-in-out shadow-xl container mx-auto px-10 dark:bg-gray-900 bg-gray-100 flex items-center justify-between flex-wrap bg-teal-500 p-6">

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
          class="focus:outline-none focus:ring-2 focus:border-indigo-400 transition duration-500 ease-in-out border-2 border-indigo-500 dark:border-yellow-500 rounded-full h-10 w-10 flex items-center justify-center">

          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7 transition duration-500 ease-in-out text-transparent dark:text-yellow-500" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-7 w-7 transition duration-500 ease-in-out absolute text-indigo-500 dark:text-transparent" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>

        </button>
      </div>

    </nav>

    <div class="">
      <div
        class="transition delay-150 ease-in-out items-center py-10 grid grid-row-3 justify-center grid-flow-col gap-10">

        <div class="dark:bg-gray-900 dark:text-gray-100 bg-gray-100 grid grid-cols-2 px-10 py-5">

          <div class="items-center col-span-2">
            <h2 class="font-bold text-xl border-l-4 px-2 border-indigo-600">Inicio de sesión</h2>
          </div>

          <div class="col-span-2 flex">

            <div class="flex items-center mt-5">

              <label class="uppercase md:text-sm text-xs dark:text-white text-gray-500 text-light font-semibold">Nombre
                de
                usuario</label>
            </div>
          </div>

          <div class="col-span-2 mt-2">
            <div class="relative text-gray-400 focus-within:text-gray-600">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </div>
              <input id="email" type="text"
                class="py-2.5 bg-white placeholder-gray-400 text-gray-900 rounded-sm shadow-sm appearance-none w-full block pl-12 focus:outline-none"
                placeholder="">
            </div>
          </div>

          <div class="col-span-2 mt-2.5">
            <div class="flex">
              <label
                class="uppercase md:text-sm text-xs dark:text-white text-gray-500 text-light font-semibold">Contraseña</label>
            </div>
          </div>

          <div class="col-span-2 mt-2">
            <div class="relative text-gray-400 focus-within:text-gray-600">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
              </div>
              <input id="password" type="password"
                class="py-2.5 bg-white placeholder-gray-400 text-gray-900 rounded-sm shadow-sm appearance-none w-full block pl-12 focus:outline-none"
                placeholder="">
            </div>
          </div>

          <div class="col-span-2 mt-2.5">
            <div class="mx-auto">
              <label class="">
                <div class="flex items-center">
                  <div> <input type="checkbox" class="appearance-none form-check-inline focus:ring-2 focus:border-indigo-400 border-indigo-400 text-indigo-500 checked:bg-indigo-400" />
                  </div>
                  <div class="label-checked:bg-red-600 text-sm ml-2.5">Mantener activa mi sesión</div>
                </div>

              </label>
            </div>
          </div>

          <button
            class="text-sm mt-2 col-span-2 block py-2 text-white rounded-sm bg-indigo-500 hover:bg-blue-900 focus:outline-none">
            Iniciar sesión
          </button>

          <button
            class="transition delay-150 ease-in-out text-sm mt-2.5 col-span-2 block py-2 dark:text-white text-gray-700 hover:text-white rounded-sm border-blue-500 hover:bg-blue-700 focus:outline-none">
            Olvide la contraseña
          </button>
        </div>

      </div>
    </div>

    <footer class="dark:text-white dark:bg-gray-700 bg-gray-100 ">
      <div class="grid container justify-start mx-auto px-10 py-5">
        <div class="flow-root">
          <div class="justify-start">
            <p class=" text-sm">©{{ date('Y') }} - todos los derechos reservados</p>
          </div>
        </div>
      </div>

      <div
        class="items-center grid grid-cols-2 py-2.5 bg-gradient-to-r from-indigo-700 to-indigo-600 container mx-auto px-10">

        <div class="inline-grid grid-cols-1 justify-start">
          <p class="text-sm text-white">Creado por ErickDArx</p>
        </div>

        <div class="flex gap-5 grid-cols-4 justify-end text-xl">
          <div><i class="fab fa-github text-white"></i></div>
          <div><i class="fab fa-facebook-f text-white"></i></div>
          <div><i class="fab fa-twitter text-white"></i></div>
          <div><i class="fab fa-telegram-plane text-white"></i></div>

        </div>
      </div>


    </footer>

  </div>


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/modo.js') }}"></script>
</body>

</html>