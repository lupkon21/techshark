<?php
    // create a new review
    if(isset($_POST["create"])) {
        $file_path = "../file/reviews.json";
        $new_data = array("nickname" => $_POST["nickname"], "email" => $_POST["email"], "stars" => $_POST["stars"], "comment" => $_POST["comment"]);

        if(!file_exists($file_path)) {
            $file = fopen($file_path, "a");
            $data = array($new_data);
            fwrite($file,json_encode($data));
            fclose($file);
        } else {
            // get existing data from .json file
            $file = file_get_contents($file_path);
            $data = json_decode($file);

            // add new data to the existing data array
            array_push($data,$new_data);
            
            // encode data to json and write it to .json file
            $data = json_encode($data);
            file_put_contents($file_path,$data);
        }
    }    

    // read customers data from file with reviews
    function fetch_data() {
        $file_path = "../file/reviews.json";
        $data = "";
        if(file_exists($file_path)) {
            $json_data = json_decode(file_get_contents($file_path), true);
            foreach($json_data as $row) {
                $nickname = $row["nickname"];
                $email = $row["email"];
                $stars = $row["stars"];
                $comment = $row["comment"];

                $data .= "
                    <tr>
                        <td>$nickname</td>
                        <td>$email</td>
                        <td>$stars</td>
                        <td>$comment</td>
                    </tr>
                ";
            }
        }
        return $data;
    }

    // get the average review rate
    function get_avg_reviews() {
        $file_path = "../file/reviews.json"; 
        $avg = 0;

        if(file_exists($file_path)) {      
            // get existing data from .json file
            $file = file_get_contents($file_path);
            $data = json_decode($file);


            if(count($data) > 0) {
                foreach($data as $row) {
                    $avg += intval($row->stars);
                    
                }
                $avg = round($avg / count($data), 2);
            }
            
            return $avg ;
        }
    }
?>