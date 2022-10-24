<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 * Controller for page with external and internal links
 */
class HelloWorldLinksController extends ControllerBase{

  protected $ex_link;

  public function helloWorldLinks() {
    $drupalURL = Url::fromUri('entity:node/1');
    $drupal_link = \Drupal::service('link_generator')->generate('My link', $drupalURL);
    return [
      '#markup' => $drupal_link,
    ];
  }

}
