<template>
    <nav
        class="transition duration-500 ease-in-out shadow-xl container mx-auto px-10 dark:bg-gray-900 bg-gray-100 flex items-center justify-between flex-wrap bg-teal-500 p-6"
    >
        <div class="items-center flex-shrink-0 dark:text-white mr-6">
            <Slide noOverlay v-if="user">
                <a id="home" href="#">
                    <span>Home</span>
                </a>
            </Slide>
            <div class="space-y-1">
                <a href="/">
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
            <div></div>
        </div>

        <div
            v-click-outside="onClickOutside"
            class="flex items-center justify-center gap-1"
        >
            <button
                type="button"
                v-if="user"
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

            <button
                id="switchTheme"
                class="focus:outline-none focus:ring-2 focus:border-indigo-400 transition duration-500 ease-in-out rounded-full h-10 w-10 flex items-center justify-center"
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

        <div
            v-show="active"
            class="origin-top-right absolute right-8 top-20 w-48 rounded-md shadow-lg"
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
    </nav>
</template>

<script>
import vClickOutside from "v-click-outside";
import { Slide } from "vue-burger-menu";
export default {
    data() {
        return {
            user: null,
            mode: false,
            active: false,
            opened: false,
            vcoConfig: {
                handler: this.handler,
                middleware: this.middleware,
                events: ["dblclick", "click"],
                // Note: The default value is true, but in case you want to activate / deactivate
                //       this directive dynamically use this attribute.
                isActive: true,
                // Note: The default value is true. See "Detecting Iframe Clicks" section
                //       to understand why this behaviour is behind a flag.
                detectIFrame: true
            }
        };
    },
    components: {
        Slide // Register your component
    },
    methods: {
        logout() {
            axios.post("/api/logout").then(() => {
                this.$router.push({ name: "Login" }, (this.mode = false));
            });
        },
        onClickOutside() {
            this.active = false;
        }
    },
    mounted() {
        axios.get("/api/user").then(res => {
            (this.user = res.data), (this.popupItem = this.$el);
        });
    },
    directives: {
        clickOutside: vClickOutside.directive
    }
};
</script>
