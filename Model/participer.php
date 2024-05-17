<?php
class participer{
  
    private $user_id;
    private $event_id;
    private $participer;
       
    function __construct($user_id,$event_id,$participer){
        $this->user_id=$user_id;
        $this->event_id=$event_id;
        $this->participer=$participer;
    }

    //getters
  
    function getUser(){
        return $this->user_id;
    }
 
    function getEvent(){
        return $this->event_id;
    }
       function getParticiper(){
        return $this->participer;
    }

    //setters
    function setUser(int $user_id){
        $this->user_id=$user_id;
    }


    function setRating(int $event_id){
        $this->event_id=$event_id;
    }
   
    
    function setDisadvantage(int $participer)
    {
        $this->participer=$participer;
    }












}



?>