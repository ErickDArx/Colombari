<template>
    <div class="relative">
    
        <main>
            <card-user>
                
            </card-user>
        </main>
    </div>
</template>

<script>
import Nav from './Nav.vue';

export default {
  components: { Nav },
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
