<template>
 <crop-component :crops="crops"></crop-component>

</template>

<script>
import CropComponent from '../../components/CropComponent.vue'
import axios from 'axios'
export default {
  components: { CropComponent },
  data() {
    return {
      crops: []
    };
  },
  created() {
    this.getCrops();
  },
  methods:{
    getCrops() {
      axios.get('http://127.0.0.1:8000/api/crops').then(res => {
        this.crops = res.data;
        console.log(res.data)
      })
        
    }
  }

}
</script>

<style>

</style>