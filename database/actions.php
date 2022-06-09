<?php
    include "../database/functions.php";
    // create a new customer
    if(isset($_POST["create"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["phone_number"];
        $email = $_POST["email"];
        $street = $_POST["street"];
        $number = $_POST["number"];
        $city_name = $_POST["city"];

        $city_id = get_city_id($city_name);
        insert_data("INSERT INTO customer (first_name, last_name, phone_number, email, street, number, city_id)
                    VALUES ('$fname', '$lname', '$phone', '$email', '$street', '$number', $city_id);"); 
    
        header("Location: customers.php");
    }

    // delete a customer
    if(isset($_GET["delete"])) {
        $id = $_GET["delete"];
        insert_data("DELETE FROM customer WHERE id=$id");
        header("Location: customers.php");
    }

    
    // edit a customer 
    if(isset($_GET["edit"])) {
        $id = $_GET["edit"];
        $data = fetch_data_by_id($id);
        $fname = $data["first_name"];
        $lname = $data["last_name"];
        $phone = $data["phone_number"];
        $email = $data["email"];
        $street = $data["street"];
        $number = $data["number"];
        $city_name = $data["name"]; 
        echo "
        <div class='modal modal-edit'>
            <button class='btn-close btn-close-edit'>&times;</button>
            <h2>Edit customer #$id</h2>
            <form method='post'>
                <label for='fname_edit'>First name:</label><br>
                <input type='text' name='fname' id='fname_edit' value=$fname spellcheck='true' required><br>
                
                <label for='lname_edit'>Last name:</label><br>
                <input type='text' name='lname' id='lname_edit' value=$lname spellcheck='true'  required><br>
                
                <label for='phone_number_edit'>Phone number:</label><br>
                <input type='text' name='phone_number' id='phone_number_edit' value=$phone required><br>
                
                <label for='email_edit'>Email:</label><br>
                <input type='email' name='email' id='email_edit' value=$email required><br>
                
                <label for='street_edit'>Street:</label><br>
                <input type='text' name='street' id='street_edit' value=$street spellcheck='true' required><br>
                
                <label for='number_edit'>Number:</label><br>
                <input type='number' name='number' id='number_edit' min=0 value=$number required><br>
                
                <label for='city_edit'>City:</label><br>
                <input type='text' name='city' id='city_edit' value=$city_name spellcheck='true' required><br>
                
                <input type='submit' class='btn btn-submit' name='edit' value='Submit'>
            </form>
        </div>   
        <div class='overlay'></div>
        ";
    }
    
    if(isset($_POST["edit"])) {
        $id = $_GET["edit"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["phone_number"];
        $email = $_POST["email"];
        $street = $_POST["street"];
        $number = $_POST["number"];
        $city_name = $_POST["city"];

        $city_id = get_city_id($city_name);
        
        insert_data("UPDATE customer
                SET first_name = '$fname', last_name = '$lname', phone_number = '$phone', email = '$email', street = '$street', number = $number, city_id = $city_id
                WHERE id = $id");
        header("Location: customers.php");
    }
?>