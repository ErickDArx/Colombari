<template>
    <nav
        class="transition duration-500 ease-in-out shadow-xl container mx-auto px-10 dark:bg-gray-900 bg-gray-100 flex items-center justify-between flex-wrap bg-teal-500 p-6"
    >
        <div class="items-center flex-shrink-0 dark:text-white mr-6">
            <div class="space-y-1">
                <a href="#">
                    <span
                        class="block font-semibold text-base tracking-tight dark:text-gray-200"
                        >Gestión de estudiantes</span
                    >
                    <span
                        class="block text-gray-500 font-weight-light text-sm tracking-tight"
                        >Augusto Colombari Chicoli</span
                    >
                </a>
            </div>
        </div>

        <div class="flex">
            <button
                id="switchTheme"
                class="focus:outline-none focus:ring-2 focus:border-indigo-400 transition duration-500 ease-in-out border-2 border-indigo-500 dark:border-yellow-500 rounded-full h-10 w-10 flex items-center justify-center"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7 transition duration-500 ease-in-out text-transparent dark:text-yellow-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                    />
                </svg>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-7 w-7 transition duration-500 ease-in-out absolute text-indigo-500 dark:text-transparent"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                    />
                </svg>
            </button>
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>