<?php

class IndexController extends Controller {
   
    function __construct() {
        $this->mainView = "index";
        $u = new User();
    }
      
}
