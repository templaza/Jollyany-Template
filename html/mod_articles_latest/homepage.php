<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$document	= JFactory::getDocument();
$document->addStyleSheet('templates/tz_jollyany/assets/owl.carousel.min.css');
$document->addStyleSheet('templates/tz_jollyany/assets/owl.theme.default.min.css');
$document->addScript('templates/tz_jollyany/assets/owl.carousel.min.js');
$column     =   (int)str_replace('column_','', $moduleclass_sfx);
if (!$column) {
    $column =   3;
}
?>
<ul class="owl-carousel home-latestnews <?php echo $moduleclass_sfx; ?>">
    <?php foreach ($list as $item) : ?>
        <li itemscope itemtype="https://schema.org/Article">
            <div class="media pb-3">
                <?php echo JLayoutHelper::render('joomla.content.intro_image', $item); ?>
            </div>
            <a href="<?php echo $item->link; ?>" itemprop="url">
                <h3 itemprop="name"><?php echo $item->title; ?></h3>
            </a>
            <div class="info muted mb-2">
                <div class="created mr-3">
                    <i class="far fa-clock mr-1"></i>
                    <time><?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC')); ?></time>
                </div>
                <div class="hits">
                    <i class="far fa-eye mr-1"></i>
                    <?php echo $item->hits; ?>
                </div>
            </div>
            <div class="desc">
                <?php echo $item->introtext; ?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.home-latestnews').owlCarousel({
            loop:true,
            margin:30,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:<?php echo $column; ?>
                }
            }
        })
    });
</script>