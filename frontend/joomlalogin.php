<?php
/**
 * @package   Jollyany Framework
 * @author    TemPlaza https://www.templaza.com
 * @copyright Copyright (C) 2009 - 2019 TemPlaza.
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 * 	DO NOT MODIFY THIS FILE DIRECTLY AS IT WILL BE OVERWRITTEN IN THE NEXT UPDATE
 *  You can easily override all files under /frontend/ folder.
 *	Just copy the file to ROOT/templates/YOURTEMPLATE/html/frontend/ folder to create and override
 */
// No direct access.
defined('_JEXEC') or die;
extract($displayData);
$joomlalogin               = $template->params->get('joomlalogin', 0);
$joomlalogin_module        = $template->params->get('joomlalogin_module', 0);
if (!$joomlalogin || !$joomlalogin_module) {
	return;
}
?>
	<div class="jollyany-login mr-3">
		<a href="#" class="jollyany-login-icon" data-toggle="modal" data-target="#jollyany-login-content"><i class="fas fa-user mr-1"></i> <?php echo JText::_('TPL_JOLLYANY_LOGIN'); ?></a>
		<!-- Modal -->
		<div class="modal fade" id="jollyany-login-content" tabindex="-1" role="dialog" aria-labelledby="jollyany-login-title" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="jollyany-login-title"><?php echo JText::_('TPL_JOLLYANY_LOGIN'); ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo $template->_loadid($joomlalogin_module); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
$doc    =   \JFactory::getDocument();
$doc->addScriptDeclaration('
	jQuery(function($){
		$(document).ready(function(){
			$(".jollyany-login-icon").on("click", function(e){
			    e.preventDefault();
			});
		});
	});
	');
?>