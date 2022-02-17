<template>
    <a href="#" class="mr-5 cursor-pointer" @click.prevent="toggleTheme">
        <svg-icon src="/images/icons/toggle-mode-btn.svg" />
    </a>
</template>

<script>
export default {
    props: {
        theme: {
            type: String,
            required: true,
        },
    },
    methods: {
        toggleTheme() {
            const newTheme = this.theme === 'light' ? 'dark' : 'light';
            localStorage.setItem('theme', newTheme);
            this.$emit('themeChanged', newTheme);
        },
    },
}
</script>

<style>
</style>