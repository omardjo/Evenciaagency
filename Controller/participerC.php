<?php
include_once '../../Model/participer.php';
include_once '../../config.php';
class participerC
{

   
    function participer($user_id, $event_id)
    {
       
        $db = config::getConnexion();
        try {
            $req= $db->prepare(
                "REPLACE INTO `participer` (`user_id`, `event_id`,`participer`) VALUES (?,?,1)"
            );
            $req->execute([$user_id, $event_id]);
            return true;
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }




    function afficherParticipants()
    {
        $sql = 'SELECT * FROM event where  participer = 1  ';
        $db = config::getConnexion();

        try {
            $list = $db->query($sql);
            return ($list);
        } catch (Exception $e) {
            echo 'Erreur' . $e->getMessage();
        }
    }
}


