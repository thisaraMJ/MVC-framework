<?php 

class homeController extends Controller{

   public function index($id='',$name=''){
      
      // this is how create a view object
      $this->view('home/loginView',[  
         'name' => $name,                      //these array values are optional
         'id' => $id
      ]);
      
      $this->view->render(); // This is how load the view
   }

   public function aboutUs(){
      $this->view('home/forgotView');
      
      $this->view->render(); // This is how load the view
   }
}