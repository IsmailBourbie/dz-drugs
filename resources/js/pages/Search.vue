<template>
    <div class="container mx-auto pt-1 mt-8">
        <div class="flex justify-center">
            <button class="p-1 mx-3 border-b-2 w-14 text-center text-lg">
                Drug
            </button>
            <button class="p-1 mx-3 border-b-2 w-14 text-center text-lg">
                Dci
            </button>
        </div>

        <div class="mt-10 w-3/4 mx-auto">
            <SearchPageList v-if="isDrug" :data="drugs" />
            <SearchPageList v-else :data="dci" />
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
            isdrug: true,
            drugs: [],
            dci: [],
            query: "",
            type: "",
        }
    },
    methods: {
        async search(query) {
            this.query = query
            if (query.length > 1) {
                await axios.get('/api/search/?q=' + query).then((response) => {
                    this.drugs = response.data.drugs
                    this.dci = response.data.dci
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
                this.search(this.query)
            },
            { immediate: true }
        )
    }
}
</script>

<style>
</style>