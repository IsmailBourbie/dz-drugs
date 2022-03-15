<template>
    <input
        type="text"
        v-model="searchInput"
        @input="searchQuery"
        @keydown.enter="goToSearchPage"
        id="email-adress-icon"
        class="
            border border-gray-300
            dark:border-gray-600
            text-gray-900 text-sm
            dark:bg-gray-600 dark:text-slate-100
            rounded-lg
            focus:ring-blue-500 focus:border-blue-500
            block
            pl-12
            w-full
        "
    />
</template>

<script>
export default {
    data() {
        return {
            searchInput: ''
        }
    },
    methods: {
        searchQuery() {
            this.$emit('searching', this.searchInput)
        },
        goToSearchPage() {
            this.$router.push({ path: '/Search', query: { q: this.searchInput} })
        }
    }

}
</script>

<style>
</style>