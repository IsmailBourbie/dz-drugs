<template>
    <div class="md:w-11/12 mx-auto mt-6" v-if="generics.length">
        <h1 class="text-xl md:text-3xl font-semibold pb-2">Other Generics</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor,
            officia?
        </p>
        <div class="mt-6 ring-1 ring-gray-200 rounded-xl min-h-full">
            <div class="overflow-x-auto p-3 max-h-56">
                <table class="table w-full text-left">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th class="p-2">Medicament</th>
                            <th class="p-2">Laboratory</th>
                            <th class="p-2">Country</th>
                        </tr>
                    </thead>
                    <tbody
                        class="
                            before:content-['\200C']
                            before:block
                            before:leading-4
                        "
                    >
                        <!-- row 1 -->
                        <tr
                            v-for="(drug, index) in generics"
                            :key="index"
                            class="odd:bg-gray-50 dark:odd:bg-gray-700"
                        >
                            <td class="p-2">
                                <router-link
                                    class="hover:text-blue-400"
                                    :to="{
                                        name: 'Drug',
                                        params: { slug: drug.slug },
                                    }"
                                >
                                    {{ drug.name }}
                                </router-link>
                            </td>
                            <td class="p-2">{{ drug.laboratory.name }}</td>
                            <td class="p-2">{{ drug.laboratory.country }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            generics: {}
        }
    },
    methods: {
        fetchGenerics(slug) {
            axios.get('/api/generics/' + slug).then(response => {
                this.generics = {}
                this.generics = response.data;
            }).catch((error) => {
                console.log(error.response.status);
                console.log(error.response.data.message);
            })
        }
    },
    created() {
        this.$watch(
            () => this.$route.params,
            (param) => {
                if (param.slug) {
                    this.fetchGenerics(param.slug)
                }
            },
            { immediate: true }
        )
    }

}
</script>

<style>
</style>