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
                    :data="otherInfo"
                    class="md:w-1/2 md:mx-1 min-h-full"
                />
            </div>
        </div>

        <GenericsTable :slug="drug.slug"/>
    </div>
</template>

<script>
import DetailCardComponent from "../components/DetailCardComponent.vue";
import GenericsTable from "../components/GenericsTable.vue";

export default {
    components: { DetailCardComponent, GenericsTable },
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
    mounted() {
        axios.get('/api/medicaments/' + this.slug).then(response => {
            this.drug = response.data;
        }).catch((error) => {
            console.log(error.response.status);
            console.log(error.response.data.message);
        })
    }
}
</script>
