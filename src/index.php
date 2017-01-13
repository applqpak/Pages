<?php

  include 'utils/Controller.php';

  $controller = new Controller();

  if(isset($_REQUEST['page']))
  {
      if(($page = $controller->loadPage($_REQUEST['page'])))
      {
          echo $page;
          return;
      }
      echo 'page not found.';
      return;
  }
