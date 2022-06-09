<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../components/seo.php" ?>
    <title>Techshark - customers</title>
</head>
<body>
    <?php require "../database/actions.php"; ?>
    <div class="container">
        <?php include "../components/header.php" ?>
        <?php include "../components/nav.php" ?>
        <section>
            <h1>Customers</h1>
            <div class="navbar">
                <button class="btn btn-create">New customer</button>
                <button class="btn btn-count">Total count</button>
                <div class="search-bar">
                    <form method='get'>
                        <input type="text" placeholder="Enter a last name..." name="search" id="search">
                        <input type="submit" class="btn btn-filter" value="Search" />
                    </form>
                </div>
            </div>
            <table class="db-output" id="customers_db_output">
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Phone number</th>
                        <th>Email</th>
                        <th>Street</th>
                        <th>Number</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        echo (empty($_GET["search"]) ? fetch_customers_data() : fetch_customers_search_data());
                    ?>
                </tbody>
            </table>

            <div class="modal modal-count hidden">
                <button class="btn-close btn-close-count">&times;</button>
                <h2 style="text-align: center">Total customers count is <?php echo get_customers_count() ?></h2>
            </div>

            <div class="modal modal-create hidden">
                <button class="btn-close btn-close-create">&times;</button>
                <h2>New customer</h2>
                <form method="post" class="form-create-customer">
                    <progress class="progress" max="7" value="0"></progress><br>

                    <label for="fname">First name:</label><br>
                    <input oninput="count_progress()" type="text" name="fname" id="fname" placeholder="Enter first name..." spellcheck="true" required><br>

                    <label for="lname">Last name:</label><br>
                    <input oninput="count_progress()" type="text" name="lname" id="lname" placeholder="Enter last name..." spellcheck="true"  required><br>

                    <label for="phone_number">Phone number:</label><br>
                    <input oninput="count_progress()" type="text" name="phone_number" id="phone_number" placeholder="Enter phone number..." required><br>

                    <label for="email">Email:</label><br>
                    <input oninput="count_progress()" type="email" name="email" id="email" placeholder="Enter email address..." required><br>

                    <label for="street">Street:</label><br>
                    <input oninput="count_progress()" type="text" name="street" id="street" placeholder="Enter street name..." spellcheck="true" required><br>

                    <label for="number">Number:</label><br>
                    <input oninput="count_progress()" type="number" name="number" id="number" min=0 placeholder="Enter house number..." required><br>

                    <label for="city">City:</label><br> 
                    <input oninput="count_progress()" type="text" name="city" id="city" placeholder="Enter city name..." spellcheck="true" required><br>

                    <input type="submit" class="btn btn-submit" name="create" value="Submit">
                </form>
            </div>
            <div class="overlay hidden"></div>
        </section>
        <?php include "../components/footer.php" ?>
    </div>
    <script src="../script/script.js"></script>
    <script src="../script/script-customers.js"></script>
</body>
</html>