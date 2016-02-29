<?php

abstract class Controller {
    
    protected $mainView = "";
    protected $tpl_vars = array();
    protected $html;
    protected $route;
    
    function __construct($route) {
        $this->route = $route;
        $this->defineMainView();
        if($this->authenticationRequirement()){
            if(Authentication::isAuthentified())
                return true;
            else
                $this->errorLoadingController("Not authentified");
        }
        if( $this->route->is404()){
            $ct->set404();
        }
    }
    
    /* ---- Protected ---- */
    protected function getView($viewName){
        return URI_TEMPLATE.'/'.$viewName.'.tpl';
    }
    
    protected function GET($name){
        return $this->route->GET($name);
    }
    
    protected function POST($name){
        return $this->route->POST($name);
    }
    
    protected function isGET(){
        return $this->route->getType() == 'GET' ? true : false;
    }
    
    protected function isPOST(){
        return $this->route->getType() == 'POST' ? true : false;
    }
    
    protected function isPUT(){
        return $this->route->getType() == 'PUT' ? true : false;
    }
    
    protected function isDELETE(){
        return $this->route->getType() == 'DELETE' ? true : false;
    }
    
    abstract protected function defineMainView();
    abstract protected function authenticationRequirement();
    abstract protected function errorLoadingController();

    /* ---- Public ---- */
    public function main(){
        $this->displayView();
    }
    
    public function loadView($view){
        $smarty = new Smarty();
        $template = $this->getView($view);
        $smarty->assign($this->tpl_vars);
        $this->html = $smarty->fetch($template);  
    }
    
    public function displayView($view = null){
        if($view === null)
            $view = $this->mainView;
       
        $this->loadView($view);
        echo $this->html;
    }
    
    public function set404(){
        $this->mainView = '404';
    }
    
    /* --- static ---- */
    public static function getController($name, $route){
        $controller = ucfirst($name)."Controller";
        return new $controller($route);
    }
    
}
