<template>
    <main class="">
        <div class="flex flex-col justify-between relative">
            <loading v-if="isLoading"></loading>
            <div
                class="relative flex flex-col bg-gradient-to-r from-indigo-600 via-blue-700 to-blue-800 shadow-xl"
            >

                <div
                    class="absolute shadow-xl left-0 top-0 bg-gray-300 px-4 py-2 text-gray-800 flex items-center rounded-br-2xl"
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
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"
                        />
                    </svg>
                </div>
                <div class="flex px-10 py-12 sm:py-20">
                    <div class="relative flex">
                        <div
                            class="absolute bottom-0 top-0 left-0 right-0 w-20 sm:w-40"
                        >
                            <div class="relative">
                                <img
                                    class="rounded-full border-8 border-gray-100"
                                    src="http://assets.stickpng.com/images/585e4beacb11b227491c3399.png"
                                    alt=""
                                />
                                <div
                                    class="absolute animate-pulse px-2 py-2 bottom-0 right-1 sm:right-5 sm:bottom-2 border-2 border-green-400 bg-green-500 rounded-full"
                                ></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute right-0 bottom-0 flex sm:justify-start left-24 sm:left-44 px-10 py-2"
                    >
                        <h1
                            class="text-lg font-semibold text-gray-100 truncate"
                        >
                            {{ user.name }} {{ user.lastname }}
                        </h1>
                        <div class="py-2 absolute mt-9 flex gap-10">
                            <div>
                                <h2 class="text-sm font-normal text-gray-800">
                                    Educador(a)
                                </h2>
                            </div>
                            <div class="invisible sm:visible">
                                <p
                                    class="text-sm font-light flex items-center gap-2 text-gray-600 "
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                        />
                                    </svg>
                                    Editar información
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 px-10 py-6"></div>
            <div class="flex justify-center mt-2 px-10">
                <div class="text-sm py-2 text-gray-600">
                    <div class="flex gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
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
                        <p>Instituto: Augusto Colombari Chicoli</p>
                    </div>

                    <div class="flex gap-2">
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
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                            />
                        </svg>
                        <p>Docente: Grupo 3</p>
                    </div>

                    <div class="flex gap-2">
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
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                            />
                        </svg>
                        <p>Cantidad de estudiantes: 12</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import Micromodal from "Micromodal";
export default {
    data() {
        return {
            isLoading: true,
            user: null
        };
    },
    mounted() {
        setTimeout(() => {
            this.isLoading = false;
        }, 1000);
        axios
            .get("/api/user")
            .then(res => {
                (this.user = res.data), (this.isLoading = false);
            })
            .catch(error => {});
    }
};
</script>

<style>
.lds-ring {
    display: inline-block;
    position: absolute;
    width: 80px;
    height: 80px;
}
.lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 64px;
    height: 64px;
    margin: 8px;
    border: 8px solid #fff;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #fff transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
}
@keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
