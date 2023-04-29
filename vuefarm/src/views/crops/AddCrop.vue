<template>
    <div class="container display-flex mt-3 w-50">
      <div class="title justify-content-center">
        <h2>Add Crop</h2>
      </div>
      <div class="icon align-items-center">
        <i
        class="fa fa-apple-alt display-1 text-primary mb-3"
      ></i>
      </div>
      <form @submit.prevent="addCrop()">
          <div class="mb-3">
            <label for="cropName" class="form-label"
              >Crop name</label
            >
            <input
              type="text"
              class="form-control"
              id="cropName"
              placeholder="Enter crop name"
              v-model="crops.name"
            />
          </div>
          <div class="mb-3">
            <label for="cropType" class="form-label"
              >Crop type</label
            >
            <input
              type="text"
              class="form-control"
              id="cropType"
              placeholder="Enter type of crop"
              v-model="crops.type"
            />
          </div>
          <div class="mb-3">
            <label for="cropDesc" class="form-label"
              >Description</label
            >
            <textarea
              class="form-control"
              id="cropDesc"
              rows="3"
              v-model="crops.desc"
            ></textarea>
          </div>
          <div class="mb3">
          <button class="btn bt-success bg-info">Add Crop</button>
        </div>

        </form>
        
    </div>
     
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      crops: {
        name: "",
        desc: "",
        type: "",
      },
    };
  },

  methods: {
    addCrop() {
       axios.post('http://127.0.0.1:8000/api/crops', this.crops).then((res) => {
        alert(res.data);
        console.log(res);
        this.crops = {
          name: "",
          desc: "",
          type: "",
        };
       });
      this.$router.replace("/crops");
    },
  },
};
</script>

<style></style>
