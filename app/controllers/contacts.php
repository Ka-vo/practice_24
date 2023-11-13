<?php

namespace app\controllers;

use app\core\Controller;

class Contacts extends Controller
{
  public function index()
  {
    $this->view->render('contacts.phtml', 'template.phtml');
  }
}
