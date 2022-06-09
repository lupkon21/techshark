<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../components/seo.php" ?>
    <title>Techshark - reviews</title>
</head>
<body>
    <?php require "../file/actions-file.php" ?>
    <div class="container">
        <?php include "../components/header.php" ?>
        <?php include "../components/nav.php" ?>
        <section>
            <h1>Reviews</h1>
            <div class="navbar">
                <button class="btn btn-create">New review</button>
                <button class="btn btn-rev-avg">Average rate</button>
            </div>
            <table class="db-output">
                <thead>
                    <tr>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>Stars</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       echo (fetch_data());
                    ?>
                </tbody>
            </table>

            <div class="modal modal-rev-avg hidden">
                <button class="btn-close btn-close-rev-avg">&times;</button>
                <h2 style="text-align: center">The average review rate is <?php echo get_avg_reviews() ?> stars</h2>
            </div>

            <div class="modal modal-create hidden">
                <button class="btn-close btn-close-create">&times;</button>
                <h2>New review</h2>
                <form method="post">
                    <label for="nickname">Nickname</label><br>
                    <input type="text" name="nickname" id="nickname" placeholder="Enter a nickname..." spellcheck="true"  required><br>

                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" placeholder="Enter email address..." spellcheck="true" required><br>

                    <label for="stars">Stars:</label><br>
                    <input type="number" name="stars" id="stars" placeholder="Enter star count (1-5)..." min=1 max=5 step=1 required><br>
                    
                    <label for="comment">Comment:</label><br>
                    <textarea name="comment" id="comment" placeholder="Enter a comment..." spellcheck="true"></textarea><br>

                    <input type="submit" class="btn btn-submit-review" name="create" value="Submit">
                </form>
            </div>
            <div class="overlay hidden"></div>
        </section>
        <?php include "../components/footer.php" ?>
    </div>
    <script src="../script/script.js"></script>
    <script src="../script/script-reviews.js"></script>
</body>
</html>