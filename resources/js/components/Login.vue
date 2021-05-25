<template>
    <div>
        <div
            class="transition delay-150 ease-in-out items-center py-10 grid grid-row-3 justify-center grid-flow-col gap-10"
        >
            <div
                class="dark:bg-gray-900 dark:text-gray-100 bg-gray-100 grid grid-cols-2 px-10 py-5"
            >
                <div class="items-center col-span-2">
                    <h2
                        class="font-bold text-xl border-l-4 px-2 border-indigo-600"
                    >
                        Inicio de sesión
                    </h2>
                </div>

                <div class="col-span-2 flex">
                    <div class="flex items-center mt-5">
                        <label
                            class="uppercase md:text-sm text-xs dark:text-white text-gray-500 text-light font-semibold"
                            >Nombre de usuario</label
                        >
                    </div>
                </div>

                <div class="col-span-2 mt-2">
                    <div
                        class="relative text-gray-400 focus-within:text-gray-600"
                    >
                        <div
                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
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
                        <input
                            name="username"
                            type="text"
                            v-model="form.username"
                            class="py-2.5 bg-white placeholder-gray-400 text-gray-900 rounded-sm shadow-sm appearance-none w-full block pl-12 focus:outline-none"
                            placeholder=""
                        />
                    </div>
                </div>

                <div class="col-span-2 mt-2.5">
                    <div class="flex">
                        <label
                            class="uppercase md:text-sm text-xs dark:text-white text-gray-500 text-light font-semibold"
                            >Contraseña</label
                        >
                    </div>
                </div>

                <div class="col-span-2 mt-2">
                    <div
                        class="relative text-gray-400 focus-within:text-gray-600"
                    >
                        <div
                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                        >
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
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"
                                />
                            </svg>
                        </div>
                        <input
                            name="password"
                            type="password"
                            v-model="form.password"
                            class="py-2.5 bg-white placeholder-gray-400 text-gray-900 rounded-sm shadow-sm appearance-none w-full block pl-12 focus:outline-none"
                            placeholder=""
                        />
                    </div>
                </div>

                <div class="col-span-2 mt-2.5">
                    <div class="mx-auto">
                        <label class="">
                            <div class="flex items-center">
                                <div>
                                    <input
                                        type="checkbox"
                                        name="remember"
                                        class="appearance-none form-check-inline
                                        focus:ring-2 focus:border-indigo-400
                                        border-indigo-400
                                        text-indigo-500checked:bg-indigo-400"
                                    />
                                </div>
                                <div
                                    class="label-checked:bg-red-600 text-sm ml-2.5"
                                >
                                    Mantener activa mi sesión
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <button
                    @click.prevent="login"
                    type="submit"
                    class="text-sm mt-2 col-span-2 block py-2 text-white rounded-sm bg-indigo-500 hover:bg-indigo-700 focus:outline-none"
                >
                    Iniciar sesión
                </button>

                <button
                    class="transition delay-100 ease-in-out hover:text-indigo-100 text-sm mt-2.5 col-span-2 block py-2 dark:text-indigo-100 text-indigo-900 rounded-sm border-blue-500 hover:bg-indigo-700 focus:outline-none"
                >
                    ¿Olvidaste la contraseña?
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                username: "",
                password: ""
            },
            errors: []
        };
    },
    methods: {
        login() {
            axios
                .post("/api/login", this.form)
                .then(() => {
                    this.$router.push({ name: "Home" });
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                });
        }
    }
};
</script>
