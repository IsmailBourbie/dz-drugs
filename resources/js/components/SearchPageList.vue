<template>
    <ul>
        <li v-for="drug in data" :key="drug.id">{{ drug.title }}</li>
    </ul>
</template>

<script>
export default {
    props: {
        data: {
            required: true
        }
    }

}
</script>

<style>
</style>