<?php

namespace app\controllers;

use app\core\Controller;

class About extends Controller
{
  public function index()
  {
    $this->view->render('about.phtml', 'template.phtml');
  }
}
