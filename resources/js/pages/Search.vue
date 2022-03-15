<template>
    <div class="container mx-auto pt-1 mt-8">
        <div class="flex justify-center">
            <button
                class="p-1 mx-3 border-b-2 w-40 text-center text-lg"
                :class="{ 'border-blue-600 text-blue-600': !isDci }"
                @click="type = 'drug'"
            >
                Commercial name
            </button>
            <button
                class="p-1 mx-3 border-b-2 w-40 text-center text-lg"
                :class="{ 'border-blue-600 text-blue-600': isDci }"
                @click="type = 'dci'"
            >
                Substance - DCI
            </button>
        </div>

        <div class="mt-16 px-2 md:w-3/4 mx-auto">
            <SearchPageList v-if="isDci" :data="dci" />
            <SearchPageList v-else :data="drugs" />
        </div>
    </div>
</template>

<script>
import SearchPageList from "../components/SearchPageList.vue";
export default {
    components: {
        SearchPageList
    },
    data() {
        // TODO: Implement IsDrug boolean
        return {
            drugs: [],
            dci: [],
            query: "",
            type: "drug",
        }
    },
    computed: {
        isDci() {
            return this.type == 'dci'
        }
    },
    methods: {
        async search(query) {
            if (query.length > 0) {
                await axios.get('/api/search/?q=' + query).then((response) => {
                    this.drugs = _.orderBy(response.data.drugs, 'title', 'asc')
                    this.dci = _.orderBy(response.data.dci, 'title', 'asc')
                })
            } else {
                this.drugs = []
                this.dci = []
            }
        }
    },
    created() {
        this.$watch(
            () => this.$route.query,
            (query) => {
                this.query = query.q;
                this.type = query.type;
                if (this.query) {
                    this.search(this.query)
                }
            },
            { immediate: true }
        )
    }
}
</script>

<style>
</style>