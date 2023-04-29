<script>
import { RouterLink, RouterView } from 'vue-router'
import FooterComponent from './components/Farmfresh/FooterComponent.vue'
import HeaderComponent from './components/Farmfresh/HeaderComponent.vue'



export default {
  components: {HeaderComponent, FooterComponent}
}
</script>
<template>
  <div>
    <header-component></header-component>
 
  </div>
  <RouterView />
  <div>
    <footer-component></footer-component>
  </div>
</template>




