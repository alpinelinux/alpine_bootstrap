<?php

/**
 * @file
 * template.php
 */

function alpine_bootstrap_preprocess_html(&$variables) {
    drupal_add_css('//fonts.googleapis.com/css?family=Open+Sans', array('type' => 'external'));
}

/* add boostrap image circle to all images */
function alpine_bootstrap_preprocess_image(&$variables) {
    $variables['attributes']['class'][] = 'img-circle';
}

// allow author pane to use gravatar images
function alpine_bootstrap_preprocess_author_pane(&$variables) {
    if (module_exists('gravatar')) {
        gravatar_preprocess_user_picture($variables);
        $variables['picture'] = $variables['user_picture'];
    }
}
