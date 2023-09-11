<?php

class recommend {

    public function calculateCarSimilarity($conn, $userId, $carId) {
        
        $query = "SELECT carQuality, carCondition FROM ratinglist WHERE username = '$userId' AND carID = '$carId'";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            
            return 0;
        }
    

        if (mysqli_num_rows($result) === 0) {

            return 0;
        }
    
        $userRatings = mysqli_fetch_assoc($result);
    
        
        $query = "SELECT AVG(carQuality) AS avg_quality, AVG(carCondition) AS avg_condition FROM ratinglist";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
           
            return 0;
        }
    
        $averageRatings = mysqli_fetch_assoc($result);
    
       
        $dotProduct = ($userRatings['carQuality'] * $averageRatings['avg_quality']) + ($userRatings['carCondition'] * $averageRatings['avg_condition']);
        $magnitudeUser = sqrt(pow($userRatings['carQuality'], 2) + pow($userRatings['carCondition'], 2));
        $magnitudeAverage = sqrt(pow($averageRatings['avg_quality'], 2) + pow($averageRatings['avg_condition'], 2));
    
        if ($magnitudeUser == 0 || $magnitudeAverage == 0) {
            return 0; 
        }
    
        $similarity = $dotProduct / ($magnitudeUser * $magnitudeAverage);
    
        return $similarity;
    }
}