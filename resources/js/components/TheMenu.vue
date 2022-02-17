<template>
    <div
        class="
            absolute
            w-full
            h-full
            bg-white
            dark:text-slate-100 dark:bg-gray-900
            z-50
        "
    >
        <header class="body-font absolute w-full">
            <div class="container mx-auto p-5 flex jusrig">
                <a
                    href="#"
                    class="mr-5 cursor-pointer inline-block ml-auto"
                    @click="close"
                >
                    <svg-icon src="/images/icons/close-btn.svg" />
                </a>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    methods: {
        close() {
            this.$emit('menuClosed')
        }
    }
}
</script>

<style>
</style>