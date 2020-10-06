<?php 
class Controller{
   protected $view;

   public function view($viewName,$data=[]){

      $this->view = new View($viewName,$data);
      return $this->view;
   }
}