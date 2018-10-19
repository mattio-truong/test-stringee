<template>
	<div class="contact">
		<div class="contactlist-container">
			<h2>Contact list</h2>
			<div v-if="loading">Loading...</div>
			<table v-if="contacts && contacts.length" class="table table-striped" id="example">
			  <thead>
				<tr>
				  <th scope="col">Name</th>
				  <th scope="col">Job title</th>
				  <th scope="col">Company</th>
				  <th scope="col">Avatar</th>
				  <th scope="col">About</th>
				  <th scope="col">Created</th>
				</tr>
			  </thead>
			  <tbody>
				<tr v-for="contact of contacts" >
				  <td>{{contact.name}}</td>
				  <td>{{contact.job_title}}</td>
				  <td>{{contact.company}}</td>
				  <td>
					<div v-if="contact.avatar">
					  <img src="contact.avatar" />
					</div>
					
				  </td>
				  <td>{{contact.about}}</td>
				  <td> {{ contact.created }}</td>
				</tr>
				
			  </tbody>
			</table>
			<ul v-if="errors && errors.length">
				<li v-for="error of errors">
				  {{error.message}}
				</li>
			</ul>
			<button type="button" class="btn btn-primary"><router-link to="/add-contact">Add new contact</router-link></button>
		</div>
	</div>

</template>

<script>
	import axios from 'axios';
	const AuthStr = localStorage.getItem('auth_token');
	let paramStr = "limit=500&page=1&access_token="+AuthStr
    export default {
        name: 'ContactList',
		data: function () { 
			return {
				token: localStorage.getItem('auth_token'),
				contacts: [],
				loading: true,
				errors: []
			}
		},
		mounted () {
			axios.get(`https://pcc-test.stringee.com/v1/contact?`+paramStr
			)
			  .then(response => {
				console.log(response.data.data);
				this.contacts = response.data.data.rows;
			  })
			  .catch(error => {		
				console.log(error);
				})
			  .finally(() => {
				this.loading = false
				$(document).ready(function() {
					$('#example').DataTable(
						{
							"order": [[ 5, "desc" ]]
						}
					);
				} );
			  })
		 }
    }
    
</script>

<style>
    .contactlist-container{
        margin-top:60px
    }
	a {
		color: white;
	}
	a:hover {
		color: white;
	}
	
</style>