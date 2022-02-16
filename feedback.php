<html lang="en">
    <header>
        <title>Save Our Beaches!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link link rel="stylesheet" type="text/css" href="css/charity.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
    <body id="top">
        <?php include 'header.php'; ?>
        <div class="card" style="margin-right: 10em; margin-left: 10em; margin-bottom: 5em; margin-top: 2.5em; padding: 2.5em;">
            <h1 class="title" style="margin-top: 0px;">Feedback</h1>
            <form action="includes/feedback.inc.php" method="post">
                <label><b>Name</b></label>
                <input class="forumbox" type="text" name="fbname" placeholder="Name">
                <label><b>Email</b></label>
                <input class="forumbox" type="text" name="fbemail" placeholder="Email">
                <label><b>Subject</b></label>
                <input class="forumbox" type="text" name="fbtitles" placeholder="Subject">
                <label><b>Details/Message: </b></label>
                <textarea class="forumbox" type="text" name="Details" rows="10" cols="50" placeholder="Please describe in more detail"></textarea>
                <button class="donateButt center-block" type="submit" name="fbsubmit">Submit</button>
            </form>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in Subject and Details/Message!</p>";
                    } 
                }
            ?>          
        </div>
        <?php include 'signUp.php'; ?>
        <?php include 'signIn.php'; ?>
        <?php include 'footer.html'; ?>
        <script>
            var loggedIn = false;

            function askQn() {
                if (loggedIn == false) {
                    document.getElementById('id02').style.display='block';
                    document.getElementById("message").innerHTML = "You must login before you can start asking questions.";
                }
                else {
                    window.location.href = 'forumQn.php';
                }
            }
        </script>
    </body>
</html>

