<template>
	<div id="wp-contact-list">
		<!-- Page -->
		<div class="body app-contacts page-aside-left">
			<div class="page bg-white">
			<div class="page-aside">
			  <!-- Contacts Sidebar -->
			  <div class="page-aside-switch">
				<i class="icon md-chevron-left" aria-hidden="true"></i>
				<i class="icon md-chevron-right" aria-hidden="true"></i>
			  </div>
			  <div class="page-aside-inner page-aside-scroll">
				<div data-role="container">
				  <div data-role="content">
						<div class="page-aside-section">
							<div class="list-group">
								<a class="list-group-item justify-content-between" href="javascript:void(0)">
								  <span>
									<i class="icon md-inbox" aria-hidden="true"></i> All contacts
								  </span>
								  <span class="item-right">61</span>
								</a>
							</div>
						</div>
					<div class="page-aside-section">
					  <h5 class="page-aside-title">LABEL</h5>
					  <div class="list-group has-actions">
						<div class="list-group-item" data-plugin="editlist">
						  <div class="list-content">
								<span class="item-right">10</span>
								<span class="list-text">Work</span>
								<div class="item-actions">
								  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
								  <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
								</div>
						  </div>
						  <div class="list-editable">
							<div class="form-group form-material">
							  <input type="text" class="form-control empty" name="label" value="Work">
							  <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
							  aria-label="Close" aria-expanded="true"></button>
							</div>
						  </div>
						</div>
						<div class="list-group-item" data-plugin="editlist">
						  <div class="list-content">
							<span class="item-right">5</span>
							<span class="list-text">Family</span>
							<div class="item-actions">
							  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
							  <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
							</div>
						  </div>
						  <div class="list-editable">
							<div class="form-group form-material">
							  <input type="text" class="form-control empty" name="label" value="Family">
							  <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
							  aria-label="Close" aria-expanded="true"></button>
							</div>
						  </div>
						</div>
						<div class="list-group-item" data-plugin="editlist">
						  <div class="list-content">
							<span class="item-right">16</span>
							<span class="list-text">Private</span>
							<div class="item-actions">
							  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
							  <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
							</div>
						  </div>
						  <div class="list-editable">
							<div class="form-group form-material">
							  <input type="text" class="form-control empty" name="label" value="Private">
							  <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
							  aria-label="Close" aria-expanded="true"></button>
							</div>
						  </div>
						</div>
						<div class="list-group-item" data-plugin="editlist">
						  <div class="list-content">
							<span class="item-right">30</span>
							<span class="list-text">Friends</span>
							<div class="item-actions">
							  <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon md-edit" aria-hidden="true"></i></span>
							  <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon md-delete" aria-hidden="true"></i></span>
							</div>
						  </div>
						  <div class="list-editable">
							<div class="form-group form-material">
							  <input type="text" class="form-control empty" name="label" value="Friends">
							  <button type="button" class="input-editable-close icon md-close" data-toggle="list-editable-close"
							  aria-label="Close" aria-expanded="true"></button>
							</div>
						  </div>
						</div>
						<a id="addLabelToggle" class="list-group-item" href="javascript:void(0)" data-toggle="modal"
						data-target="#addLabelForm">
						  <i class="icon md-plus" aria-hidden="true"></i> Add New Label
						</a>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<!-- Contacts Content -->
			<div class="page-main">
			  <!-- Contacts Content Header -->
			  <div class="page-header">
				<h1 class="page-title">Contact List</h1>
				<div class="page-header-actions">
				  <form>
					<div class="input-search input-search-dark">
					  <i class="input-search-icon md-search" aria-hidden="true"></i>
					  <input type="text" class="form-control" name="" placeholder="Search...">
					</div>
				  </form>
				</div>
			  </div>
			  <!-- Contacts Content -->
			  <div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">
				<!-- Actions -->
				<div class="page-content-actions">
					<div class="float-right">
						<div class="dropdown">
						  <button type="button" class="btn btn-pure" data-toggle="dropdown" aria-expanded="false">
							More
							<span class="icon md-chevron-down" aria-hidden="true"></span>
						  </button>
						  <div class="dropdown-menu" role="menu">
								<a class="dropdown-item" href="javascript:void(0)">More</a>
								<a class="dropdown-item" href="javascript:void(0)">More</a>
						  </div>
						</div>
						<button type="button" class="btn btn-info btn-md empty-btn">Empty All</button>
					</div>
					<div class="btn-group btn-group-flat">
						<div class="dropdown">
						  <button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false"
						  type="button"><i class="icon md-folder" aria-hidden="true"></i></button>
							<div class="dropdown-menu" role="menu">
								<a class="dropdown-item" href="javascript:void(0)">work</a>
								<a class="dropdown-item" href="javascript:void(0)">Family</a>
								<a class="dropdown-item" href="javascript:void(0)">Private</a>
								<a class="dropdown-item" href="javascript:void(0)">Friends</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:void(0)">Trash</a>
								<a class="dropdown-item" href="javascript:void(0)">Spam</a>
							</div>
						</div>
						<div class="dropdown">
							<button class="btn btn-icon btn-pure btn-default" data-toggle="dropdown" aria-expanded="false"
							  type="button"><i class="icon md-tag" aria-hidden="true"></i></button>
								<div class="dropdown-menu" role="menu">
								<a class="dropdown-item" href="javascript:void(0)">work</a>
								<a class="dropdown-item" href="javascript:void(0)">Family</a>
								<a class="dropdown-item" href="javascript:void(0)">Private</a>
								<a class="dropdown-item" href="javascript:void(0)">Friends</a>
							  </div>
						</div>
					</div>
				</div>
			</div>	
				<table v-if="contacts && contacts.length" class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
					  <thead>
						<tr>
						  <th class="pre-cell"></th>
						  <th class="cell-30" scope="col">
							<span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
							  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
							  />
							  <label for="select_all"></label>
							</span>
						  </th>
						  <th class="cell-200" scope="col">Name</th>
						  <th scope="col">Job title</th>
							<th class="cell-120" scope="col">Company</th>
							<th class="cell-200" scope="col">About</th>
						  <th class="suf-cell"></th>
						</tr>
					  </thead>
					  <tbody>
						<tr v-for="contact of contacts" data-url="panel.tpl" data-toggle="slidePanel">
						  <td class="pre-cell"></td>
						  <td class="cell-30">
							<span class="checkbox-custom checkbox-primary checkbox-lg">
							  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
							  />
							  <label for="contacts_1"></label>
							</span>
						  </td>
						  <td class="cell-200">
								<a v-if="contact.avatar" class="avatar" style="display:block" href="javascript:void(0)">
									<img class="img-fluid" src="contact.avatar" alt="contact.name">
								</a>
								{{contact.name}}
						  </td>
						  <td >{{contact.job_title}}</td>
							<td class="cell-120">{{contact.company}}</td>
							<td class="cell-200">{{contact.about}}</td>
						  <td class="suf-cell"></td>
						</tr>						
					  </tbody>
					</table>
				
				<ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
			  </div>
			</div>
		</div>
		<!-- Site Action -->
		<div class="site-action" data-plugin="actionBtn">
			<button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
			  <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
			  <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
			</button>
			<div class="site-action-buttons">
			  <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
				<i class="icon md-delete" aria-hidden="true"></i>
			  </button>
			  <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
				<i class="icon md-folder" aria-hidden="true"></i>
			  </button>
			</div>
		</div>
		<!-- End Site Action -->
		  
		<!-- Add User Form -->
		<div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm" role="dialog" tabindex="-1">
			<div class="modal-dialog modal-simple">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
					  <h4 class="modal-title">Create New Contact</h4>
					</div>
					<div class="modal-body">
					  <form>
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
					  </form>
					</div>
					<div class="modal-footer">
					  <button class="btn btn-primary" data-dismiss="modal" @click="addContact" type="submit">Save</button>
					  <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Add User Form -->
		<!-- Add Label Form -->
		<div class="modal fade" id="addLabelForm" aria-hidden="true" aria-labelledby="addLabelForm" role="dialog" tabindex="-1">
			<div class="modal-dialog modal-simple">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
					  <h4 class="modal-title">Add New Label</h4>
						<ul class="errors" v-if="errors && errors.length">
							<li v-for="error of errors">
								{{error}}
							</li>
						</ul>
					</div>
					<div class="modal-body">
					  <form>
						<div class="form-group">
						  <input type="text" class="form-control" name="lablename" placeholder="Label Name"
						  />
						</div>
					  </form>
					</div>
					<div class="modal-footer">
					  <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
					  <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	import axios from 'axios';
	const AuthStr = localStorage.getItem('auth_token');
	let paramStr = "sort_by=created&sort_order=desc&limit=20&page=1&access_token="+AuthStr
    export default {
		data: function () { 
			return {
				token: localStorage.getItem('auth_token'),
				contacts: [],
				loading: true,
				name: '',
				job_title: '',
				company: '',
				avatar: '',
				about:'',
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
				
			  })
		 },
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
								console.log();
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
