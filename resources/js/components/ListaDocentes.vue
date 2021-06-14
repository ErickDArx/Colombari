<template>
    <main class="h-screen">
        <section class="dark:bg-gray-700 bg-gray-100">
            <div class="items-center justify-center">
                <div
                    class="opacity-95 inset-0 relative flex justify-start items-center"
                >
                    <div class="absolute bg-gray-900 inset-0 opacity-70"></div>
                    <img
                        class="object-cover h-20 w-screen"
                        src="https://mapa.administracionsolisrivera.cr/wp-content/uploads/2017/03/d2639e19-29af-4f6d-a089-1be209cb2f53-575x1024.jpg"
                        alt=""
                    />
                    <div
                        class="absolute bg-green-900 flex px-2 py-1 rounded-md left-4"
                    >
                        <h1 class="text-gray-100 text-lg font-semibold">
                            Lista de personal autorizado
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="sm:flex sm:justify-end">
            <div
                class="bg-green-800 text-gray-50 py-2 font-bold w-screen flex justify-center items-center"
            >
                <h2>Resultados</h2>
            </div>
            <div
                class="bg-green-500 px-10 py-6 flex justify-center items-center shadow-sm"
            >
                <input
                    class="rounded-l-md py-1 px-4 focus:outline-none focus:ring-1 text-gray-900 font-semibold focus:ring-green-900"
                    type="text"
                />
                <button
                    class="bg-gray-900 rounded-r-md py-1 px-2 text-gray-50 focus:outline-none focus:ring-1 focus:ring-gray-900"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        />
                    </svg>
                </button>
            </div>
        </section>

        <section class="py-4 px-8 sm:w-6/12">
            <div
                class="dark:bg-gray-800 bg-gray-200 rounded-t-md px-4 py-2 grid grid-cols-1 gap-4 dark:text-gray-50 font-light shadow-xl"
            >
                <div class="flex gap-2">
                    <p>Anabel</p>
                    <p>Matamoros</p>
                </div>

                <p>Nivel : Materno</p>
                <p>Grupo : M-1</p>
            </div>
            <div class="grid grid-cols-2">
                <button
                    class="gap-2 focus:outline-none focus: hover:bg-red-700 bg-red-600 flex justify-center items-center text-gray-50 py-2 rounded-bl-lg"
                >
                    Bloquear
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                        />
                    </svg>
                </button>
                <button
                    class="gap-2 focus:outline-none focus: hover:bg-indigo-700 bg-indigo-600 flex justify-center items-center text-gray-50 py-2 rounded-br-lg"
                >
                    Actualizar
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        />
                    </svg>
                </button>
            </div>
        </section>
    </main>
</template>

<script>
export default({
    data() {
        
    },
})
</script>
