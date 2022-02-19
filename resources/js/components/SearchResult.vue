<template>
    <div
        class="
            h-80
            bg-white
            dark:bg-gray-900
            absolute
            w-full
            mt-6
            rounded-lg
            border border-gray-300
            dark:border-gray-600
        "
    >
        <div class="border-b py-3 px-2 w-11/12 mx-auto">
            <ul class="py-4">
                <li class="p-1 mb-1" v-for="n in 4" :key="n">
                    <a href="#">
                        <div class="flex space-x-2 items-center">
                            <svg-icon src="/images/icons/drug.svg" />
                            <span>Doliprane comprime 1000mg</span>
                        </div>
                    </a>
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
    </div>
</template>

<script>
export default {

}
</script>

<style>
</style>