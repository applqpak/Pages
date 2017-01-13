<?php

  class Model
  {
      public function loadPage($page)
      {
          return file_get_contents($page);
      }
  }
