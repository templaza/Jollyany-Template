<?php
/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2019 JoomDev.
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 * 	DO NOT MODIFY THIS FILE DIRECTLY AS IT WILL BE OVERWRITTEN IN THE NEXT UPDATE
 *  You can easily override all files under /frontend/ folder.
 *	Just copy the file to ROOT/templates/YOURTEMPLATE/html/frontend/ folder to create and override
 */
// No direct access.
defined('_JEXEC') or die;
extract($displayData);

// Body
$body_background_color = $template->params->get('body_background_color', '');
$body_text_color = $template->params->get('body_text_color', '');
$body_heading_color = $template->params->get('body_heading_color', '');
$body_link_color = $template->params->get('body_link_color', '');
$body_link_hover_color = $template->params->get('body_link_hover_color', '');

// Header
$header_background_color = $template->params->get('header_bg', '');
$header_text_color = $template->params->get('header_text_color', '');
$header_heading_color = $template->params->get('header_heading_color', '');
$header_link_color = $template->params->get('header_link_color', '');
$header_link_hover_color = $template->params->get('header_link_hover_color', '');
$header_logo_text_color = $template->params->get('header_logo_text_color', '');
$header_logo_text_tagline_color = $template->params->get('header_logo_text_tagline_color', '');
$sticky_header_background_color = $template->params->get('sticky_header_background_color', '');
$topbar_bordercolor = $template->params->get('topbar_bordercolor', '');

// Main Menu
$main_link_color = $template->params->get('main_menu_link_color', '');
$main_link_hover_color = $template->params->get('main_menu_link_hover_color', '');
$main_link_active_color = $template->params->get('main_menu_link_active_color', '');
$sidebar_separate_color = $template->params->get('sidebar_separate_color', '');

// Sticky Menu
$sticky_link_color = $template->params->get('sticky_menu_link_color', '');
$sticky_link_hover_color = $template->params->get('sticky_menu_link_hover_color', '');
$sticky_link_active_color = $template->params->get('sticky_menu_link_active_color', '');

// Dropdown Menu
$dropdown_main_background_color = $template->params->get('dropdown_bg_color', '');
$dropdown_main_link_color = $template->params->get('dropdown_link_color', '');
$dropdown_main_hover_link_color = $template->params->get('dropdown_menu_link_hover_color', '');
$dropdown_main_hover_background_color = $template->params->get('dropdown_menu_hover_bg_color', '');
$dropdown_main_active_link_color = $template->params->get('dropdown_menu_active_link_color', '');
$dropdown_main_active_background_color = $template->params->get('dropdown_menu_active_bg_color', '');
$dropdown_menu_megamenu_border_color = $template->params->get('dropdown_menu_megamenu_border_color', '');

// Mobile OffCanvas
$mobile_background_color = $template->params->get('mobile_backgroundcolor', '');
$mobile_link_color = $template->params->get('mobile_menu_link_color', '');
$mobile_menu_text_color = $template->params->get('mobile_menu_text_color', '');
$off_canvas_button_color = $template->params->get('off_canvas_button_color', '');
$sticky_off_canvas_button_color = $template->params->get('sticky_off_canvas_button_color', '');
$off_canvas_button_color_close = $template->params->get('off_canvas_button_color_close', '');
$mobile_active_link_color = $template->params->get('mobile_menu_active_link_color', '');
$mobile_active_background_color = $template->params->get('mobile_menu_active_bg_color', '');

//Miscellaneous -> Contact Us
$icon_color = $template->params->get('icon_color', '');
$social_icon_color = $template->params->get('social_icon_color', '');

//Extensions
$hikacart_icon_color = $template->params->get('hikacart_icon_color', '');
$login_icon_color = $template->params->get('login_icon_color', '');
?>

<?php
// Body Coloring
$body_styles = [];
if (!empty($body_background_color)) {
   $body_styles[] = 'body{background-color: ' . $body_background_color . ';}';
}
if (!empty($body_text_color)) {
   $body_styles[] = 'body{color: ' . $body_text_color . ';}';
}
if (!empty($body_heading_color)) {
	$body_styles[] = 'h1,h2,h3,h4,h5,h6{color: ' . $body_heading_color . ';}';
}
if (!empty($body_link_color)) {
   $body_styles[] = 'body a{color: ' . $body_link_color . ';}';
}
if (!empty($body_link_hover_color)) {
   $body_styles[] = 'body a:hover{color: ' . $body_link_hover_color . ';}';
}
?>

