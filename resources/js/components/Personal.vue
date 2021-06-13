<template>
    <div class="container mx-auto mt-4 mb-4 px-8 grid grid-1 md:grid-cols-2">
        <div class="bg-blue-500 flex rounded-md items-center m-2 p-2 shadow-lg">
            <div
                class="relative container mx-auto px-2 py-2 text-base text-gray-200 gap-1 grid grid-cols-1"
            >
                <div class="items-center flex gap-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12"
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
                    <div>
                        <p class="font-semibold">{{ user.name }}</p>
                        <p class="font-light text-sm">Educador(a)</p>
                    </div>
                </div>

                <div class="absolute right-0">
                    <button
                        class="focus:outline-none hover:bg-blue-400 rounded-full px-1 py-1"
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
                                d="M4 6h16M4 12h16m-7 6h7"
                            />
                        </svg>
                    </button>
                </div>

                <div class="z-10">
                    <button
                        @click="Perfil"
                        class="text-sm bg-blue-900 px-10 relative py-2 rounded-md mt-2 focus:outline-none hover:bg-blue-800"
                    >
                        Ver mi perfil
                    </button>
                </div>
                <div
                    class="absolute right-0 bottom-0 bg-no-repeat bg-right-bottom opacity-30"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12"
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
                </div>
            </div>
        </div>

        <div
            class="bg-green-600 flex rounded-md items-center m-2 p-2 shadow-lg"
        >
            <div
                class="relative container mx-auto px-2 py-2 text-base text-gray-200 gap-1 grid grid-cols-1"
            >
                <div class="items-center flex gap-2">
                    <div>
                        <h3 class="text-base font-medium">Área de secciones</h3>
                        <p class="text-sm">Augusto Colombari Chicoli</p>
                    </div>
                </div>

                <div class="z-10">
                    <button
                        class="bg-green-900 px-10 relative py-2 rounded-md mt-2 focus:outline-none hover:bg-green-800"
                    >
                        Revisar
                    </button>
                </div>
                <div
                    class="absolute right-0 bottom-0 bg-no-repeat bg-right-bottom opacity-30"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                        />
                    </svg>
                </div>
            </div>
        </div>

        <div
            class="bg-purple-600 flex rounded-md items-center m-2 p-2 shadow-lg"
        >
            <div
                class="relative container mx-auto px-2 py-2 text-base text-gray-200 gap-1 grid grid-cols-1"
            >
                <div class="items-center flex gap-2">
                    <div>
                        <h3 class="text-base font-medium">Área de docentes</h3>
                        <p class="text-sm">Augusto Colombari Chicoli</p>
                    </div>
                </div>

                <div class="z-10">
                    <button
                        class="bg-purple-900 px-10 relative py-2 rounded-md mt-2 focus:outline-none hover:bg-purple-800"
                    >
                        Ingresar
                    </button>
                </div>
                <div
                    class="absolute right-0 bottom-0 bg-no-repeat bg-right-bottom opacity-30"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                        />
                    </svg>
                </div>
            </div>
        </div>

        <div
            class="bg-indigo-600 flex rounded-md items-center m-2 p-2 shadow-lg"
        >
            <div
                class="relative container mx-auto px-2 py-2 text-base text-gray-200 gap-1 grid grid-cols-1"
            >
                <div class="items-center flex gap-2">
                    <div>
                        <h3 class="text-base font-medium">
                            Área de estadistica de estudiantes
                        </h3>
                        <p class="text-sm">Augusto Colombari Chicoli</p>
                    </div>
                </div>

                <div class="z-10">
                    <button
                        class="bg-indigo-900 px-10 relative py-2 rounded-md mt-2 focus:outline-none hover:bg-indigo-800"
                    >
                        Ver información
                    </button>
                </div>
                <div
                    class="absolute right-0 bottom-0 bg-no-repeat bg-right-bottom opacity-30"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
                        />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null
        };
    },
    methods: {
        logout() {
            axios.post("/api/logout").then(() => {
                this.$router.push({ name: "Login" }, (this.mode = false));
            });
        },
        Perfil() {
            this.$router.push("Perfil");
        }
    },
    mounted() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
        }).catch(error=> {
            
        });
    }
};
</script>
