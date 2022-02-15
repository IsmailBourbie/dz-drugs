<template>
    <div>
        <img :src="icon.light" alt="" class="dark:hidden" />
        <img :src="icon.dark" alt="" class="hidden dark:inline" />
    </div>
</template>

<script>
export default {
    props: {
        src: {
            required: true,
            type: String
        }
    },
    data() {
        return {
            icon: {
                light: this.src,
                dark: this.removeExtenssion(this.src) + '-dark.svg',
            }
        }
    },
    methods: {
        removeExtenssion(iconFile) {
            return iconFile.replace(/\.[^/.]+$/, "")
        }
    }
}
</script>

<style>
</style>