<?php
// Header Coloring
$header_styles = [];
if (!empty($header_background_color)) {
   $header_styles[] = '.astroid-header-section,.astroid-sidebar-header{ background-color: ' . $header_background_color . ' !important;}';
}
if (!empty($header_text_color)) {
   $header_styles[] = 'header{ color: ' . $header_text_color . ' !important;}';
}
if (!empty($header_heading_color)) {
	$header_styles[] = 'header h1,header h2,header h3,header h4,header h5,header h6{ color: ' . $header_heading_color . ' !important;}';
}
if (!empty($header_link_color)) {
	$header_styles[] = 'header a{ color: ' . $header_link_color . ' !important;}';
}
if (!empty($header_link_hover_color)) {
	$header_styles[] = 'header a:hover{ color: ' . $header_link_hover_color . ' !important;}';
}
if (!empty($header_logo_text_color)) {
   $header_styles[] = '.astroid-logo-text .site-title{ color: ' . $header_logo_text_color . ' !important;}';
}
if (!empty($header_logo_text_tagline_color)) {
   $header_styles[] = '.astroid-logo-text .site-tagline{ color: ' . $header_logo_text_tagline_color . ' !important;}';
}
if (!empty($sticky_header_background_color)) {
   $header_styles[] = '#astroid-sticky-header{ background-color: ' . $sticky_header_background_color . ' !important;}';
}
if (!empty($topbar_bordercolor)) {
	$header_styles[]    = '.top-bar, .top-bar .astroid-contact-info > span,.top-bar .astroid-social-icons > li,.top-bar .jollyany-hikacart, .top-bar .jollyany-login, .top-bar .border-right {border-color:'.$topbar_bordercolor.' !important;}';
}
?>

<?php
// Main Menu Coloring
$main_menu_styles = [];
if (!empty($main_link_color)) {
   $main_menu_styles[] = '.astroid-nav .nav-link{ color: ' . $main_link_color . ' !important;}';
   $main_menu_styles[] = '.astroid-sidebar-menu .nav-link{ color: ' . $main_link_color . ' !important;}';
}
if (!empty($main_link_hover_color)) {
   $main_menu_styles[] = '.astroid-nav .nav-link:hover, .astroid-nav .nav-link:focus{ color: ' . $main_link_hover_color . ' !important;}';
   $main_menu_styles[] = '.astroid-sidebar-menu .nav-link:hover, .astroid-sidebar-menu .nav-link:focus{ color: ' . $main_link_hover_color . ' !important;}';
}
if (!empty($main_link_active_color)) {
   $main_menu_styles[] = '.astroid-nav .nav-link.active{ color: ' . $main_link_active_color . ' !important;}';
   $main_menu_styles[] = '.astroid-sidebar-menu .nav-link.active{ color: ' . $main_link_active_color . ' !important;}';
}
if (!empty($off_canvas_button_color)) {
   $main_menu_styles[] = '.burger-menu-button .inner, .burger-menu-button .inner::before, .burger-menu-button .inner::after { background-color: ' . $off_canvas_button_color . ' !important;}';
}
if (!empty($sidebar_separate_color)) {
	$main_menu_styles[] = '.astroid-sidebar-menu li, .astroid-sidebar-menu li > ul { border-color: ' . $sidebar_separate_color . ' !important;}';
}
?>

<?php
// Sticky Menu Coloring
$sticky_menu_styles = [];
if (!empty($sticky_link_color)) {
	$sticky_menu_styles[] = '#astroid-sticky-header .astroid-nav .nav-link{ color: ' . $sticky_link_color . ' !important;}';
	$sticky_menu_styles[] = '#astroid-sticky-header .astroid-sidebar-menu .nav-link{ color: ' . $sticky_link_color . ' !important;}';
}
if (!empty($sticky_link_hover_color)) {
	$sticky_menu_styles[] = '#astroid-sticky-header .astroid-nav .nav-link:hover, .astroid-nav .nav-link:focus{ color: ' . $sticky_link_hover_color . ' !important;}';
	$sticky_menu_styles[] = '#astroid-sticky-header .astroid-sidebar-menu .nav-link:hover, .astroid-sidebar-menu .nav-link:focus{ color: ' . $sticky_link_hover_color . ' !important;}';
}
if (!empty($sticky_link_active_color)) {
	$sticky_menu_styles[] = '#astroid-sticky-header .astroid-nav .nav-link.active{ color: ' . $sticky_link_active_color . ' !important;}';
	$sticky_menu_styles[] = '#astroid-sticky-header .astroid-sidebar-menu .nav-link.active{ color: ' . $sticky_link_active_color . ' !important;}';
}
if (!empty($sticky_off_canvas_button_color)) {
	$sticky_menu_styles[] = '#astroid-sticky-header .burger-menu-button .inner, #astroid-sticky-header .burger-menu-button .inner::before, #astroid-sticky-header .burger-menu-button .inner::after { background-color: ' . $sticky_off_canvas_button_color . ' !important;}';
}
?>

