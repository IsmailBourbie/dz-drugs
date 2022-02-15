<template>
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
            <a class="md:mb-0 ml-3 text-2xl font-black"> DRUDZ </a>
            <search-input-group class="w-80" v-if="this.searchInputVisible">
                <search-input class="p-2" placeholder="Search drugs..." />
            </search-input-group>
            <nav class="flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 cursor-pointer">
                    <svg-icon src="/images/icons/toggle-mode-btn.svg" />
                </a>
                <a class="mr-5 cursor-pointer">
                    <svg-icon src="/images/icons/menu-btn.svg" />
                </a>
            </nav>
        </div>
    </header>
</template>

<script>
import SearchInput from "../components/SearchInput.vue";
import SearchInputGroup from "../components/SearchInputGroup.vue";
export default {
    components: { SearchInput, SearchInputGroup },
    props: {
        searchInputVisible: {
            default: true
        }
    },
};
</script>
