<template>
    <div
        class="
            max-h-96
            w-full
            bg-white
            dark:bg-gray-600
            absolute
            mt-6
            py-3
            rounded-lg
            border border-gray-300
            dark:border-gray-600
        "
    >
        <div class="py-3 px-2 w-11/12 mx-auto" v-if="data.drugs.length">
            <ul class="text-sm">
                <li class="p-1 mb-1" v-for="drug in data.drugs" :key="drug">
                    <router-link :to="{ name: 'Drug' }">
                        <div class="flex space-x-2 items-center">
                            <svg-icon src="/images/icons/drug.svg" />
                            <span
                                v-text="
                                    drug.name +
                                    ' ' +
                                    drug.form.name +
                                    ' ' +
                                    drug.dosage.name
                                "
                            ></span>
                        </div>
                    </router-link>
                </li>
            </ul>
            <div class="text-right">
                <a
                    href="#"
                    class="p-4 underline text-gray-500 dark:text-gray-300"
                >
                    explore more drugs...
                </a>
            </div>
        </div>

        <div
            class="w-2/3 h-1px dark:bg-slate-300 bg-gray-600 mx-auto"
            v-if="data.drugs.length && data.dci.length"
        ></div>

        <div class="py-3 px-2 w-11/12 mx-auto" v-if="data.dci.length">
            <ul class="text-sm">
                <li class="p-1 mb-1" v-for="drug in data.dci" :key="drug">
                    <a href="#">
                        <div class="flex space-x-2 items-center">
                            <svg-icon src="/images/icons/dci.svg" />
                            <span v-text="drug.name"></span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="text-right">
                <a
                    href="#"
                    class="p-4 underline text-gray-500 dark:text-gray-300"
                >
                    explore more dci...
                </a>
            </div>
        </div>
    </div>
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