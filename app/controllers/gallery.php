<?php

namespace app\controllers;

use app\core\Controller;

class Gallery extends Controller
{
  public function index()
  {
    $this->view->render('gallery.phtml', 'template.phtml');
  }
}
