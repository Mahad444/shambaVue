<template>
  <div>
      <div class="container col-md-6">
  <form @submit.prevent>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Email:</strong>
        <input
          type="email"
          name="email"
          class="form-control"
          v-model="user.email"
         
        />
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Password:</strong>
        <input type="password" name="password" class="form-control" 
        v-model="user.password"
        />
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
        <button class="btn btn-primary" @click="login()">Login</button>
      </div>
    </div>
  </div>
</form>

</div>
  </div>
</template>
<script>
import { useAuthStore } from '../../stores/auth';
export default {
setup(){
  let userStore=useAuthStore();
  return {
      userStore
  };
},
  data () {
      return {
          user: {
              email: "",
              password: null,
              created_at: null,
              updated_at: null
          }
      }
  },
  methods: {
      login() {
          this.userStore.user = this.user;
          this.userStore.loginUser();
          //this.$router.replace('/crops');
      }
  }
  
}
</script>
<style>
  
</style>