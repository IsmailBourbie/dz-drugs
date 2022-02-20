<template>
    <div
        class="container mx-auto bg-slate-50 mt-6 p-5 rounded-lg"
        v-if="Object.keys(drug).length"
    >
        <h1 class="text-3xl font-semibold">{{ title }}</h1>
    </div>
</template>

<script>

export default {
    props: {
        slug: { type: String, required: true }
    },
    data() {
        return {
            drug: {},
        }
    },
    computed: {
        title() {
            return this.drug.name + " " + this.drug.dosage.name + " " + this.drug.form.name + " boite de " + this.drug.quantity
        }
    },
    mounted() {
        axios.get('/api/medicaments/' + this.slug).then(response => {
            this.drug = response.data;
            console.log(this.drug);
        }).catch((error) => {
            console.log(error.response.status);
            console.log(error.response.data.message);
        })
    }
}
</script>
