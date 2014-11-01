<?php

/**
 * @file
 * Oomphbase theme implementation to provide preprocess hooks.
 */

/**
 * Override or insert variables into the html template.
 */
function base_theme_preprocess_html(&$variables) {}

/**
 * Override or insert variables into the page template.
 */
function base_theme_preprocess_page(&$variables) {}

/**
 * Override or insert variables into the region template.
 */
function base_theme_preprocess_region(&$variables) {}

/**
 * Override or insert variables into the node template.
 */
function base_theme_preprocess_node(&$variables) {
	// Output a class on the node title
	// @johncionci
	$variables['title_attributes_array']['class'][] = 'node-title';
}

/**
 * Override or insert variables into the block template.
 */
function base_theme_preprocess_block(&$variables) {
	// Output a class on the block title
	// @johncionci
	$variables['title_attributes_array']['class'][] = 'block-title';
}