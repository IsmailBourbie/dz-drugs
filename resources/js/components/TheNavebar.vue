<template>
    <div>
        <header class="body-font w-full">
            <div
                class="
                    container
                    mx-auto
                    flex flex-wrap
                    justify-between
                    p-5
                    md:flex-row
                    items-center
                "
            >
                <a href="#" class="md:mb-0 ml-3 text-2xl font-black order-1"> DRUDZ </a>
                <search-input-group
                    class="w-72 z-30 order-3 mt-3 md:mt-0 mx-auto md:order-2"
                    v-if="currentRouteName !== 'Home'"
                    inputClass="p-2"
                >                    
                </search-input-group>
                <nav
                    class="flex flex-wrap items-center text-base justify-center order-2 md:order-3"
                >
                    <theme-switcher
                        :theme="theme"
                        @themeChanged="updateTheme"
                    />
                    <a
                        href="#"
                        class="mr-5 cursor-pointer"
                        @click="openMenu = true"
                    >
                        <svg-icon src="/images/icons/menu-btn.svg" />
                    </a>
                </nav>
            </div>
        </header>
        <Transition name="slidedown">
            <TheMenu v-if="openMenu" @menuClosed="hideMenu" class="shadow-sm shadow-gray-600 dark:shadow-slate-100" />
        </Transition>
    </div>
</template>

<script>
import SearchInput from "../components/SearchInput.vue";
import SearchInputGroup from "../components/SearchInputGroup.vue";
import ThemeSwitcher from "../components/ThemeSwitcher.vue"
import TheMenu from "../components/TheMenu.vue"
export default {
    components: { SearchInput, SearchInputGroup, ThemeSwitcher, TheMenu },
    props: {
        searchInputVisible: {
            default: true
        }
    },
    data() {
        return {
            theme: '',
            openMenu: false
        }
    },
    created() {
        this.setupCurrentTheme()
    },
    mounted() {
        this.setupCurrentTheme()
    },
    methods: {
        updateTheme(theme) {
            this.theme = theme
            document.querySelector('html').classList.remove('dark')
            document.querySelector('html').classList.add(this.theme)
        },
        setupCurrentTheme() {
            this.theme = localStorage.getItem('theme') || 'light';
            document.querySelector('html').classList.add(this.theme)
        },
        hideMenu() {
            this.openMenu = false
        }
    },
    computed: {
        currentRouteName() {
            return this.$route.name
        }
    },
};
</script>
<style>
.slidedown-enter-active,
.slidedown-leave-active {
    transition: max-height 0.5s ease-in-out;
}

.slidedown-enter-to,
.slidedown-leave-from {
    overflow: hidden;
    max-height: 1000px;
}

.slidedown-enter-from,
.slidedown-leave-to {
    overflow: hidden;
    max-height: 0;
}
</style>
