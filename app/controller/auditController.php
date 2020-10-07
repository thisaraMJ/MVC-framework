<?php 

class auditController extends Controller{

   public function index(){
      $this->view('auditor/indexView');
      
      $this->view->render(); // This is how load the view
   }

  
}