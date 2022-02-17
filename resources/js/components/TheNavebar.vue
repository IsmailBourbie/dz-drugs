<template>
    <div>
        <header class="body-font absolute w-full">
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
                <a href="#" class="md:mb-0 ml-3 text-2xl font-black"> DRUDZ </a>
                <search-input-group
                    class="w-80"
                    v-if="currentRouteName !== 'Home'"
                >
                    <search-input class="p-2" placeholder="Search drugs..." />
                </search-input-group>
                <nav
                    class="flex flex-wrap items-center text-base justify-center"
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
        <TheMenu v-show="openMenu" @menuClosed="hideMenu" />
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
