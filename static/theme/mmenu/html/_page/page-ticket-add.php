
<div class="body page-profile page-aside-left">
	<div class="page bg-white">
		<div class="page-aside">
			<!-- Contacts Sidebar -->
			<div class="page-aside-switch">
				<i class="icon md-chevron-left" aria-hidden="true"></i>
				<i class="icon md-chevron-right" aria-hidden="true"></i>
			</div>
			<div class="page-aside-inner">
				<div data-role="container">
					<div data-role="content">

						<div class="page-aside-section page-aside-section-option">
							<h5 class="page-aside-title mt-0 mb-0 pl-20">DETAIL</h5>

							<div class="detail-ticket-setting">
								<div class="card-block card-block-custom media clearfix">
									<div class="form-group form-group-sm">
										<label class="form-control-label" for="assignee">Assignee</label>
										<select class="form-control select2-option input-sm" data-plugin="select2" id="assignee">
											<option selected>-</option>
											<option value="1">Sales 1</option>
											<option value="2">Sales 2</option>
											<option value="3" >Sales 3</option>
											<option value="4">Sales 4</option>
										</select>
									</div>
								</div>

								<div class="card-block card-block-custom media clearfix">
									<div class="form-group form-group-sm">
										<label class="form-control-label" for="ccs">CCs</label>
										<select class="form-control" multiple="multiple" data-plugin="select2" id="ccs">
											<option value="1">heowuayngon@gmail.com</option>
											<option value="2">heowuaysua@gmail.com</option>
											<option value="3">heowuaygame@gmail.com</option>
											<option value="4">heowuaythom@gmail.com</option>
											<option value="5">heowuaythoi@gmail.com</option>
										</select>
									</div>
								</div>

								<div class="card-block card-block-custom media clearfix">
									<div class="form-group form-group-sm">
										<label class="form-control-label" for="tag">Tag</label>
										<select class="form-control" multiple="multiple" data-plugin="select2" id="tag">
										</select>
									</div>
								</div>

								<div class="card-block card-block-custom media clearfix">
									<div class="form-group form-group-sm">
										<label class="form-control-label" for="type">Type</label>
										<select class="form-control input-sm" data-plugin="select2" id="type">
											<option selected>-</option>
											<option value="1">Question</option>
											<option value="2">Incident</option>
											<option value="3">Problem</option>
											<option value="4">Task</option>
										</select>
									</div>
								</div>
								<div class="card-block card-block-custom media clearfix">
									<div class="form-group form-group-sm">
										<label class="form-control-label" for="priority">Priority</label>
										<select class="form-control" data-plugin="select2" id="priority">
											<option selected>-</option>
											<option value="1">Low</option>
											<option value="2">Normal</option>
											<option value="3">Hight</option>
											<option value="4">Urgent</option>
										</select>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Contacts Content -->
		<div class="page-main page-content p-0">
			<div class="card" id="ticket-main-add-new">
				<div class="comments mx-20">
					<div class="comment media">
						<div class="pr-20">
							<a class="avatar avatar-lg" href="javascript:void(0)">
								<!--<img src="../images/avatar-stringee.png" alt="...">-->
							</a>
						</div>
						<div class="media-body">
							<div class="comment-body">
								<div class="form-group">
									<label class="form-control-label" for="subject">Subject</label>
									<input type="text" class="form-control" value="" id="subject" />
								</div>
							</div>
						</div>
					</div>

					<div class="comment media">
						<div class="pr-20 mt-15">
							<a class="avatar avatar-lg" href="javascript:void(0)">
								<img src="../../global/portraits/7.jpg" alt="...">
							</a>
						</div>
						<div class="comment-body media-body wrap-form-reply">
							<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-custom" id="nav-reply-ticket" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" data-toggle="tab" href="#public-reply" aria-controls="public-reply" role="tab">Public reply </a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-toggle="tab" href="#internal-note" aria-controls="internal-note" role="tab">Internal note</a>
								</li>
							</ul>

							<div class="tab-content card-detail-comment" >
								<div class="tab-pane active" id="activities" role="tabpanel">
									<div class="card card-shadow">
										<div id="card-notes">
											<textarea class="form-control" id="content-reply" placeholder="" rows="8"></textarea>
											<div class="card-notes-action">
												<button class="btn btn-pure btn-default icon md-attachment waves-effect waves-classic" type="button"></button>						                  <div class="wrap-btn-actions float-right mt-1 mr-10">
													<button class="btn btn-white btn-sm waves-effect waves-classic mr-10" type="button">CANCEL</button>
													<button class="btn btn-primary btn-sm  waves-effect waves-classic" type="button">ADD NOTE</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>


					</div>


				</div>
			</div>


		</div>


	</div>
</div>



<script src="../assets/js/BaseApp.js"></script>
<script src="../assets/js/App/Contacts.js"></script>
<script src="../assets/examples/js/apps/contacts.js"></script>

<!-- Plugins For This Page -->
<link rel="stylesheet" href="../../global/vendor/select2/select2.min.css?v4.0.1">

<!-- bootstrap set size select2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" >

<!-- Plugins For This Page -->
<script src="../../global/vendor/select2/select2.full.min.js?v4.0.1"></script>
<script src="../../global/js/Plugin/select2.min.js?v4.0.1"></script>


<script>
	$(document).ready(function () {
		$.fn.select2.defaults.set("theme", "bootstrap");
		$('#tag').select2({
			tags: true
		})
	})
</script>