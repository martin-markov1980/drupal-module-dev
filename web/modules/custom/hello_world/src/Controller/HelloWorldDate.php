<?php

namespace Drupal\hello_world\Controller;

/**
 * Controller for the date message
 */
class HelloWorldDate {
  public function __invoke() {
    return [
      '#markup' => '15 Oct 2022',
    ];
  }
}
