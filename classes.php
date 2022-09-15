<?php



 class task {

     public $description ;

     public $completed=false;

     public function __construct($description){
        
        $this->description=$description;

     }

     public function is_completed(){
          
         return $this->completed;

     }


     public function complete_task(){
        
         $this->completed=true;

     }

 }

 $tasks=[
    new task('study about pdo'),
    new task('Do some more oop'),
    new task('Pliz rest')
 ] ; 

 $tasks[0]->complete_task();


// require'index.view.php';