<?php

  include 'Model.php';

  class Controller
  {
      private $model;

      public function __construct()
      {
          $this->model = new Model();
      }

      public function loadPage($page)
      {
          if(!(file_exists('pages/' . $page . '/' . $page . '.html'))) return false;
          return $this->model->loadPage('pages/' . $page . '/' . $page . '.html');
      }
  }
