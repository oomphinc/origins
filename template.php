<?php

/**
 * @file
 * origins theme implementation to provide preprocess hooks.
 */

/**
 * Override or insert variables into the html template.
 */
function origins_preprocess_html(&$variables) {}

/**
 * Override or insert variables into the page template.
 */
function origins_preprocess_page(&$variables) {}

/**
 * Override or insert variables into the region template.
 */
function origins_preprocess_region(&$variables) {}

/**
 * Override or insert variables into the node template.
 */
function origins_preprocess_node(&$variables) {
	// Output a class on the damn node title
	$variables['title_attributes_array']['class'][] = 'node-title';
}

/**
 * Override or insert variables into the block template.
 */
function origins_preprocess_block(&$variables) {
	// Output a class on the damn block title
	$variables['title_attributes_array']['class'][] = 'block-title';
}