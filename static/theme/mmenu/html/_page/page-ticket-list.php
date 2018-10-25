<link rel="stylesheet" href="../assets/examples/css/apps/contacts.css">
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
							<h5 class="page-aside-title mt-0 pl-20">FILTER</h5>

							<div class="detail-ticket-setting">
								
								<div class="card-block card-block-custom media clearfix">
									<div class="form-group">
										<label class="form-control-label" for="assignee">Agentss</label>
										<select class="form-control form-control-sm"  id="assignee" >
											<option value="1" selected="">Agent 1</option>
											<option value="2">Agent 2</option>
										</select>
									</div>
								</div>
								<div class="card-block card-block-custom media clearfix">
									<div class="form-group">
										<label class="form-control-label" for="assignee">Groups</label>
										<select class="form-control form-control-sm"  id="assignee" >
											<option value="1" selected="">Group 1</option>
											<option value="2">Group 2</option>
										</select>
									</div>
								</div>
								<div class="card-block card-block-custom media clearfix">
									<div class="form-group">
										<label class="form-control-label" for="assignee">Status</label>
										<select class="form-control form-control-sm"  id="assignee" >
											<option value="1" selected="">Open</option>
											<option value="2">Pending</option>
											<option value="3">Resolved</option>
											<option value="4">Closed</option>
										</select>
									</div>
								</div>
								<div class="card-block card-block-custom media clearfix">
									<div class="form-group">
										<label class="form-control-label" for="assignee">Priority</label>
										<select class="form-control form-control-sm"  id="assignee" >
											<option value="1" selected="">Low</option>
											<option value="2">Medium</option>
											<option value="3">High</option>
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
		<div class="page-main">
			<!-- Contacts Content Header -->
			<div class="page-header">
				<h1 class="page-title"> Ticket List</h1>
			</div>
			<!-- Contacts Content -->
			<div class="page-table-small">
				<div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">
					<!-- Actions -->
					<div class="page-content-actions">
						<div class="float-left">
							<button type="button" class="btn btn-success btn-md empty-btn btn-sm">
								<i class="icon md-plus font-weight-700" aria-hidden="true"></i>
								New ticket
							</button>
						</div>
						
					</div>
					<!-- Contacts -->
					<?php include ('_component/table_ticket_list.php') ?>
					<ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Page -->
<script src="../../global/js/Plugin/sticky-header.js"></script>
<script src="../../global/js/Plugin/action-btn.js"></script>
<script src="../../global/js/Plugin/asselectable.js"></script>
<script src="../../global/js/Plugin/editlist.js"></script>
<script src="../../global/js/Plugin/aspaginator.js"></script>
<script src="../../global/js/Plugin/animate-list.js"></script>
<script src="../../global/js/Plugin/jquery-placeholder.js"></script>
<script src="../../global/js/Plugin/material.js"></script>
<script src="../../global/js/Plugin/selectable.js"></script>
<script src="../../global/js/Plugin/bootbox.js"></script>
<script src="../assets/js/BaseApp.js"></script>
<script src="../assets/js/App/Contacts.js"></script>
<script src="../assets/examples/js/apps/contacts.js"></script>