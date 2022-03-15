<template>
    <ul>
        <li
            v-for="drug in data"
            :key="drug.id"
            class="
                p-2
                text-base
                md:text-lg
                rounded-lg
                odd:bg-slate-50
                dark:odd:bg-slate-700
            "
        >
            <router-link :to="{ name: 'Drug', params: { slug: drug.slug } }">
                {{ drug.title }}
            </router-link>
        </li>
    </ul>
</template>

<script>
export default {
    props: {
        data: {
            required: true
        }
    }

}
</script>

<style>
</style>