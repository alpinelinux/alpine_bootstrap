<?php

/**
 * @file
 * template.php
 */

function alpine_bootstrap_preprocess_html(&$variables) {
    drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans', array('type' => 'external'));
}
