<template>
	<div class="contact">
		<div class="contactlist-container">
			<h2>Create New Contact</h2>
			<ul class="errors" v-if="errors && errors.length">
				<li v-for="error of errors">
				  {{error}}
				</li>
			</ul>
				<div class="form-group">
				  <input type="text" class="form-control"  placeholder="Name *" v-model="name" />
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" v-model="job_title" placeholder="Job title *" />
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" v-model="company" placeholder="Company" />
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" name="avatar" placeholder="Avatar link" v-model="avatar" />
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="5" v-model="about" placeholder="About"></textarea>
				</div>
				<button @click="addContact" type="submit" class="btn btn-primary" >Save</button>
				<button @click="addContact" type="submit" class="btn btn-secondary" ><router-link to="/contacts">Cancel</router-link></button>
		</div>
	</div>

</template>

<script>
	import axios from 'axios';
	const AuthStr = localStorage.getItem('auth_token');
	const userData = JSON.parse(localStorage.getItem('user'));
	
    export default {
        name: 'Contact',
		data: function () { 
			return {
				name: '',
				job_title: '',
				company: '',
				avatar: '',
				about:'',
				errors: [],
			}
		}		,
        methods: {
            addContact () {
				let flagErr = false
				this.errors = []
                if (this.name === '') {
					this.errors.push('Please enter Name')
					flagErr = true
                    
                }
				if (this.job_title === '') {
					this.errors.push('Please enter Job title')
					flagErr = true
                }
				/*if (this.company === '') {
					this.errors.push('Please enter Company')
					flagErr = true
                }*/
				if(flagErr){
					return false
				}
				const paramStr = "access_token="+AuthStr
				// thực hiện post data
                axios.post(`https://pcc-test.stringee.com/v1/contact?`+paramStr,{
					"name": this.name,
					"job_title": this.job_title,
					"company": this.company,
					"avatar": this.avatar,
					"about": this.about
				})
				.then(response => {
					console.log(response);
					if(response.data.r!=0){
						this.errors.push(response.data.msg);
					}else{
						alert('Add new contact successfully')
						this.$router.push('/contacts')
					}
				})
				.catch(e => {		
					console.log(e); 
				})
            }
        }
    }
    
</script>

<style lang="scss" scoped>
    a {
		color: white;
	}
	a:hover {
		color: white;
	}
</style>