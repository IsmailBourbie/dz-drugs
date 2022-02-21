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
                            <th>Medicament</th>
                            <th>Laboratory</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr v-for="(drug, index) in generics" :key="index">
                            <td>{{ drug.name }}</td>
                            <td>{{ drug.laboratory.name }}</td>
                            <td>{{ drug.laboratory.country }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        slug: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            generics: {}
        }
    },
    mounted() {
        axios.get('/api/generics/' + this.slug).then(response => {
            this.generics = response.data;
        }).catch((error) => {
            console.log(error.response.status);
            console.log(error.response.data.message);
        })
    }

}
</script>

<style>
</style>