<?php
// Dropdown Coloring
$dropdown_styles = [];
if (!empty($dropdown_main_background_color)) {
   $dropdown_styles[] = '.nav-submenu, .megamenu-container{ background: ' . $dropdown_main_background_color . ' !important;}';
}
if (!empty($dropdown_main_background_color)) {
   $dropdown_styles[] = '.has-megamenu.open .arrow{ border-bottom-color: ' . $dropdown_main_background_color . ' !important;}';
}
if (!empty($dropdown_main_link_color)) {
   $dropdown_styles[] = '.astroid-nav .megamenu-container .megamenu-title, .astroid-nav .megamenu-container li.nav-item-submenu > a{ color: ' . $dropdown_main_link_color . ' !important;}';
}
if (!empty($dropdown_main_active_link_color)) {
   $dropdown_styles[] = '.astroid-nav .megamenu-container li.nav-item-active > a, .menu_open .menu-go-back .fas{ color: ' . $dropdown_main_active_link_color . ' !important;}';
}
if (!empty($dropdown_main_active_background_color)) {
   $dropdown_styles[] = '.astroid-nav .megamenu-container li.nav-item-active > a{ background-color: ' . $dropdown_main_active_background_color . ' !important;}';
}
if (!empty($dropdown_main_hover_link_color)) {
   $dropdown_styles[] = '.astroid-nav .megamenu-container li > a:hover, .astroid-nav .megamenu-submenu-container .megamenu-submenu li > a:hover{ color: ' . $dropdown_main_hover_link_color . ' !important;}';
}
if (!empty($dropdown_main_hover_background_color)) {
   $dropdown_styles[] = '.astroid-nav .megamenu-container li > a:hover, .astroid-nav .megamenu-submenu-container .megamenu-submenu li > a:hover{ background-color: ' . $dropdown_main_hover_background_color . ' !important;}';
}
if (!empty($dropdown_menu_megamenu_border_color)) {
	$dropdown_styles[] = '.nav-item-megamenu .megamenu-container .col{ border-color: ' . $dropdown_menu_megamenu_border_color . ' !important;}';
}
?>

<?php
// Off-Canvas Coloring
$mobilemenu_styles = [];
if (!empty($mobile_background_color)) {
   $mobilemenu_styles[] = '.astroid-offcanvas, .astroid-mobilemenu, .astroid-mobilemenu-container .astroid-mobilemenu-inner .dropdown-menus,.astroid-offcanvas .burger-menu-button{ background-color: ' . $mobile_background_color . ' !important;}';
}
if (!empty($mobile_menu_text_color)) {
   $mobilemenu_styles[] = '.astroid-offcanvas, .astroid-mobilemenu, .menu_open .menu-indicator-back .fas { color: ' . $mobile_menu_text_color . ' !important;}';
}
if (!empty($mobile_link_color)) {
   $mobilemenu_styles[] = '.astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item a, .astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-indicator .menu-item .fas{ color: ' . $mobile_link_color . ' !important;}';
}
if (!empty($off_canvas_button_color_close)) {
	$mobilemenu_styles[] = '.astroid-offcanvas .burger-menu-button .inner, .astroid-offcanvas .burger-menu-button .inner::before, .astroid-offcanvas .burger-menu-button .inner::after { background-color: ' . $off_canvas_button_color_close . ' !important;}';
}
if (!empty($mobile_active_link_color)) {
   $mobilemenu_styles[] = '.astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.active > a, .astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.active > .nav-header, .astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.nav-item-active > a, .astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.active > .menu-indicator .fas, .astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.nav-item-active .fas{ color: ' . $mobile_active_link_color . ' !important;}';
}
if (!empty($mobile_active_background_color)) {
   $mobilemenu_styles[] = '.astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.active, .astroid-mobilemenu-container .astroid-mobilemenu-inner .menu-item.nav-item-active, .menu-go-back { background-color: ' . $mobile_active_background_color . ' !important;}';
}
?>

<?php
//Miscellaneous -> Contact Us
$miscellaneous          = [];
if (!empty($icon_color)) {
	$miscellaneous[]    = '.astroid-contact-info i[class*="fa-"]{color:' . $icon_color . ' !important;}';
}
if (!empty($social_icon_color)) {
	$miscellaneous[]    = '.astroid-social-icons > li a{color:'.$social_icon_color.' !important;}';
}
?>

<?php
//Extensions
$extensions             = [];
if (!empty($hikacart_icon_color)) {
	$extensions[]       = 'a.jollyany-hikacart-icon i[class*="fa-"]{color:' . $hikacart_icon_color . ' !important;}';
}
if (!empty($login_icon_color)) {
	$extensions[]       = 'a.jollyany-login-icon i[class*="fa-"]{color:' . $login_icon_color . ' !important;}';
}
?>

<?php
   $template->addStyledeclaration(implode('', $body_styles));
   $template->addStyledeclaration(implode('', $header_styles));
   $template->addStyledeclaration(implode('', $main_menu_styles));
   $template->addStyledeclaration(implode('', $sticky_menu_styles));
   $template->addStyledeclaration(implode('', $dropdown_styles));
   $template->addStyledeclaration(implode('', $mobilemenu_styles));
   $template->addStyledeclaration(implode('', $miscellaneous));
   $template->addStyledeclaration(implode('', $extensions));
?>