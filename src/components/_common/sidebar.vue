<template>
	<div id="wp-sidebar-menu">
		<div class="site-menubar site-menubar-dark">
			<ul class="site-menu mm-listview scrollable-content">
				<li class="site-menu-item">
					<a class="animsition-link" href="index.html" data-placement="right" data-toggle="tooltip"
					   data-original-title="Home">
						<i class="site-menu-icon md-home" aria-hidden="true"></i>
						<span class="site-menu-title">Home</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="company-list.php" data-placement="right" data-toggle="tooltip"
					   data-original-title="Company">
						<i class="site-menu-icon md-city-alt" aria-hidden="true"></i>
						<span class="site-menu-title">Company</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="contact-list.php" data-placement="right" data-toggle="tooltip"
					   data-original-title="Contact">
						<i class="site-menu-icon md-account-box" aria-hidden="true"></i>
						<span class="site-menu-title">Contact</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="index.html" data-placement="right" data-toggle="tooltip"
					   data-original-title="Filter">
						<i class="site-menu-icon md-label" aria-hidden="true"></i>
						<span class="site-menu-title">Filter</span>
					</a>
				</li>
				<li class="site-menu-item">
					<a class="animsition-link" href="index.html" data-placement="right" data-toggle="tooltip"
					   data-original-title="Report">
						<i class="site-menu-icon md-chart" aria-hidden="true"></i>
						<span class="site-menu-title">Report</span>
					</a>
				</li>

				<li class="site-menu-item">
					<a class="animsition-link" href="index.html" data-placement="right" data-toggle="tooltip"
					   data-original-title="Settings">
						<i class="site-menu-icon md-settings" aria-hidden="true"></i>
						<span class="site-menu-title">Setting</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</template>
<script>
    export default {
		name:"wp-sidebar-menu",
		data(){
			return {}
		}
    }
</script>