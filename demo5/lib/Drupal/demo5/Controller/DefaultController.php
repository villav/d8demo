<?php

namespace Drupal\demo5\Controller;

use Drupal\Core\Controller\ControllerBase;


class DefaultController extends ControllerBase {


  /**
   * helloAction
   * @param  string $name Get
   * @return [type]       [description]
   */
  public function helloAction($name) {
    return "Hello " . $name . "!";
  }
}
