<noscript>
	<span>PyroCMS requires that JavaScript be turned on for many of the functions to work correctly. Please turn JavaScript on and reload the page.</span>
</noscript>

<div class="primary_bar">
	<div class="wrapper">
		<div id="welcome">
			<?php echo gravatar($current_user->email, 25); ?> <?php echo anchor('edit-profile', sprintf(lang('cp_logged_in_welcome'), $current_user->display_name . ' <i class="icon-edit icon-white"></i>')); ?>
		</div>

		<nav id="usernav">
			<ul>
				<li><i class="icon-eye-open icon-white"></i> <?php echo anchor('', lang('cp_view_frontend'), 'target="_blank"'); ?></li>
				<li><i class="icon-off icon-white"></i> <?php echo anchor('admin/logout', lang('cp_logout_label')); ?></li>
				<li><i class="icon-question-sign icon-white"></i> <?php echo anchor('admin/help/'.$module_details['slug'], lang('help_label'), array('title' => lang('help_label').'->'.$module_details['name'], 'class' => 'modal')); ?></li>
			</ul>
		</nav>
	</div>
</div>

<div class="secondary_bar" dir=<?php $vars = $this->load->_ci_cached_vars; echo $vars['lang']['direction']; ?>>
	<div class="wrapper">
		<div id="site_logo">
			<h3><?php echo anchor('', $this->settings->site_name, 'target="_blank"'); ?></h3>
		</div>

		<nav id="primary">
			<?php file_partial('navigation'); ?>
		</nav>
	</div>
</div>

<div class="subbar">
	<div class="wrapper">
		<h2><?php echo $module_details['name'] ? anchor('admin/'.$module_details['slug'], $module_details['name']) : lang('global:dashboard'); ?></h2>
	
		<small>
			<?php if ( $this->uri->segment(2) ) { echo '&nbsp; | &nbsp;'; } ?>
			<?php echo $module_details['description'] ? $module_details['description'] : ''; ?>
		</small>

		<?php file_partial('shortcuts'); ?>

	</div>
</div>

<?php if ( ! empty($module_details['sections'])) file_partial('sections'); ?>