<template>
  <footer class="dark:text-white dark:bg-gray-700 bg-gray-100">
    <div class="grid container justify-start mx-auto px-10 py-5">
      <div class="flow-root">
        <div class="justify-start">
          <p class="text-sm">
            © {{currentDateTime()}} - todos los derechos reservados
          </p>
        </div>
      </div>
    </div>

    <div
      class="items-center grid grid-cols-2 py-2.5 bg-gradient-to-r from-indigo-700 to-indigo-600 container mx-auto px-10"
    >
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
</template>

<script>
import moment from "moment";

export default {
    data() {
        return {
            form: {
                name: "",
                password: "",
                password_confirmation: "",
                email: ""
            },
            errors: [],
            opened: false
        };
    },
    methods: {
        currentDateTime() {
            return moment().format(" YYYY");
        },
        register() {
            axios
                .post("/api/register", this.form)
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