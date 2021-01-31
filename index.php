<?php 

require_once("vendor/autoload.php");

use \Slim\slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    $page = new Page();
    $page->setTpl("index");
    

});

$app->get('/admin' ,function(){
    
    $pageAdmim = new PageAdmin();
    
    $pageAdmim->setTpl("index");
 
  }
);


$app->run();

 ?>