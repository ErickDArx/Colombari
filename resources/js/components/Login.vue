<template>
<div>
  <!-- Navbar login -->
  <nav class="fixed px-10 z-40 right-0 left-0 transition duration-500 ease-in-out shadow-xl dark:bg-gray-900 bg-gray-100 flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="items-center flex-shrink-0 dark:text-white mr-6">
      <div class="space-y-1">
        <a href="/">
          <span class="block font-semibold text-base tracking-tight dark:text-gray-200">Gestión de estudiantes</span>
          <span class="block text-gray-500 font-weight-light text-sm tracking-tight">Augusto Colombari Chicoli</span>
        </a>
      </div>
      <div></div>
    </div>

    <div v-click-outside="onClickOutside" class="flex items-center justify-center gap-1">
      <button id="switchTheme" class="focus:outline-none focus:ring-2 focus:border-indigo-400 transition duration-500 ease-in-out rounded-full h-10 w-10 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 transition duration-500 ease-in-out text-transparent dark:text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 transition duration-500 ease-in-out absolute text-indigo-500 dark:text-transparent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>
      </button>
    </div>

    <div v-show="active" class="z-50 origin-top-right absolute right-8 top-20 w-48 rounded-md shadow-lg"></div>
  </nav>
  

  <!-- Login -->
  <div class="relative h-screen flex justify-center items-center">
    <div class="bg-gray-900 absolute z-10 inset-0 opacity-70"></div>
    <img class="object-cover h-screen w-screen inset-0" src="http://1.bp.blogspot.com/-8EQn0ho5be0/VUv4fdM4l0I/AAAAAAAAAJQ/1h5i7hRX6V4/s1600/FB_IMG_1431018149564.jpg" alt="" />

    <!-- Loading -->
    <div v-if="loading" class="bg-gray-900 opacity-70 absolute inset-0 z-20"></div>
    <div v-if="loading" class="font-medium ring-indigo-500 justify-center items-center text-gray-100 text-base absolute z-50 px-4 py-2 rounded-md shadow-xl flex gap-2 bg-gradient-to-r from-indigo-400 to-blue-500">
      <p>Procesando solicitud</p>
      <svg xmlns="http://www.w3.org/2000/svg" class="flex animate-spin h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
      </svg>
    </div>    


    <div class="flex absolute mt-24">
      <div class="dark:bg-gray-900 dark:text-gray-200 bg-gray-100 grid px-10 py-8 grid-cols-2 z-10">
        <div class="items-center col-span-2">
          <div class="rounded bg-red-400 text-sm text-gray-200"></div>
        </div>
        <div class="items-center col-span-2">
          <h2 class="font-bold text-xl border-l-4 px-2 border-indigo-600">Inicio de sesión</h2>
        </div>
        <!-- Label Nombre de usuario -->
        <div class="col-span-2 flex">
          <div class="flex items-center mt-5">
            <label class="uppercase md:text-sm text-xs dark:text-white text-gray-500 text-light font-semibold">Nombre de usuario</label>
          </div>
        </div>
        <!-- Input -->
        <div class="col-span-2 mt-2">
          <div class="relative text-gray-400 focus-within:text-gray-600">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>

            <input
              autocomplete="off"
              name="username"
              type="text"
              v-model="form.username"
              v-bind:class="{
                                'dark:border-red-400 border-red-500 border-2': errors
                            }"
              class="py-2.5 bg-white placeholder-gray-400 text-gray-900 rounded-sm shadow-sm appearance-none w-full block pl-12 focus:outline-none"
              placeholder=""
            />
          </div>
          <div v-if="errors" class="flex gap-1 items-center mt-1 mb-1 transition duration-300 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 dark:text-red-400 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="dark:text-red-400 text-red-500 text-sm">{{ errors[0] }}</p>
          </div>
        </div>
        <!-- Label contraseña -->
        <div class="col-span-2 mt-2.5">
          <div class="flex">
            <label class="uppercase md:text-sm text-xs dark:text-white text-gray-500 text-light font-semibold">Contraseña</label>
          </div>
        </div>
        <!-- Input -->
        <div class="col-span-2 mt-2">
          <div class="relative text-gray-400 focus-within:text-gray-600">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
              </svg>
            </div>
            <input
              name="password"
              type="password"
              v-model="form.password"
              v-bind:class="{
                                'dark:border-red-400 border-red-500 border-2': errors_password
                            }"
              class="py-2.5 bg-white placeholder-gray-400 text-gray-900 rounded-sm shadow-sm appearance-none w-full block pl-12 focus:outline-none"
              placeholder=""
            />
          </div>
          <div v-if="errors_password" class="flex gap-1 items-center mt-1 mb-1 transition duration-300 ease-in-out">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 dark:text-red-400 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="dark:text-red-400 text-red-500 text-sm">{{ errors_password[0] }}</p>
          </div>
        </div>

        <button @click.prevent="login" type="submit" class="text-sm mt-4 col-span-2 block py-2 text-white rounded-sm bg-indigo-500 hover:bg-indigo-700 focus:outline-none">Iniciar sesión</button>

        <button class="transition delay-100 ease-in-out hover:text-indigo-100 text-sm mt-2.5 col-span-2 block py-2 dark:text-indigo-100 text-indigo-900 rounded-sm border-blue-500 hover:bg-indigo-700 focus:outline-none">¿Olvidaste la contraseña?</button>
      </div>
    </div>
  </div>
</div>

</template>

<script>
import ClickOutside from "vue-click-outside";
export default {
    data() {
        return {
            form: {
                username: "",
                password: ""
            },
            errors: "",
            errors_password: "",
            loading: false,
            opened: false
        };
    },
    methods: {
        toggle() {
            this.opened = true;
        },

        hide() {
            this.opened = false;
        },
        async login() {
            this.loading = true,
            await axios
                .post("/api/login", this.form)
                .then(() => {
                    (this.loading = false), this.$router.push({ name: "Home" });
                    return dispatch("getUser");
                })
                .catch(error => {
                    (this.loading = false),
                        (this.errors = error.response.data.errors.username),
                        (this.errors_password =
                            error.response.data.errors.password);
                });
        }
    },
    mounted() {
        // prevent click outside event with popupItem.
        (this.popupItem = this.$el), axios.get("/api/user");
    },
    directives: {
        ClickOutside
    }
};
</script>
