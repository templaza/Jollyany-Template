<?php
/**
* @package SP Page Builder
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2016 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonSocial_follow extends SppagebuilderAddons {

	public function render() {

		$getUri 					= JFactory::getURI();
		$doc 						= JFactory::getDocument();

		// Options
		$class 	 					= (isset($this->addon->settings->class) && $this->addon->settings->class) ? ' ' . $this->addon->settings->class : '';
		$class 						.= (isset($this->addon->settings->social_style) && $this->addon->settings->social_style) ? ' sppb-social-share-style-' 	. str_replace('_', '-', $this->addon->settings->social_style) : '';
		$heading_selector 	= (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'h3';
		$title 						= (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
		$facebook 	                = (isset($this->addon->settings->facebook) && $this->addon->settings->facebook) ? $this->addon->settings->facebook : '';
		$twitter 	                = (isset($this->addon->settings->twitter) && $this->addon->settings->twitter) ? $this->addon->settings->twitter : '';
		$dribbble 	                = (isset($this->addon->settings->dribbble) && $this->addon->settings->dribbble) ? $this->addon->settings->dribbble : '';
		$linkedin 	                = (isset($this->addon->settings->linkedin) && $this->addon->settings->linkedin) ? $this->addon->settings->linkedin : '';
		$pinterest 	                = (isset($this->addon->settings->pinterest) && $this->addon->settings->pinterest) ? $this->addon->settings->pinterest : '';
		$tumblr 	                = (isset($this->addon->settings->tumblr) && $this->addon->settings->tumblr) ? $this->addon->settings->tumblr : '';

//		$doc = JFactory::getDocument();
//		$doc->addStyleDeclaration($this->css());
		$icons_col = 'sppb-col-sm-12';

		$output  = '';
		$output .= '<div class="sppb-addon sppb-addon-social-follow' . $class . '">';
		$output .= '<div class="sppb-social-follow">';
		$output .= ($title) ? '<'.$heading_selector.' class="sppb-addon-title reset-heading">' . $title . '</'.$heading_selector.'>' : '';

		$output .= '<div class="sppb-social-follow-wrap sppb-row">';

		$output .= '<div class="sppb-social-items-wrap ' . $icons_col . '">';
		$output .= '<ul>';
		if ($facebook) {
			$output .= '<li class="sppb-social-share-facebook">';
			$output .= '<a href="' . $facebook . '">';
			$output .= '<i class="fab fa-facebook"></i>';
			$output .= '</a>';
			$output .= '</li>';
		} if ($twitter) {
			//twitter
			$output .= '<li class="sppb-social-share-twitter">';
			$output .= '<a href="' . $twitter. '">';
			$output .= '<i class="fab fa-twitter"></i>';
			$output .= '</a>';
			$output .= '</li>';
		} if ($linkedin) {
			//linkedin
			$output .= '<li class="sppb-social-share-linkedin">';
			$output .= '<a href="' . $linkedin . '" >';
			$output .= '<i class="fab fa-linkedin"></i>';
			$output .= '</a>';
			$output .= '</li>';
		} if ($pinterest) {
			$output .= '<li class="sppb-social-share-pinterest">';
			$output .= '<a href="'.$pinterest.'" >';
			$output .= '<i class="fab fa-pinterest"></i>';
			$output .= '</a>';
			$output .= '</li>';
		} if ($tumblr) {
			$output .= '<li class="sppb-social-share-thumblr">';
			$output .= '<a href="'.$tumblr.'" >';
			$output .= '<i class="fab fa-tumblr"></i>';
			$output .= '</a>';
			$output .= '</li>';
		} if ($dribbble) {
			$output .= '<li class="sppb-social-share-dribbble">';
			$output .= '<a href="'.$dribbble. '" >';
			$output .= '<i class="fab fa-dribbble"></i>';
			$output .= '</a>';
			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';

		return $output;
	}

	public function css() {
		$addon_id = '#sppb-addon-' . $this->addon->id;

		$social_use_border	= (isset($this->addon->settings->social_use_border) && $this->addon->settings->social_use_border) ? $this->addon->settings->social_use_border : '';
		$social_style 	= (isset($this->addon->settings->social_style) && $this->addon->settings->social_style) ? $this->addon->settings->social_style : '';

		$style  = (isset($this->addon->settings->background_color) && $this->addon->settings->background_color && $social_style =='custom') ? 'background-color:' . $this->addon->settings->background_color  . ';' : '';
		$style .= (isset($this->addon->settings->social_border_width) && $this->addon->settings->social_border_width && $social_use_border) ? "border-style: solid; border-width: " . $this->addon->settings->social_border_width  . "px;" : '';
		$style .= (isset($this->addon->settings->social_border_color) && $this->addon->settings->social_border_color && $social_use_border) ? "border-color: " . $this->addon->settings->social_border_color  . ";" : '';
		$style .= (isset($this->addon->settings->social_border_radius) && $this->addon->settings->social_border_radius) ? "border-radius: " . $this->addon->settings->social_border_radius  . ";" : '';
		$hover_style = (isset($this->addon->settings->background_hover_color) && $this->addon->settings->background_hover_color && $social_style =='custom') ? 'background-color:' . $this->addon->settings->background_hover_color  . ';' : '';
		$hover_style .= (isset($this->addon->settings->social_border_hover_color) && $this->addon->settings->social_border_hover_color && $social_use_border) ? 'border-color:' . $this->addon->settings->social_border_hover_color  . ';' : '';

		$css = '';
		if( $style ) {
			$css .= $addon_id . ' .sppb-social-follow-wrap ul li a {' . $style . '}';
		}

		if($hover_style) {
			$css .= $addon_id . ' .sppb-social-follow-wrap ul li a:hover {' . $hover_style . '}';
		}

		if(isset($this->addon->settings->icon_align) && $this->addon->settings->icon_align) {
			$css .= $addon_id . ' .sppb-social-follow-wrap {text-align:' . $this->addon->settings->icon_align . ';}';
		}

		return $css;

	}

}
