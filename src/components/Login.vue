<template>
    <div class="login">
	<div class="container">
		<div class="row">
		  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
			  <div class="card-body">
				<h5 class="card-title text-center">Sign In</h5>
				<ul class="errors" v-if="errors && errors.length">
					<li v-for="error of errors">
					  {{error}}
					</li>
				</ul>
				  <div class="form-label-group">
					<input type="email" v-model="email" id="inputEmail" class="form-control" placeholder="Email address"  required autofocus >
					
				  </div>

				  <div class="form-label-group">
					<input type="password" v-model="password" id="inputPassword" class="form-control" placeholder="Password" required>
					
				  </div>

				  <button v-model="actLogin" @click="actLogin" class="btn btn-lg btn-primary btn-block text-uppercase">Sign in</button>
			
			  </div>
			</div>
		  </div>
		</div>
	</div>
	
    </div>
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
					console.log(response);
					if(response.data.r!=0){
						this.errors.push(response.data.msg);
					}else{
						if(response.data.portals[0].auth_token){
							localStorage.setItem('auth_token', response.data.portals[0].auth_token);
							localStorage.setItem('user', JSON.stringify(response.data.portals[0]));
							this.$router.push('/contacts')
						}
					}
				})
				.catch(e => {				  
				})
			  }
		 } 
    }
</script>

<style>
	:root {
	  --input-padding-x: 1.5rem;
	  --input-padding-y: .75rem;
	}
	body {
	}
	.login {
        display: flex;
        align-items:center;
        justify-content: center;
		background: ghostwhite;
    }
	.card-signin {
	  border: 0;
	  border-radius: 1rem;
	  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
	}

	.card-signin .card-title {
	  margin-bottom: 1rem;
	  font-weight: 300;
	  font-size: 1.5rem;
	}

	.card-signin .card-body {
	  padding: 2rem;
	}

	.form-signin {
	  width: 100%;
	}

	.form-signin .btn {
	  font-size: 80%;
	  border-radius: 5rem;
	  letter-spacing: .1rem;
	  font-weight: bold;
	  padding: 1rem;
	  transition: all 0.2s;
	}

	.form-label-group {
	  position: relative;
	  margin-bottom: 1rem;
	}

	.form-label-group input {
	  border-radius: 2rem;
	}

	.form-label-group>input,
	.form-label-group>label {
	  padding: var(--input-padding-y) var(--input-padding-x);
	}

	.form-label-group>label {
	  position: absolute;
	  top: 0;
	  left: 0;
	  display: block;
	  width: 100%;
	  margin-bottom: 0;
	  /* Override default `<label>` margin */
	  line-height: 1.5;
	  color: #495057;
	  border: 1px solid transparent;
	  border-radius: .25rem;
	  transition: all .1s ease-in-out;
	}
	.custom-checkbox{text-align: left;}
	
	
</style>
