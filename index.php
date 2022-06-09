<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Lukas Protiva" />
        <meta name="keywords" content="Techshark, eCommerce, electronics, tech, admin" />
        <meta name="description" content="Admin web application for demo Techshark eCommerce" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Techshark - admin</title>
    </head>
    <body>
        <div class="container">
            <header>
                <a href="index.php"><img src="images/logo.png" alt="main-logo" /></a>
            </header>

            <nav>
                <a href="index.php"><img src="images/icons/home.svg" alt="home-icon" /> Home</a>
                <a href="pages/dashboard.php"><img src="images/icons/dashboard.svg" alt="dashboard-icon" /> Dashboard</a>
                <a href="pages/products.php"><img src="images/icons/product.svg" alt="product-icon" /> Products</a>
                <a href="pages/customers.php"><img src="images/icons/customers.svg" alt="customers-icon" /> Customers</a>
                <a href="pages/stocks.php"><img src="images/icons/stock.svg" alt="stock-icon" /> Stocks</a>
                <a href="pages/reviews.php"><img src="images/icons/star.svg" alt="star-icon" /> Reviews</a>
            </nav>

            <section>
                <h1>Home</h1>
                <p class="date"><b><?php echo date("l, jS F Y") ?></b></p>
                <article>
                    <h2>About the Techshark</h2>
                    <p>
                        This project is a demo web application of an eCommerce admin CMS (content management system). In the section dashboard you can see all necessary information about how the
                        eCommerce is doing in general. On the page Products you can find any product which an eCommerce offers. Summary of customers is on the page Customers and on page Stocks is
                        everything about in which stocks the products are located and also in what amount. Satisfaction with Techshark software you can find on the page Reviews.
                    </p>
                </article>
                <article>
                    <h2>Work in progress</h2>
                    <p>This version of the Techshark sofware you are using right now is a first uncompleted version and it is still in a develepment process. That means that all the pages included in the left navbar are not available right now. For now can only try the <b>Customers</b> and the <b>Reviews</b> page.</p>
                </article>
                <article>
                    <h2>The data</h2>
                    <p>All the data used to demonstrate how the project works are fake and randomly generated.</p>
                </article>
                <article>
                    <h2>The License</h2>
                    <p>The whole project is available on <a href="https://github.com/lupkon21/techshark" style="color:#6daffe">GitHub</a> under the MIT License, so feel free to clone it and use it.</p>
                </article>
            </section>

            <footer>
                <p>
                    Designed and built with &#128151; by <a href="https://github.com/lupkon21"><b>Lukas Protiva</b></a>
                </p>
            </footer>
        </div>
    </body>
</html>
