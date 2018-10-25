<template>
<div class="animsition page-login-v3 layout-full">
	<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" src="/static/theme/mmenu/assets/images/logo-blue.png" alt="...">
            <h2 class="brand-text font-size-18">Remark</h2>
          </div>
		  <div id="err_login">
			<ul class="errors" v-if="errors && errors.length">
				<li v-for="error of errors">
				  {{error}}
				</li>
			</ul>
		  </div>  
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input class="form-control"  type="email" v-model="email"  />
              <label class="floating-label">Email</label>
            </div>
            <div class="form-group form-material floating" data-plugin="formMaterial">
              <input class="form-control" type="password" v-model="password"  />
              <label class="floating-label">Password</label>
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                <label for="inputCheckbox">Remember me</label>
              </div>
              <a class="float-right" href="forgot-password.html">Forgot password?</a>
            </div>
            <button type="button"  v-model="actLogin" @click="actLogin"  class="btn btn-primary btn-block btn-lg mt-40 btn-login">Sign in</button>
          <p>Still no account? Please go to <a href="register-v3.html">Sign up</a></p>
        </div>
      </div>
      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE BY amazingSurge</p>
        <p>© 2017. All RIGHT RESERVED.</p>
      </footer>
    </div>
  </div>
  </div>
  <!-- End Page -->
</template>

<script>
	import axios from 'axios';
    export default {
        name: 'Login',
		data: function () { 
			return {
				email: '',
				password: '',
				errors: []
			}
		},
		 methods:{ 
			actLogin() {
				axios.post(`https://pcc-test.stringee.com/v1/account`, {
				  email: this.email,
				  password: this.password,
				})
				.then(response => {
					if(response.data.r!=0){
						this.errors.push(response.data.msg);
					}else{
						if(response.data.portals[0].auth_token){
							localStorage.setItem('auth_token', response.data.portals[0].auth_token);
							localStorage.setItem('user', JSON.stringify(response.data.portals[0]));
							localStorage.setItem('contact',0);
							this.$router.push('/contacts');
						}
					}
				})
				.catch(e => {				  
				})
			  }
		 } 
    }
</script>

