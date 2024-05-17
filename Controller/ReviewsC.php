<?php
include_once '../../Model/Reviews.php';
include_once '../../config.php';
class ReviewsC
{

    function enregistrerReviews($user_id, $rating, $disadvantage)
    {
        $db = config::getConnexion();
        try {
            $req= $db->prepare(
                "REPLACE INTO `reviews` (`user_id`, `rating`, `disadvantage`) VALUES (?,?,?)"
            );
            $req->execute([$user_id, $rating, $disadvantage]);
            return true;
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    function afficherReviews($user_id)
    {
        $sql = "SELECT * from reviews where `user_id`=$user_id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $ratings = [];
            while ($row = $query->fetch()) {
                $ratings[$row["user_id"]] = $row["rating"];
            }
            return $ratings;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    // (E) GET AVERAGE STAR RATING // afficher la somme des 'reviews'
    function avg()
    {
        $db = config::getConnexion();



        $sql = ("SELECT `user_id`, ROUND(AVG(`rating`), 2) `avg`, COUNT(`user_id`) `num`
       FROM `reviews`
           GROUP BY `user_id`");
        $req = $db->prepare($sql);
        $req->execute();
        $average = [];
        while ($row = $req->fetch()) {
            $average[$row["user_id"]] = [
                "avg" => $row["avg"], // AVERAGE RATING
                "num" => $row["num"] // NUMBER OF REVIEWS
            ];
        }
        return $average;
    }
}

$_STARS = new ReviewsC;
