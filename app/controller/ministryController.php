<?php 

class ministryController extends Controller{

   public function index(){
      $this->view('ministry/ministryView');
      
      $this->view->render(); // This is how load the view
   }

  
}