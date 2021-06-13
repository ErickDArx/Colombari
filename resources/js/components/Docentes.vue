<template>
    <div>
        <form
            @submit.prevent="store"
            class="dark:bg-gray-800 sm:grid grid-cols-2 justify-between"
        >
            <div
                class="bg-indigo-200 relative flex justify-center items-center"
            >
                <div
                    class="absolute top-0 right-0 left-0 px-4 py-2 sm:px-8 sm:py-4 z-10 bg-indigo-900"
                >
                    <h1
                        class="text-lg font-medium subpixel-antialiased tracking-normal text-gray-50"
                    >
                        Ingreso de Personal autorizado al sistema.
                    </h1>
                </div>
                <div class="bg-indigo-900 absolute inset-0 opacity-50"></div>
                <img
                    class="sm:h-full sm:w-full sm:object-cover"
                    src="http://1.bp.blogspot.com/-8EQn0ho5be0/VUv4fdM4l0I/AAAAAAAAAJQ/1h5i7hRX6V4/s1600/FB_IMG_1431018149564.jpg"
                    alt=""
                />

                <div
                    class="w-3/12 sm:hidden absolute flex justify-center items-center -bottom-10 rounded-full"
                >
                    <img
                        src="http://4.bp.blogspot.com/-uZEWmIEI6zU/Vl0QkUUYauI/AAAAAAAAASA/xzdapzwJp8Y/s1600/escudo.jpg"
                        alt="..."
                        class="shadow rounded-full max-w-full h-auto align-middle border-none"
                    />
                </div>
            </div>

            <div
                class="grid grid-cols-1 grid-flow-row text-base sm:text-base text-gray-900 dark:text-gray-100 gap-2 px-10 py-10"
            >
                <h2
                    class="text-gray-400 text-2xl font-medium flex gap-2 justify-start items-center"
                >
                    <span>
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
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                            />
                        </svg>
                    </span>
                    Formulario
                </h2>
                <label for=""
                    >Nombre<span class="text-red-500 ml-1">*</span></label
                >
                <input
                    v-model="form.name"
                    type="text"
                    class="border-2 border-gray-500 py-1 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 text-gray-600"
                />

                <label for=""
                    >Apellido<span class="text-red-500 ml-1">*</span></label
                >
                <input
                    v-model="form.lastname"
                    type="text"
                    class="border-2 border-gray-500 py-1 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 text-gray-600"
                />

                <label for=""
                    >Cargo<span class="text-red-500 ml-1">*</span></label
                >
                <select
                    v-model="form.position"
                    name=""
                    id=""
                    class="border-2 border-gray-500 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 text-gray-600"
                >
                    <option>Educadora</option>
                </select>

                <label for=""
                    >Grupo a cargo<span class="text-red-500 ml-1"
                        >*</span
                    ></label
                >
                <input
                    v-model="form.group"
                    type=""
                    class="border-2 border-gray-500 py-1 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400 text-gray-600"
                />

                <button
                    type="submit"
                    class=" border-2 border-green-500 py-1 mt-2 rounded-md flex items-center justify-center text-base sm:text-lg font-medium dark:text-gray-50 hover:bg-green-500 focus:outline-none hover:text-gray-900"
                >
                    Aceptar
                </button>
                <button
                    class="hover:underline focus:outline-none flex justify-center items-center gap-2 mt-2"
                >
                    <span
                        ><svg
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
                                d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"
                            /></svg
                    ></span>
                    Regresar atras
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            docentes: [],
            form: {
                name: "",
                lastname: "",
                position: "",
                group: ""
            }
        };
    },
    created() {
        axios.get("/api/teachers").then(res => {
            this.docentes = res.data;
        });
    },
    methods: {
        store() {
            axios.post("/api/teachers/store", this.form).then(() => {});
        }
    }
};
</script>
