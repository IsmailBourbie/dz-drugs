<template>
  <ExampleComponent />
</template>

<script>
import ExampleComponent from '../components/ExampleComponent.vue'
export default {
  components: {
    ExampleComponent
  },
  computed: {
    categories () {
      return this.$store.state.categories
    }
  }
}
</script>
