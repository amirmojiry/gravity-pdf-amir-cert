<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;

/**
 * Amir Cert configuration file
 *
 * This configuration file can be overridden by being placed in the PDF_EXTENDED_TEMPLATES/config/ folder
 *
 * If running a multisite that would be the PDF_EXTENDED_TEMPLATES/:id/config/ folder, where :id is the subsite ID number
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The configuration class name should be the same name as the PHP template file name with the following modifications:
 *     The file extension is omitted (.php)
 *     Any hyphens (-) should be replaced with underscores (_)
 *     The class name should be in sentence case (the first character of each word separated by a hyphen (-) or underscore (_) should be uppercase)
 *
 * For instance, a template called core-simple.php or core_simple.php would have a configuration class of "Core_Simple"
 *
 * This naming convention is very important, otherwise the software cannot correctly load the configuration
 *
 * @since 4.0
 */
class Amir_Cert implements Helper_Interface_Config {

	/**
	 * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
	 *
	 * The fields key is based on our \GFPDF\Helper\Helper_Abstract_Options Settings API
	 *
	 * See the Helper_Options_Fields::register_settings() method for the exact fields that can be passed in
	 *
	 * @return array The array, split into core components and custom fields
	 * @since 4.0
	 */
	public function configuration() {

		return [

			/* Enable core fields */
			'core'   => [
				'enable_conditional'   => true,
				'show_empty'           => true,
				'background_image'     => true,
			],

			/* Create custom fields to control the look and feel of a template */
			'fields' => [
				'letter_number' => [
					'id'         => 'letter_number',
					'name'       => esc_html__( 'Number of letter', 'gravity-forms-pdf-extended' ),
					'type'       => 'number',
					'desc'       => esc_html__( 'The number of letter (Shomare-ye name)', 'gravity-forms-pdf-extended' ),
				],
				'letter_date' => [
					'id'         => 'letter_date',
					'name'       => esc_html__( 'Date of letter', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'desc'       => esc_html__( 'The date of letter (Tarikh-e name) in YYY/mm/dd format (jalali calendar)', 'gravity-forms-pdf-extended' ),
				],
				'first_user_data' => [
					'id'         => 'first_user_data',
					'name'       => esc_html__( 'First user data', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'desc'       => esc_html__( 'The first user data', 'gravity-forms-pdf-extended' ),
					'inputClass' => 'merge-tag-support mt-hide_all_fields', /* add merge tag support */
				],
				'first_user_data_top_space' => [
					'id'         => 'first_user_data_top_space',
					'name'       => esc_html__( 'First user data top space', 'gravity-forms-pdf-extended' ),
					'type'       => 'number',
					'desc'       => esc_html__( 'Space from top (in px) for first data', 'gravity-forms-pdf-extended' ),
				],
				'first_user_data_right_space' => [
					'id'         => 'first_user_data_right_space',
					'name'       => esc_html__( 'First user data right space', 'gravity-forms-pdf-extended' ),
					'type'       => 'number',
					'desc'       => esc_html__( 'Space from right (in px) for first data', 'gravity-forms-pdf-extended' ),
				],
				'second_user_data' => [
					'id'         => 'second_user_data',
					'name'       => esc_html__( 'Second user data', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'desc'       => esc_html__( 'Second user data', 'gravity-forms-pdf-extended' ),
					'inputClass' => 'merge-tag-support mt-hide_all_fields', /* add merge tag support */
				],
				'second_user_data_top_space' => [
					'id'         => 'second_user_data_top_space',
					'name'       => esc_html__( 'Second user data top space', 'gravity-forms-pdf-extended' ),
					'type'       => 'number',
					'desc'       => esc_html__( 'Space from top (in px) for second data', 'gravity-forms-pdf-extended' ),
				],
				'second_user_data_right_space' => [
					'id'         => 'second_user_data_right_space',
					'name'       => esc_html__( 'Second user data right space', 'gravity-forms-pdf-extended' ),
					'type'       => 'number',
					'desc'       => esc_html__( 'Space from right (in px) for second data', 'gravity-forms-pdf-extended' ),
				],
			],
		];
	}
}
