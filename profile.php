<html>
    <header>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/sigil.png">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/profile.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
    <body id="top">
        <?php include 'header.php'; ?>
        <img class="center-block" src="images/noprofile.jpg" style="width: 10%; margin-top: 10em;">
        <h2 class="title center-block"> Welcome, <a id="showUsername">insert name</a></h2>
        <div class="card center-block" style="margin-left: 10em; margin-right: 10em; margin-bottom: 10em; padding: 1em;">
            <span class="glyphicon glyphicon-picture"></span>
            <p class="options mouse">Change Profile Picture</p> <p style="clear: both"></p>
            <hr>
            <span class="glyphicon glyphicon-trash" style="color: red"></span>
            <p class="options mouse">Delete Account</p> <p style="clear: both"></p>
            <hr>
            <span class="glyphicon glyphicon-log-out" style="color: red"></span>
            <p class="options mouse" onclick="window.location.href = 'includes/logout.inc.php'">Log Out</p> <p style="clear: both"></p>
        </div>
        
        <?php include 'signUp.php'; ?>
        <?php include 'signIn.php'; ?>
        <?php include 'footer.html'; ?>
        <script>
            var loggedIn = false;

            function askQn() {
                if (loggedIn == false) {
                    alert('You need to log in first.';
                    document.getElementById('id02').style.display='block';
                }
                else {
                    window.location.href = 'forumQn.php';
                }
            }
        </script>
    </body>
</html>


