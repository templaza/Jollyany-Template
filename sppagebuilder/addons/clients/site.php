<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2019 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('Restricted access');

class SppagebuilderAddonClients extends SppagebuilderAddons {

	public function render() {

		$settings = $this->addon->settings;
		$class = (isset($settings->class) && $settings->class) ? $settings->class : '';
		$title = (isset($settings->title) && $settings->title) ? $settings->title : '';
		$alignment = (isset($settings->alignment) && $settings->alignment) ? $settings->alignment : '';
		$columns = (isset($settings->count) && $settings->count) ? $settings->count : 2;
		$heading_selector = (isset($settings->heading_selector) && $settings->heading_selector) ? $settings->heading_selector : 'h3';
		$addon_id = '#sppb-addon-' . $this->addon->id;

		$spancolumn =   str_replace('sppb-col-sm-','', $columns);
		$numbercolumn   =   12/$spancolumn;

		$css = '';

		$css .= $addon_id . ' .sppb-addon-clients .sppb-row > div:nth-child('.$numbercolumn.'n) {';
		$css .= 'border-right: none;';
		$css .= '}';
		$doc = JFactory::getDocument();
		$doc->addStyleDeclaration($css);

		$output   = '';
		$output  = '<div class="sppb-addon sppb-addon-clients ' . $alignment . ' ' . $class . '">';

		if($title) {
			$output .= '<'.$heading_selector.' class="sppb-addon-title">' . $title . '</'.$heading_selector.'>';
		}

		$output .= '<div class="sppb-addon-content">';
		$output .= '<div class="sppb-row">';

		foreach ($settings->sp_clients_item as $key => $value) {
			if(isset($value->image) && $value->image) {
				$output .= ($key < $numbercolumn) ? '<div class="' . $columns . ' no-border-top">' : '<div class="' . $columns . '">';
				if(isset($value->url) && $value->url) $output .= '<a '.(isset($value->url_same_window) && $value->url_same_window ? '' : 'target="_blank" rel="noopener noreferrer"').' rel="nofollow" href="'. $value->url .'">';
				$output .= '<img class="sppb-img-responsive" src="' . $value->image . '" alt="' . $value->title . '">';
				if(isset($value->url) && $value->url) $output .= '</a>';
				$output .= '</div>';
			}
		}

		$output  .= '</div>';
		$output  .= '</div>';
		$output  .= '</div>';

		return $output;
	}

	public static function getTemplate(){
		$output = '
		<div class="sppb-addon sppb-addon-clients {{ data.class }} {{ data.alignment }}">
			<# if( !_.isEmpty( data.title ) ){ #><{{ data.heading_selector }} class="sppb-addon-title sp-inline-editable-element" data-id={{data.id}} data-fieldName="title" contenteditable="true">{{ data.title }}</{{ data.heading_selector }}><# } #>
			<div class="sppb-addon-content">
				<div class="sppb-row">
					<# _.each(data.sp_clients_item, function(clients_item, key){ #>
						<# if(clients_item.image){ #>
							<div class="{{ data.count }}">
								<# if(clients_item.url){ #><a {{(clients_item.url_same_window ? "" : \'target=_blank\')}} rel="nofollow" href=\'{{clients_item.url}}\'><# } #>
									<# if(clients_item.image && clients_item.image.indexOf("https://") == -1 && clients_item.image.indexOf("http://") == -1){ #>
										<img class="sppb-img-responsive" src=\'{{ pagebuilder_base + clients_item.image }}\' alt="{{ clients_item.title }}">
									<# } else if(clients_item.image){ #>
										<img class="sppb-img-responsive" src=\'{{ clients_item.image }}\' alt="{{ clients_item.title }}">
									<# } #>
								<# if(clients_item.url){ #></a><# } #>
							</div>
						<# } #>
					<# }); #>
				</div>
			</div>
		</div>
		';

		return $output;
	}
}
