<?php
class Reviews{
  
    private $user_id;
    private $rating;
    private $disadvantage;
       
    function __construct($user_id,$rating,$disadvantage){
        $this->user_id=$user_id;
        $this->raiting=$rating;
        $this->disadvantage=$disadvantage;
    }

    //getters
  
    function getUser(){
        return $this->user_id;
    }
 
    function getRating(){
        return $this->rating;
    }
       function getDisadvantage(){
        return $this->disadvantage;
    }

    //setters
    function setUser(int $user_id){
        $this->user_id=$user_id;
    }


    function setRating(int $rating){
        $this->rating=$rating;
    }
   
    
    function setDisadvantage(int $disadvantage)
    {
        $this->event_id=$disadvantage;
    }












}



?>