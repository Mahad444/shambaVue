<template>
  <div>
    <!-- Services Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-4 col-md-6">
            <div class="mb-3">
              <h6 class="text-primary text-uppercase">Crops</h6>
              <h1 class="display-5">Organic Farm Crops</h1>
            </div>
            <p class="mb-4">
              Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum et
              tempor sit. Clita erat ipsum et lorem et sit sed stet labore
            </p>
            <a href="" class="btn btn-primary py-md-3 px-md-5">Contact Us</a>
          </div>
          <div class="col-lg-4 col-md-6" v-for="crop in crops" :key="crop.id">
            <div class="service-item bg-light text-center p-5">
              <i class="fa fa-carrot display-1 text-primary mb-3"></i>
              <h4>{{ crop.name }}</h4>
              <h4>{{ crop.type }}</h4>
              <p class="mb-0">{{ crop.desc }}</p>
            </div>
            <div class="container text-center">
              <div class="row">
                <div class="col">
                  <router-link
                    class="btn btn-primary"
                    :to="'/crop/' + crop.id + '/edit'"
                    >Update Crop</router-link
                  >
                </div>
                <div class="col">
                  <button class="btn btn-danger" @click="deleteCrop(crop.id)">
                    Delete Crop
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
 import axios from "axios"
export default {
  props: ["crops"],
  emits: ['delete-crop'],
    methods: {
         deleteCrop(id) {
            if (confirm("Sure to delete this crop?")) {
                 axios
                    .delete(`http://127.0.0.1:8000/api/crop/${id}`)
                    .then(res => {
                        console.log(res);
                    })
                    
            }       
    }
  }
};
</script>

<style></style>
