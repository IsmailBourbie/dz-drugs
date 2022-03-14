<template>
    <div class="mt-5 md:w-1/2 md:mx-1 min-h-full shadow-md dark:shadow-slate-800 ring-1 rounded ring-gray-200">
        <div class="p-2 min-h-full">
            <h3 class="text-2xl text-center p-2">{{ title }}</h3>
            <div
                class="flex justify-between items-center py-1 px-4"
                v-for="(val, key, index) in data"
                :key="index"
            >
                <h5 class="text-lg font-semibold inline-block mr-2">
                    {{ key }}:
                </h5>
                <span class="w-1/2 overflow-hidden text-ellipsis whitespace-nowrap text-right" :title="val.toUpperCase()">{{ val.toUpperCase() }}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        data: {
            required: true,
            type: Object
        },
        title: {
            required: true,
            type: String
        },
    }

}
</script>

<style>
</style>