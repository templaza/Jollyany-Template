<?php
/**
* @package		EasySocial
* @copyright	Copyright (C) 2010 - 2016 Stack Ideas Sdn Bhd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* EasySocial is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Unauthorized Access');
?>
<div id="es" class="mod-es mod-es-users <?php echo $lib->getSuffix();?>">
	<?php if ($users) { ?>
	<ul class="g-list-inline">
		<?php foreach ($users as $user) { ?>
		<li class="t-lg-mr--md t-lg-mb--md">
			<?php echo $lib->html('avatar.user', $user, 'lg', $params->get('popover', true), $params->get('online_state', true), $params->get('popover_position', 'top-left')); ?>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>

	<?php if ($params->get('showall_link', true)) { ?>
	<div class="view-more">
		<a href="<?php echo ESR::users();?>" class="t-lg-mt--xl btn btn-es-default-o"><?php echo JText::_('MOD_EASYSOCIAL_USERS_VIEW_ALL_USERS'); ?></a>
	</div>
	<?php } ?>
</div>
