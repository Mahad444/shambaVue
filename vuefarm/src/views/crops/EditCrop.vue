<template>
  <div class="container display-flex mt-3 w-50">
      <div class="title justify-content-center">
        <h2>Edit Crops</h2>
      </div>
      <div class="icon align-items-center">
        <i
        class="fa fa-apple-alt display-1 text-primary mb-3"
      ></i>
      </div>
      <form @submit.prevent="editCrop()">
          <div class="mb-3">
            <label for="cropName" class="form-label"
              >Crop name</label
            >
            <input
              type="text"
              class="form-control"
              id="cropName"
              v-model="crop.name"
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
              v-model="crop.type"
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
              v-model="crop.desc"
            ></textarea>
          </div>
          <div class="mb3">
          <button
          class="btn bt-success bg-info"
          >Save
           </button>
        </div>

        </form>
        
    </div>
     
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            crop: {
                name: "",
                desc: "",
                type: "",
            },
        };
    },
    created() {
        this.getCrop()
    },
    methods: {
        async getCrop() {
            let id = this.$route.params.id;
         await  axios.get(`http://127.0.0.1:8000/api/crop/${id}`).then((res) => {
                this.crop = res.data;
             console.log(res.data);
            });
      },
      async editCrop() {
        let id = this.$route.params.id;
        await axios
          .put(`http://127.0.0.1:8000/api/crop/${id}`, this.crop)
          .then((res) => {
            console.log(res.message);
            this.crop = {
              name: '',
              desc: '',
              type: '',
            };
          });
        this.$router.replace("/crops");
      }
    },
}
</script>

<style>

</style>