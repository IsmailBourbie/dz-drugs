<template>
    <TheNavbar />
    <router-view />
</template>

<script>
import TheNavbar from './components/TheNavebar.vue';
export default {
    components: { TheNavbar }
}
</script>

<style>
</style>
