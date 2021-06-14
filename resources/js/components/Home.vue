<template>
    <div class="relative">
        <Loading v-if="isLoading" class="fixed inset-0"></Loading>
        <header class="bg-white shadow dark:bg-gray-700">
            <div class=" mx-auto py-6 px-10 text-gray-900 dark:text-gray-200">
                <h1 class="text-2xl font-bold ">
                    Panel de control
                </h1>
            </div>
        </header>
        <main>
            <card-user></card-user>
        </main>
    </div>
</template>

<script>

export default {
    data() {
        return {
            user: null,
            isLoading: true
        };
    },
    methods: {
        logout() {
            axios.post("/api/logout").then(() => {
                this.$router.push({ name: "Login" }, (this.mode = false));
            });
        }
    },
    mounted() {
        axios.get("/api/user").then(res => {
            this.user = res.data;
            this.isLoading = false;
        });
    }
};
</script>
