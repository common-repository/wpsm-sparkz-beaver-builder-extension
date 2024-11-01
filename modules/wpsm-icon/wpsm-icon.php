<?php

/**
 * @class WPSMIconModule
 */
class WPSMIconModule extends FLBuilderModule {

	/**
	 * @method __construct
	 */
	public function __construct()
	{
		parent::__construct(array(
			'name'          => __('Simple Icon', 'wpsm-bbe'),
			'description'   => __('Display an icon and optional title.', 'wpsm-bbe'),
			'category'      => __('WPSM', 'wpsm-bbe'),
			'dir'           => WPSM_BBE_DIR . 'modules/wpsm-icon/',
            'url'           => WPSM_BBE_URL . 'modules/wpsm-icon/',
			'editor_export' => false
		));
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('WPSMIconModule', array(
	'general'       => array( // Tab
		'title'         => __('General', 'wpsm-bbe'), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
				'title'         => '', // Section Title
				'fields'        => array( // Section Fields
					'icon'          => array(
						'type'          => 'icon',
						'label'         => __('Icon', 'wpsm-bbe')
					)
				)
			),
			'link'          => array(
				'title'         => 'Link',
				'fields'        => array(
					'link'          => array(
						'type'          => 'link',
						'label'         => __('Link', 'wpsm-bbe'),
						'preview'       => array(
							'type'          => 'none'
						)
					),
					'link_target'   => array(
						'type'          => 'select',
						'label'         => __('Link Target', 'wpsm-bbe'),
						'default'       => '_self',
						'options'       => array(
							'_self'         => __('Same Window', 'wpsm-bbe'),
							'_blank'        => __('New Window', 'wpsm-bbe')
						),
						'preview'       => array(
							'type'          => 'none'
						)
					)
				)
			),
			'text'          => array(
				'title'         => 'Text',
				'fields'        => array(
					'text'          => array(
						'type'          => 'editor',
						'label'         => '',
						'media_buttons' => false
					)
				)
			)
		)
	),
	'style'         => array( // Tab
		'title'         => __('Style', 'wpsm-bbe'), // Tab title
		'sections'      => array( // Tab Sections
			'colors'        => array( // Section
				'title'         => __('Colors', 'wpsm-bbe'), // Section Title
				'fields'        => array( // Section Fields
					'color'         => array(
						'type'          => 'color',
						'label'         => __('Color', 'wpsm-bbe'),
						'show_reset'    => true
					),
					'hover_color' => array(
						'type'          => 'color',
						'label'         => __('Hover Color', 'wpsm-bbe'),
						'show_reset'    => true,
						'preview'       => array(
							'type'          => 'none'
						)
					),
					'bg_color'      => array(
						'type'          => 'color',
						'label'         => __('Background Color', 'wpsm-bbe'),
						'show_reset'    => true
					),
					'bg_hover_color' => array(
						'type'          => 'color',
						'label'         => __('Background Hover Color', 'wpsm-bbe'),
						'show_reset'    => true,
						'preview'       => array(
							'type'          => 'none'
						)
					),
					'three_d'       => array(
						'type'          => 'select',
						'label'         => __('Gradient', 'wpsm-bbe'),
						'default'       => '0',
						'options'       => array(
							'0'             => __('No', 'wpsm-bbe'),
							'1'             => __('Yes', 'wpsm-bbe')
						)
					)
				)
			),
			'structure'     => array( // Section
				'title'         => __('Structure', 'wpsm-bbe'), // Section Title
				'fields'        => array( // Section Fields
					'size'          => array(
						'type'          => 'text',
						'label'         => __('Size', 'wpsm-bbe'),
						'default'       => '30',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
					'align'         => array(
						'type'          => 'select',
						'label'         => __('Alignment', 'wpsm-bbe'),
						'default'       => 'left',
						'options'       => array(
							'center'        => __('Center', 'wpsm-bbe'),
							'left'          => __('Left', 'wpsm-bbe'),
							'right'         => __('Right', 'wpsm-bbe')
						)
					)
				)
			)
		)
	)
));