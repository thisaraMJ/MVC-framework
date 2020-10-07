<?php 

class divisionalController extends Controller{

   public function index(){
      $this->view('divisionalSec/indexView');
      
      $this->view->render(); // This is how load the view
   }

  
}