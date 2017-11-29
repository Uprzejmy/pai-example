<?php

include $_SERVER['DOCUMENT_ROOT']."/Model/Model.php";
include $_SERVER['DOCUMENT_ROOT']."/View/View.php";

class Controller
{
  public function action()
  {
    $model = new Model();
    $view = new View();

    $view->render($model->getUserBirthday($_GET['user'])->format('Y-m-d'));
  }
}