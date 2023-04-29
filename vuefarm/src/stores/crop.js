import { defineStore } from "pinia"

export const useCropStore = defineStore("crop", {
    state: () => ({ crops: [] }),
    getters: {
      getCrops(){
          axios.get('http://127.0.0.1:8000/api/crops').then(res=>{
              this.crops=res.data;
              console.log(res.data);
              return this.crops;
          })
      }
    },
    actions: {
  
    },
  });
  