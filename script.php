<?php
/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2019 JoomDev.
 * @license   GNU/GPLv2 and later
 */
// no direct access
defined('_JEXEC') or die;

class tz_jollyanyInstallerScript {

	/**
	 *
	 * Function to run before installing the component
	 */
	public function preflight($type, $parent) {

	}

	/**
	 *
	 * Function to run when installing the component
	 * @return void
	 */
	public function install($parent) {
		$this->removeUnnecessary();
	}

	/**
	 *
	 * Function to run when un-installing the component
	 * @return void
	 */
	public function uninstall($parent) {

	}

	/**
	 *
	 * Function to run when updating the component
	 * @return void
	 */
	function update($parent) {
		$this->removeUnnecessary();
	}

	/**
	 *
	 * Function to update database schema
	 */
	public function updateDatabaseSchema($update) {

	}

	public function removeUnnecessary() {
		$removefile  =   array(
			'frontend/backtotop.php',
			'frontend/colors.php',
			'frontend/comingsoon.php',
			'frontend/contactinfo.php',
			'frontend/custom.php',
			'frontend/dropdownmenumodule.php',
			'frontend/footer.php',
			'frontend/header.php',
			'frontend/hikashop.php',
			'frontend/joomlalogin.php',
			'frontend/language.php',
			'frontend/menumodule.php',
			'frontend/mobilemenu.php',
			'frontend/offcanvas.php',
			'frontend/preloader.php',
			'frontend/social.php',
			'frontend/typography.php',
			'frontend/blog/modules/author_info.php',
			'frontend/blog/modules/badge.php',
			'frontend/blog/modules/comments.php',
			'frontend/blog/modules/image.php',
			'frontend/blog/modules/posttype.php',
			'frontend/blog/modules/rating.php',
			'frontend/blog/modules/readtime.php',
			'frontend/blog/modules/related.php',
			'frontend/blog/modules/social.php',
			'frontend/blog/audio.php',
			'frontend/blog/gallery.php',
			'frontend/blog/quote.php',
			'frontend/blog/review.php',
			'frontend/blog/video.php',
			'frontend/header/horizontal.php',
			'frontend/header/stacked.php',
			'frontend/header/sticky.php',
			'frontend/header/sidebar.php',
			'frontend/header/sidebar.php',
			'astroid/options/article.xml',
			'astroid/options/basic.xml',
			'astroid/options/custom.xml',
			'astroid/options/footer.xml',
			'astroid/options/header.xml',
			'astroid/options/layout.xml',
			'astroid/options/social.xml',
			'astroid/options/theming.xml',
			'astroid/options/typography.xml',
			'astroid/options/colors.xml',
			'astroid/options/dashboard.xml',
			'astroid/options/extensions.xml',
		);
		jimport('joomla.filesystem.file');
		foreach ($removefile as $file) {
			if (JFile::exists(JPATH_ROOT.'/templates/tz_jollyany/'.$file)) {
				JFile::delete(JPATH_ROOT.'/templates/tz_jollyany/'.$file);
			}
		}
	}

	/**
	 *
	 * Function to run after installing the component
	 */
	public function postflight($type, $parent) {

	}

}