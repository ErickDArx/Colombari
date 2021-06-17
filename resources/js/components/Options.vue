<template>
    <div>
        <div
            v-click-outside="onClickOutside"
            class="flex items-center justify-center gap-1"
        >
            <button
                @click="active = true"
                class="dark:text-gray-300 text-indigo-400 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-indigo-400 transition duration-150 ease-in-out"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </button>
        </div>

        <div
            v-show="active"
            class="z-50 origin-top-right absolute right-8 top-20 w-48 rounded-md shadow-lg"
        >
            <div
                class="py-1 rounded-md dark:text-gray-300 dark:bg-gray-700 bg-white shadow-xs"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="user-menu"
            >
                <a
                    href="#"
                    class="flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                    role="menuitem"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-indigo-500 dark:text-indigo-300"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                        />
                    </svg>
                    <p class="ml-2 dark:text-gray-300">Mi Perfíl</p>
                </a>

                <a
                    href=""
                    @click.prevent="logout"
                    class="flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                    role="menuitem"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 dark:text-indigo-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                        />
                    </svg>
                    <p class="ml-2 dark:text-gray-300">Cerrar Sesíon</p>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        (user = null), (mode = true), (active = false);
    },
    methods: {
        login() {
            axios.post("/api/user").then(() => {
                this.mode = false;
            });
        }
    }
};
</script>
