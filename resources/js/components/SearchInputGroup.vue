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
        <search-result v-if="open" :data="{ drugs, dci }" :query="query" />
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
            drugs: [],
            dci: [],
            query: "",
            open: false
        }
    },
    methods: {
        async search(query) {
            this.query = query
            if (query.length > 1) {
                await axios.get('/api/search/?q=' + query + '&limit=4').then((response) => {
                    this.drugs = response.data.drugs
                    this.dci = response.data.dci
                })
            } else {
                this.drugs = []
                this.dci = []
            }
            this.toggle()
        },
        toggle() {
            this.open = (this.drugs.length || this.dci.length) ? true : false
        },
        close(e) {
            if (!this.$el.contains(e.target)) {
                this.open = false;
            }
        }
    },
    created() {
        window.addEventListener("click", this.close);
    },

}
</script>

<style>
</style>