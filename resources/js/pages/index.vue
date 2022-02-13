<template>
	<NavbarComponent />
</template>

<script>
import NavbarComponent from "../components/NavbarComponent.vue";
export default {
	components: {
		NavbarComponent,
	},
	computed: {
		categories() {
			return this.$store.state.categories;
		},
	},
};
</script>
