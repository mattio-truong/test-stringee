
<div class="body page-profile page-aside-left">

	<div class="page bg-white">
		<div class="page-header pb-0">
			<h1 class="page-title">
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" class="modal-icons float-left mr-10 mr-5"><g fill="none" fill-rule="evenodd"><circle cx="13.75" cy="17.75" r="3.75" fill="#DADFE3"></circle><g stroke-width="1.5" stroke-linecap="round"><path stroke="#6F7C87" d="M29.39 31.39H5.75a2 2 0 0 1-2-2V5.75a2 2 0 0 1 2-2h23.64a2 2 0 0 1 2 2v23.64a2 2 0 0 1-2 2z"></path><path stroke="#000" d="M16.838 16.788a3.448 3.448 0 1 1-6.897 0 3.448 3.448 0 0 1 6.897 0zm-8.375 9.327a3.135 3.135 0 0 1 3.135-3.135h3.583a3.135 3.135 0 0 1 3.136 3.135m9.899-14.26a4.718 4.718 0 1 1-9.435 0 4.718 4.718 0 0 1 9.435 0zm-4.761-1.817v3.436m-1.718-1.718h3.436" stroke-linejoin="round"></path></g></g></svg>
				New contact</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="contact-list.php">Contacts</a></li>
				<li class="breadcrumb-item active">New Contact</li>
			</ol>

		</div>
		<!-- Contacts Content -->
		<div class="page-main page-content p-0">

			<div class="panel-body container-fluid">
				<div class="row row-lg">
					<div class="col-md-12 col-lg-6">
						<form>
							<div class="form-group form-group-sm row">
								<label class="col-md-3 col-form-label font-weight-400">Full Name: </label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-sm" name="name" placeholder="Enter the name of this person" autocomplete="off">
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-md-3 col-form-label font-weight-400">Title: </label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-sm" name="title" placeholder="Enter a title" autocomplete="off">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Email: </label>
								<div class="col-md-9">
									<input type="email" class="form-control form-control-sm" name="email" placeholder="Enter an email address" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Workphone: </label>
								<div class="col-md-9">
									<input type="phone" class="form-control form-control-sm" name="workphone" placeholder="Enter a phone number" autocomplete="off">
								</div>
							</div>
							<div class="form-group  row">
								<label class="col-md-3 col-form-label font-weight-400">Address: </label>
								<div class="col-md-9">
									<textarea class="form-control form-control-sm" placeholder="Enter the address of this person"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Timezone: </label>
								<div class="col-md-9">
									<select class="form-control form-control-sm">
										<option>Timezone 1</option>
										<option>Timezone 2</option>
										<option>Timezone 3</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Language: </label>
								<div class="col-md-9">
									<select class="form-control form-control-sm">
										<option>Language 1</option>
										<option>Language 2</option>
										<option>Language 3</option>
									</select>
								</div>
							</div>
							<div class="form-group form-group-sm form-material row">
								<label class="col-md-3 col-form-label font-weight-400">Tag: </label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="tag" name="tag" placeholder="Type 1 or 2 characters" autocomplete="off">
								</div>
							</div>
							<div class="form-group  row">
								<label class="col-md-3 col-form-label font-weight-400">About: </label>
								<div class="col-md-9">
									<textarea class="form-control form-control-sm" placeholder="Enter some text"></textarea>
								</div>
							</div>
							<div class="form-group form-material row">
								<label class="col-md-3 col-form-label font-weight-400"></label>
								<div class="col-md-9">
									<button type="button" class="btn btn-primary waves-effect waves-classic">ADD CONTACT </button>
									<button type="reset" class="btn btn-default btn-outline waves-effect waves-classic">RESET</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<script src="../assets/js/App/Contacts.js"></script>
<script src="../assets/examples/js/apps/contacts.js"></script>

<!-- Plugins For This Page -->
<!--<link rel="stylesheet" href="../../global/vendor/select2/select2.min.css?v4.0.1">-->

<!-- bootstrap set size select2 -->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" >-->

<!-- Plugins For This Page -->
<!--<script src="../../global/vendor/select2/select2.full.min.js?v4.0.1"></script>-->
<!--<script src="../../global/js/Plugin/select2.min.js?v4.0.1"></script>-->


<!--<script>
	$(document).ready(function () {
		$.fn.select2.defaults.set("theme", "bootstrap");
		$('#tag').select2({
			tags: true
		})
	})
</script>-->