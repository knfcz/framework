<?php

class AjaxController extends Controller {
    
    protected $jsonData;
    
    function getJsonData() {
        return $this->jsonData;
    }

    function setJsonData($jsonData) {
        $this->jsonData = $jsonData;
    }

    public function main(){
        $this->sendHeaders();
        echo json_encode($this->jsonData);
    }
    
    protected function authenticationRequirement() {
        return true;
    }
    
    protected function sendHeaders(){
        if(!headers_sent()){
            http_response_code($this->responseCode);
            header('Access-Control-Allow-Origin: *');  
            header("Content-Type: ".$this->responseContentType);
        }
    }

    protected function defineMainView() {
        $this->mainView = "index";
    }

    protected function errorLoadingController() {
        $this->setResponseCode(404);
        $this->mainView = "404";
    }

    protected function initResponseContentType() {
        return "application/json";
    }
    
}
