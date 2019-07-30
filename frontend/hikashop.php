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
$hikacart               = $template->params->get('hikacart', 0);
$hikacart_module        = $template->params->get('hikacart_module', 0);
if (!$hikacart || !$hikacart_module) {
	return;
}
?>
<div class="jollyany-hikacart mr-3">
    <a href="#" class="jollyany-hikacart-icon" data-toggle="modal" data-target="#jollyany-hikacart-content"><i class="fas fa-shopping-cart mr-1"></i> <?php echo JText::_('TPL_JOLLYANY_YOUR_CART'); ?></a>
    <!-- Modal -->
    <div class="modal fade" id="jollyany-hikacart-content" tabindex="-1" role="dialog" aria-labelledby="jollyany-hikacart-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jollyany-hikacart-title"><?php echo JText::_('TPL_JOLLYANY_YOUR_CART'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
	                <?php echo $template->_loadid($hikacart_module); ?>
                </div>
            </div>
        </div>
    </div>
</div>