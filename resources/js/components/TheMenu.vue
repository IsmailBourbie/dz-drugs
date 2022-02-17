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
        <div
            class="container flex justify-center items-center h-screen ml-auto"
        >
            <div class="w-3/4">
                <ul class="md:text-6xl text-4xl">
                    <li class="mb-2 md:py-2 py-1 font-black tracking-wider">
                        <a href="#">About</a>
                    </li>
                    <li class="mb-2 md:py-2 py-1 font-black tracking-wider">
                        <a href="#">Contact</a>
                    </li>
                    <li class="mb-2 md:py-2 py-1 font-black tracking-wider">
                        <a href="#">Contiburte</a>
                    </li>
                    <li class="mb-2 md:py-2 py-1 font-black tracking-wider">
                        <a href="#">Donate</a>
                    </li>
                </ul>
                <social-media-links />
            </div>
        </div>
    </div>
</template>

<script>
import SocialMediaLinks from '../components/SocialMediaLinks.vue';
export default {
    components: {
        SocialMediaLinks
    },
    methods: {
        close() {
            this.$emit('menuClosed')
        }
    }
}
</script>

<style>
</style>