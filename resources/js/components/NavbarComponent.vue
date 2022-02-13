<template>
    <header class="text-gray-600 body-font">
        <div
            class="
                container
                mx-auto
                flex flex-wrap
                justify-between
                p-5
                md:flex-row
                items-center
            "
        >
            <a
                class="
                    text-gray-900
                    md:mb-0
                    ml-3
                    text-2xl
                    font-black
                "
            >
                DRUDZ
            </a>
            <nav
                class="
                    md:ml-auto
                    flex flex-wrap
                    items-center
                    text-base
                    justify-center
                "
            >
                <a class="mr-5 cursor-pointer">
                    <img src="/images/icons/light-mode-btn.svg" />
                </a>
                <a class="mr-5 cursor-pointer">
                    <img src="/images/icons/menu-btn.svg" />
                </a>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
