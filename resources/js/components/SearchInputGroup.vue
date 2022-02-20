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
        <search-input
            :class="inputClass"
            :placeholder="InputPlaceholder"
            @searching="search"
        />
        <search-result
            v-if="drugs.length || dci.length"
            :data="{ drugs, dci }"
        />
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
            drugs: {},
            dci: {}
        }
    },
    methods: {
        search(query) {
            if (query.length > 0) {
                axios.get('/api/search/?q=' + query + '&limit=4').then((response) => {
                    this.drugs = response.data.drugs
                    this.dci = response.data.dci
                    console.log(response.data)
                })
            } else {
                this.drugs = {}
                this.dci = {}
            }
        },
    }

}
</script>

<style>
</style>