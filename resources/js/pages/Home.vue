<template>
    <div
        class="
            container
            mx-auto
            h-screen
            bg-medical-pattern dark:bg-medical-pattern-dark bg-bottom bg-no-repeat
        "
    >
        <div class="flex items-center justify-center h-full">
            <div class="lg:w-7/12 w-11/12 relative">
                <div class="absolute -top-20 -left-20 z-back">
                    <img src="/images/shapes/1.svg" alt="" class="dark:hidden" />
                    <img src="/images/shapes/1-dark.svg" alt=""  class="hidden dark:inline" />
                </div>
                <!-- <div class="absolute -top-20 -left-20 z-back hidden dark:block">
                </div> -->
                <div class="relative mt-1">
                    <div
                        class="
                            flex
                            absolute
                            inset-y-0
                            left-0
                            items-center
                            pl-3
                            pointer-events-none
                        "
                    >
                        <img src="images/icons/search.svg" alt="" class="dark:hidden">
                        <img src="images/icons/search-dark.svg" alt="" class="hidden dark:inline">
                    </div>
                    <input
                        type="text"
                        id="email-adress-icon"
                        class="
                            border border-gray-300
                            dark:border-gray-600
                            text-gray-900 text-sm
                            dark:bg-gray-600 dark:text-slate-100
                            rounded-lg
                            focus:ring-blue-500 focus:border-blue-500
                            block
                            pl-12
                            p-6
                            w-full
                        "
                        placeholder="Search drugs, example: doliprane, paracetamol..."
                    />
                </div>

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
                    <a href="https://play.google.com/store/apps">
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
export default {

};
</script>
