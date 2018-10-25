
<div class="body page-profile page-aside-left">

	<div class="page bg-white">
		<div class="page-header pb-0">
			<h1 class="page-title">
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" class="modal-icons float-left mr-10"><g fill="none" fill-rule="evenodd"><path stroke="#6F7C87" stroke-width="1.5" d="M17.944 30.703H7.014a.818.818 0 0 1-.817-.817V9.703c0-.451.366-.817.817-.817h10.93v21.817zm11.042.012h-10.93V3.48c0-.59.605-.986 1.145-.748l10.113 4.441c.298.13.49.424.49.748v21.976c0 .451-.367.818-.818.818z"></path><path fill="#000" stroke="#183247" stroke-width=".5" d="M9.439 13.58h1.303v-1.303H9.439zM9.439 18.158h1.303v-1.304H9.439zM9.439 22.734h1.303v-1.303H9.439zM9.439 27.311h1.303v-1.303H9.439zM13.389 13.58h1.303v-1.303h-1.303zM13.389 18.158h1.303v-1.304h-1.303zM13.389 22.734h1.303v-1.303h-1.303zM13.389 27.311h1.303v-1.303h-1.303z"></path><path fill="#000" stroke="#183247" stroke-width="1.5" d="M20.756 12.75h6.176"></path><path stroke="#000" stroke-width="1.5" d="M20.793 17.449h6.177m-6.301 4.493h6.176m-6.137 4.808h6.177"></path><path stroke="#6F7C87" stroke-width="1.5" d="M3.882 30.8h28.236" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
				New company
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item"><a href="company-list.php">Companies</a></li>
				<li class="breadcrumb-item active">New Company</li>
			</ol>

		</div>
		<!-- Contacts Content -->
		<div class="page-main page-content p-0">

			<div class="panel-body container-fluid">
				<div class="row row-lg">
					<div class="col-md-12 col-lg-6">
						<form>
							<div class="form-group form-group-sm row">
								<label class="col-md-3 col-form-label font-weight-400">Company Name: </label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-sm" name="company_name" placeholder="" autocomplete="off">
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-md-3 col-form-label font-weight-400">Description: </label>
								<div class="col-md-9">
									<textarea class="form-control form-control-sm" placeholder="Write something that describes this company"></textarea>
								</div>
							</div>
							<div class="form-group form-group-sm row">
								<label class="col-md-3 col-form-label font-weight-400">Note: </label>
								<div class="col-md-9">
									<textarea class="form-control form-control-sm" placeholder="Add notes about this company - maybe something about a recent deal, etc."></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Domains for this company: </label>
								<div class="col-md-9">
									<input type="text" class="form-control form-control-sm" name="domain" placeholder="eg: mycompany1.com, mycompany2.com" autocomplete="off">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Health score: </label>
								<div class="col-md-9">
									<select class="form-control form-control-sm">
										<option>--</option>
										<option>At risk</option>
										<option>Doing okay</option>
										<option>Happy</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Account tier: </label>
								<div class="col-md-9">
									<select class="form-control form-control-sm">
										<option>--</option>
										<option>Basic</option>
										<option>Premium</option>
										<option>Enterprise</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Renewal date: </label>
								<div class="col-md-9">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="icon md-calendar" aria-hidden="true"></i>
										</span>
										<input type="text" class="form-control form-control-sm" placeholder="dd/mm/yyyy" data-plugin="datepicker">
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label font-weight-400">Industry: </label>
								<div class="col-md-9">
									<select class="form-control form-control-sm">
										<option>--</option>
										<option>Automotive</option>
										<option>Comsumer Durables and Apparel</option>
										<option>Hotels, Restaurants and Leisure</option>
									</select>
								</div>
							</div>
							<div class="form-group form-material row">
								<label class="col-md-3 col-form-label font-weight-400"></label>
								<div class="col-md-9">
									<button type="button" class="btn btn-primary waves-effect waves-classic">ADD COMPANY </button>
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
<link rel="stylesheet" href="../../global/vendor/select2/select2.min.css?v4.0.1">

	<!-- bootstrap set size select2 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" >

		<!-- Plugins For This Page -->
		<script src="../../global/vendor/select2/select2.full.min.js?v4.0.1"></script>
		<script src="../../global/js/Plugin/select2.min.js?v4.0.1"></script>
		<link rel="stylesheet" href="../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css?v4.0.1">
			<script src="../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js?v4.0.1"></script>
			<!-- PAGE --> 
			<script src="../../global/js/Plugin/bootstrap-datepicker.min.js?v4.0.1"></script>
			<script>
				$(document).ready(function () {
					$.fn.select2.defaults.set("theme", "bootstrap");
					$('#tag').select2({
						tags: true
					})
				})
			</script>