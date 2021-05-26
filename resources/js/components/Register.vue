<template>
    <div class="flex items-center justify-center mx-10 my-8">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label
                                    for="name"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Nombre</label
                                >

                                <div class="col-md-6">
                                    <input
                                        id="name"
                                        v-model="form.name"
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        value=""
                                        required
                                        autocomplete="name"
                                        autofocus
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    for="email"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Correo</label
                                >

                                <div class="col-md-6">
                                    <input
                                        id="email"
                                        v-model="form.email"
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        value=""
                                        required
                                        autocomplete="email"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    for="password"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Contraseña</label
                                >

                                <div class="col-md-6">
                                    <input
                                        v-model="form.password"
                                        id="password"
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right"
                                    >Confirmar contraseña</label
                                >

                                <div class="col-md-6">
                                    <input
                                        v-model="form.password_confirmation"
                                        id="password-confirm"
                                        type="password"
                                        class="form-control"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    />
                                </div>
                            </div>

                            <div class="flex ">
                                <div class="">
                                    <button
                                        @click.prevent="register"
                                        type="submit"
                                        class="bg-gray-900"
                                    >
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
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
