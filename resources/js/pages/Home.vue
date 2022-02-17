<template>
    <div
        class="
            container
            mx-auto
            h-screen
            bg-medical-pattern
            dark:bg-medical-pattern-dark
            bg-bottom bg-no-repeat
        "
    >
        <div class="flex items-center justify-center h-full">
            <div class="lg:w-7/12 w-11/12 relative">
                <div class="absolute -top-20 -left-20 z-back">
                    <svg-icon src="/images/shapes/1.svg" />
                </div>
                <search-input-group class="w-full">
                    <search-input class="p-6" />
                </search-input-group>

                <div class="text-center lg:px-5 px-1 mt-8">
                    <h1 class="text-base md:text-4xl font-bold">
                        Lorem ipsum dolor sit amet, consectetur
                    </h1>
                    <p class="lg:px-8 px-1.5 mt-5 2xl:px-24 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat
                    </p>
                </div>

                <div class="text-center mt-8">
                    <a href="https://play.google.com/store/apps" class="inline-block">
                        <img
                            src="/images/logos/play-badge.svg"
                            alt="Google Play"
                            class="mx-auto"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SearchInput from '../components/SearchInput.vue'
import SearchInputGroup from '../components/SearchInputGroup.vue'
export default {
    components: { SearchInput, SearchInputGroup },
}
</script>
