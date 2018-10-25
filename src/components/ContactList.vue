

<template>
	<div id="wp-contact-list">
		<!-- Custom -->
		<link href="/static/theme/mmenu/assets/skins/green.css" rel="stylesheet" type="text/css">
		<link href="/static/theme/mmenu/css/custom.css" rel="stylesheet" type="text/css">
		<Navbar />
		<Sidebar />
		<ContactContent />
		<Footer />
		
	</div>
</template>

<script>
	 
	import axios from 'axios';
	const AuthStr = localStorage.getItem('auth_token');
	console.log('>>>');
	console.log(AuthStr);
	let paramStr = "limit=500&page=1&access_token="+AuthStr
	
	
	import Navbar from "./_common/navbar";
	import Sidebar from "./_common/sidebar";
	import ContactContent from "./_page/contact-list";
	import Footer from "./_common/footer";
    export default {
        name: 'ContactList',
		components:{
			Navbar,
			Sidebar,
			ContactContent,
			Footer
		},
		data: function () { 
			return {
				token: localStorage.getItem('auth_token'),
				contacts: [],
				loading: true,
				errors: []
			}
		},
		mounted () {
			var reloadVa = parseInt(localStorage.getItem('contact'))
			if(reloadVa==0){
				reloadVa = parseInt(reloadVa)+1;
				localStorage.setItem('contact',reloadVa);
				top.location.reload();
			}	
			axios.get(`https://pcc-test.stringee.com/v1/contact?`+paramStr
			)
			  .then(response => {
					this.contacts = response.data.data.rows;
			  })
			  .catch(error => {		
					console.log(error);
				})
			  .finally(() => {
						this.loading = false
						
			  })
				
		 }
    }
    
</script>


