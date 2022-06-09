<?php 
    // read customers data from database
    function fetch_customers_data() {
        $result = fetch_data("SELECT 
                    cu.id AS customer_id,
                    first_name,
                    last_name,
                    phone_number,
                    email,
                    street,
                    number,
                    name
                FROM customer cu
                INNER JOIN city c
                ON cu.city_id = c.id
                ");

        if(isset($_GET["search"])) {
            header("Location: customers.php");
        }

        return transform_data_to_table($result);
    }

    // fetch data from database where last name is the same as from user
    function fetch_customers_search_data () {
        $search_name = $_GET["search"];
        $result = fetch_data("SELECT 
                    cu.id AS customer_id,
                    first_name,
                    last_name,
                    phone_number,
                    email,
                    street,
                    number,
                    name
                FROM customer cu
                INNER JOIN city c
                ON cu.city_id = c.id
                WHERE last_name LIKE '%$search_name%'
                ");
        return transform_data_to_table($result);
    }

    function transform_data_to_table($result) {
        $data = "";
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row["customer_id"];
                $fname = $row["first_name"];
                $lname = $row["last_name"];
                $phone = $row["phone_number"];
                $email = $row["email"];
                $street = $row["street"];
                $number = $row["number"];
                $city_name = $row["name"]; 
                
                $data .= "
                <tr>
                    <td>$id</td>
                    <td>$fname</td>
                    <td>$lname</td>
                    <td>$phone</td>
                    <td>$email</td>
                    <td>$street</td>
                    <td>$number</td>
                    <td>$city_name</td>
                    <td class='action'>
                    <a href='?edit=$id' class='btn btn-edit'>Edit</a>
                    <a href='?delete=$id' class='btn btn-delete'>Delete</a>
                    </td>
                </tr> 
                ";
            }
        }
        return $data;
    }
    
    // fetch data from database by id
    function fetch_data_by_id($id) {
        $result = fetch_data("SELECT 
                    cu.id AS customer_id,
                    first_name,
                    last_name,
                    phone_number,
                    email,
                    street,
                    number,
                    name
                FROM customer cu
                INNER JOIN city c
                ON cu.city_id = c.id
                WHERE cu.id = $id");
        return $result->fetch_assoc();
    }
    
    // get customers count
    function get_customers_count() {
        $sql = "SELECT COUNT(id) as count_customers FROM customer";
        $data = fetch_data($sql)->fetch_assoc();
        return $data["count_customers"];
    }


    // check if city exists
    function city_exists($name) {
        $result = fetch_data("SELECT id,name FROM city");
        if($result->num_rows > 0) {
            while($city = $result->fetch_assoc()) {
                if($city["name"] == $name) {
                    return $city["id"];
                }
            }
        }
        return -1;
    }

    // get city id
    function get_city_id($city_name) {
        $city_id = city_exists($city_name);
        if($city_id == -1) {
            insert_data("INSERT INTO city (name) VALUES ('$city_name')");
            $data = fetch_data("SELECT id FROM city WHERE name = '$city_name'")->fetch_assoc();
            $city_id = $data["id"];
        }
        return $city_id;
    }



    // fetch data from database
    function fetch_data($sql) {
        include "../database/connection.php";
        $result = $conn->query($sql);
        return $result;
    } 

    // insert data into database
    function insert_data($sql) {
        include "../database/connection.php";
        if(!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }     
?>