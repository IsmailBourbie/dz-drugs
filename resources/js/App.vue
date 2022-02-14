<template>
    <TheNavebar />
    <router-view />
</template>

<script>
import TheNavebar from './components/TheNavebar.vue'
export default {
    name: 'App',
    components: { TheNavebar }
}
</script>

<style>
</style>
