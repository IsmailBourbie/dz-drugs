<template>
    <h1>Search page {{}}</h1>
</template>

<script>
export default {
    data() {
        return {
            query: "",
            type: ""
        }
    },

    mounted() {
        this.query = this.$route.query.q;
        this.type = this.$route.query.type;
    }
}
</script>

<style>
</style>