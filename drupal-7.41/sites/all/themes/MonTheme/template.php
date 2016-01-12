<?php

function sippenet_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' › ', $breadcrumb) . '</div>';
    return $output;
  }
}

function sippenet_preprocess_page(&$variables) {
  $site_fields = array();
  if (!empty($variables['site_name'])) {
    $site_fields[] = $variables['site_name'];
  }
  if (!empty($variables['site_slogan'])) {
    $site_fields[] = $variables['site_slogan'];
  }
  $variables['site_title'] = implode(' ', $site_fields);
  if (!empty($site_fields)) {
    $site_fields[0] = '<span>' . $site_fields[0] . '</span>';
  }
  $variables['site_html'] = implode(' ', $site_fields);

  // Set a variable for the site name title and logo alt attributes text.
  $slogan_text = $variables['site_slogan'];
  $site_name_text = $variables['site_name'];
  $variables['site_name_and_slogan'] = $site_name_text . ' ' . $slogan_text;
}


function sippenet_preprocess_html(&$variables) {

  
}