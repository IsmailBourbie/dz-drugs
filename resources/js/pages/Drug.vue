<template>
    <div
        class="container mx-auto mt-6 p-5 rounded-lg"
        v-if="Object.keys(drug).length"
    >
        <div class="md:w-11/12 mx-auto">
            <h1 class="text-xl md:text-3xl font-semibold mb-5">
                {{ title }}:
                <router-link to="#" class="text-lg underline mx-2 font-normal">
                    {{ this.drug.dci.name }}
                </router-link>
            </h1>
            <div class="mx-auto md:flex md:justify-between">
                <DrugDetailCard
                    title="General informations"
                    :data="generalInfo"
                />
                <DrugDetailCard title="Other informations" :data="otherInfo" />
            </div>
        </div>

        <DrugGenericsTable :slug="drug.slug" />
    </div>
</template>

<script>
import DrugDetailCard from "../components/DrugDetailCard.vue";
import DrugGenericsTable from "../components/DrugGenericsTable.vue";

export default {
    components: { DrugDetailCard, DrugGenericsTable },
    data() {
        return {
            drug: {},
        }
    },
    computed: {
        title() {
            let durgInfo = Object.values(this.generalInfo)
            return durgInfo.join(' ');
        },
        generalInfo() {
            return {
                Commercial: this.drug.name,
                Dosage: this.drug.dosage.name,
                Form: this.drug.form.name,
                Condition: "boite de " + this.drug.quantity
            }
        },
        otherInfo() {
            return {
                Dci: this.drug.dci.name,
                Tarif: this.drug.dci.tarif + 'DA',
                Laboratory: this.drug.laboratory.name,
                Country: 'Algeria',
            }
        }
    },
    methods: {
        fetchDrugData(slug) {
            axios.get('/api/medicaments/' + slug).then(response => {
                this.drug = response.data;
            }).catch((error) => {
                console.log(error.response.status);
                console.log(error.response.data.message);
            })
        }
    },
    created() {
        this.$watch(
            () => this.$route.params,
            (params) => {
                if (params.slug) {
                    this.fetchDrugData(params.slug)
                }
            },
            { immediate: true }
        )
    }
}
</script>
