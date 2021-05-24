<template>
    <div>
        HOLA {{ user.name }}
    </div>
</template>

<script>
export default({
    data() {
        return{
            user: null
        }
    },
    mounted(){
        axios.get('/api/user').then((res)=>{
            this.user = res.data;
        });
    }
})
</script>
