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
        <slot></slot>
    </div>
</template>

<script>
import SearchInput from './SearchInput.vue'
export default {
    components: {
        SearchInput
    },

}
</script>

<style>
</style>