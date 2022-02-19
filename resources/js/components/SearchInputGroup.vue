<template>
    <div class="relative mt-1">
        <div
            class="
                flex
                absolute
                inset-y-0
                left-0
                items-center
                pl-3
                pointer-events-none
            "
        >
            <svg-icon src="/images/icons/search.svg" />
        </div>
        <search-input :class="inputClass" :placeholder="InputPlaceholder" />
        <search-result v-show="false" />
    </div>
</template>

<script>
import SearchInput from './SearchInput.vue'
import SearchResult from './SearchResult.vue'
export default {
    props: {
        inputClass: {
            type: String,
            default: 'p-6'
        },
        InputPlaceholder: {
            type: String,
            default: 'Search drugs...'
        }
    },
    components: {
        SearchInput, SearchResult
    },
    data() {
        return {
            hello: ''
        }
    },
    methods: {
        showSearchBox(data) {
            alert(0)
        }
    }

}
</script>

<style>
</style>