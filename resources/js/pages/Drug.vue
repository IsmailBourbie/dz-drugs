<template>
    <div
        class="container mx-auto mt-6 p-5 rounded-lg"
        v-if="Object.keys(drug).length"
    >
        <div class="md:w-11/12 mx-auto">
            <h1 class="text-xl md:text-3xl font-semibold mb-5">{{ title }}:</h1>
            <div class="mx-auto md:flex md:justify-between">
                <DetailCardComponent
                    title="General informations"
                    :data="generalInfo"
                    class="md:w-1/2 md:mx-1 min-h-full"
                />
                <DetailCardComponent
                    title="Other informations"
                    :data="laboAndDciInfo"
                    class="md:w-1/2 md:mx-1 min-h-full"
                />
            </div>
        </div>

        <div class="md:w-11/12 mx-auto mt-6" v-if="generics.length">
            <h1 class="text-xl md:text-3xl font-semibold pb-2">
                Other Generics
            </h1>
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
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr v-for="(drug, index) in generics" :key="index">
                                <td>{{drug.name}}</td>
                                <td>drug.laboratory.country</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DetailCardComponent from "../components/DetailCardComponent.vue";

export default {
    components: { DetailCardComponent },
    props: {
        slug: { type: String, required: true }
    },
    data() {
        return {
            drug: {},
            generics: {}
        }
    },
    computed: {
        title() {
            return this.drug.name + " " + this.drug.dosage.name + " " + this.drug.form.name + " boite de " + this.drug.quantity
        },
        generalInfo() {
            return {
                Commercial: this.drug.name,
                Dosage: this.drug.dosage.name,
                Form: this.drug.form.name,
                Condition: " boite de " + this.drug.quantity
            }
        },
        laboAndDciInfo() {
            return {
                Dci: this.drug.dci.name,
                Tarif: this.drug.dci.tarif + 'DA',
                Laboratory: this.drug.laboratory.name,
                Country: 'Algeria',
            }
        }
    },
    methods: {
        getGenerics() {
            axios.get('/api/dci/' + this.drug.dci.slug).then(response => {
                this.generics = response.data.drugs;
            }).catch((error) => {
                console.log(error.response.status);
                console.log(error.response.data.message);
            })
        }
    },
    mounted() {
        axios.get('/api/medicaments/' + this.slug).then(response => {
            this.drug = response.data;
            this.getGenerics()
        }).catch((error) => {
            console.log(error.response.status);
            console.log(error.response.data.message);
        })
    }
}
</script>
