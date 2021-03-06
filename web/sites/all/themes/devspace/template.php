<?php
/**
 * @file
 * template.php
 */
  function devspace_preprocess_html(&$variables) {
    drupal_add_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('type' => 'external'));
    drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700', array('type' => 'external'));
  }

  // function devspace_preprocess_page(&$variables){
  //   $block = module_invoke('search_api_page', 'block_view', 'sbca_search');
  //   $variables['search_box'] = render($block['content']);
  // }

  function devspace_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'views-exposed-form-search-page-1') {
      $form['submit_1']['#value'] = '<span class=\'fa fa-search\' aria-hidden=\'true\'></span><span class=\'sr-only\'>Search</span>'; // Change the text on the submit button
      //$form['search_block_form']['#title'] = t('Nate'); // Change the text on the label element -- Issues...
      //$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty -- Issues...
      $form['keys_1']['#size'] = 15;  // define size of the textfield
      $form['keys_1']['#default_value'] = t('Search'); // Set a default value for the textfield  -- change the next two lines to match this value
      $form['keys_1']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";  //
      $form['keys_1']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    }
  }

  function devspace_menu_tree($variables) {
    if (preg_match("/^menu_tree__book_toc/",$variables['theme_hook_original']) === 1) {
      return theme_menu_tree($variables);
    } else {
      return bootstrap_menu_tree($variables);
    }
  }

  // function devspace_menu_link($variables) {
  //   if (preg_match("/^menu_link__book_toc/",$variables['theme_hook_original']) === 1) {
  //     return theme_menu_link($variables);
  //   } else {
  //     return bootstrap_menu_link($variables);
  //   }
  // }

/**
 * Override or insert variables into various bean templates.
 * dpm() calls below will work if you temporary switch the function call to devspace_process_entity
 */
// function devspace_preprocess_entity(&$variables) {
//   //dpm($variables);
//   $frontpagebeans = array(3, 4, 5, 6); // ids for the front page jumbotron
//   if ($variables['entity_type'] == 'bean') {
//     if ($variables['bean']->type == 'basic_block') {
//       //dpm($variables['bean']->bid);
//       if (in_array($variables['bean']->bid, $frontpagebeans)) {
//         $variables['classes_array'][] = 'col-md-3';
//       }
//     }
//   }
// }
//
//

/**
 * Remove height and width attributes from image styles to aid in reponsiveness
 *
 */

function devspace_preprocess_image(&$variables) {
  $attributes = &$variables['attributes'];

  foreach (array('width', 'height') as $key) {
    unset($attributes[$key]);
    unset($variables[$key]);
  }
}


?>
