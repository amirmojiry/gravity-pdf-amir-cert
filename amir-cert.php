<?php

/*
 * Template Name: Amir Cert
 * Version: 0.0.1
 * Description: A template for certifications with two custom fields.
 * Author: AmirHossein Mojiri
 * Author URI: https://amirmojiri.ir
 * Group: AmirMojiri
 * License: GPLv2
 * Required PDF Version: 4.0-alpha
 * Tags: Header, Footer, Background, Optional HTML Fields, Optional Page Fields, Field Border Color
 */

/* Prevent direct access to the template */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}

/*
 * All Gravity PDF 4.x templates have access to the following variables:
 *
 * $form (The current Gravity Form array)
 * $entry (The raw entry data)
 * $form_data (The processed entry data stored in an array)
 * $settings (the current PDF configuration)
 * $fields (an array of Gravity Form fields which can be accessed with their ID number)
 * $config (The initialised template config class – eg. /config/amir-cert.php)
 * $gfpdf (the main Gravity PDF object containing all our helper classes)
 * $args (contains an array of all variables - the ones being described right now - passed to the template)
 */

?>

<!-- Include styles needed for the PDF -->
<style>

</style>

<!-- Output our HTML markup -->
<?php

/*
 * Load our core-specific styles from our PDF settings which will be passed to the PDF template $config array
 */
$show_form_title      = ( ! empty( $settings['show_form_title'] ) && $settings['show_form_title'] === 'Yes' ) ? true : false;
$show_page_names      = ( ! empty( $settings['show_page_names'] ) && $settings['show_page_names'] === 'Yes' ) ? true : false;
$show_html            = ( ! empty( $settings['show_html'] ) && $settings['show_html'] === 'Yes' ) ? true : false;
$show_section_content = ( ! empty( $settings['show_section_content'] ) && $settings['show_section_content'] === 'Yes' ) ? true : false;
$enable_conditional   = ( ! empty( $settings['enable_conditional'] ) && $settings['enable_conditional'] === 'Yes' ) ? true : false;
$show_empty           = ( ! empty( $settings['show_empty'] ) && $settings['show_empty'] === 'Yes' ) ? true : false;

/**
 * Set up our configuration array to control what is and is not shown in the generated PDF
 *
 * @var array
 */
$html_config = array(
	'settings' => $settings,
	'meta'     => array(
		'echo'                     => true, /* whether to output the HTML or return it */
		'exclude'                  => true, /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
		'empty'                    => $show_empty, /* whether to show empty fields or not. Default is false */
		'conditional'              => $enable_conditional, /* whether we should skip fields hidden with conditional logic. Default to true. */
		'individual_products'      => false, /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
		'enable_css_ready_classes' => true, /* Whether to enable or disable Gravity Forms CSS Ready Class support in your PDF */
	),
);

/*
 * Generate our HTML markup
 *
 * You can access Gravity PDFs common functions and classes through our API wrapper class "GPDFAPI"
 */
$pdf = GPDFAPI::get_pdf_class();

$letter_number					= isset( $settings['letter_number'] ) ? $settings['letter_number'] : '';
$letter_date					= isset( $settings['letter_date'] ) ? $settings['letter_date'] : '';
$first_user_data				= isset( $settings['first_user_data'] ) ? $settings['first_user_data'] : '';
$first_user_data_top_space		= isset( $settings['first_user_data_top_space'] ) ? $settings['first_user_data_top_space'] : 0;
$first_user_data_right_space	= isset( $settings['first_user_data_right_space'] ) ? $settings['first_user_data_right_space'] : 0;
$second_user_data				= isset( $settings['second_user_data'] ) ? $settings['second_user_data'] : '';
$second_user_data_top_space		= isset( $settings['second_user_data_top_space'] ) ? $settings['second_user_data_top_space'] : 0;
$second_user_data_right_space	= isset( $settings['second_user_data_right_space'] ) ? $settings['second_user_data_right_space'] : 0;

?>

<p style="position: absolute; top: <?= $first_user_data_top_space ?>px; right:<?= $first_user_data_right_space ?>px;">
	<?= $first_user_data ?>
</p>
<p style="position: absolute; top: <?= $second_user_data_top_space ?>px; right:<?= $second_user_data_right_space ?>px;">
	<?= $second_user_data ?>
</p>