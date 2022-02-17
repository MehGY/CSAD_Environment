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
        <?php
            error_reporting(0);
        ?>
        <?php
            $msg = "";

            // If upload button is clicked ...
            if (isset($_POST['upload'])) {

                    $filename = $_FILES["uploadfile"]["name"];
                    $tempname = $_FILES["uploadfile"]["tmp_name"];
                    $folder = "images/".$filename;

                    $db = mysqli_connect("localhost", "root", "", "csad_project");

                            // Get all the submitted data from the form
                            $sql = "INSERT INTO image (filename) VALUES ('$filename')";

                            // Execute query
                            mysqli_query($db, $sql);

                            // Now let's move the uploaded image into the folder: image
                            if (move_uploaded_file($tempname, $folder)) {
                                    $msg = "Image uploaded successfully";
                            }else{
                                    $msg = "Failed to upload image";
                    }
            }
            $result = mysqli_query($db, "SELECT * FROM image");
            

        ?>
    <body id="top">
        <?php include 'header.php'; ?>
        <?php 
            if($msg == "Image uploaded successfully") {
                while($data = mysqli_fetch_array($result)){
                echo "<img class='center-block' style='width: 10%; margin-top: 10em;' src='".$data['Filename']."'>";
                }
            } else {
                echo '<img class="center-block" src="images/noprofile.jpg" style="width: 10%; margin-top: 10em;">';
            }
        ?>
        <h2 class="title center-block">Welcome 
            <?php
                include './includes/dbh.inc.php';
                include './images/function.inc.php';
                if(isset($_SESSION["useruid"])) {
                    $uid = $_GET["usersUid"];
                    echo $uid;
                }
            ?>
        </h2>
        <div class="card center-block" style="margin-left: 10em; margin-right: 10em; margin-bottom: 10em; padding: 1em;">
            <span class="glyphicon glyphicon-picture"></span>
            <p class="options">Select Profile Picture</p> <p style="clear: both"></p>
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="file" name="uploadfile" value=""/>
                <div style="margin-top: 1em;">
                    <button type="submit" name="upload">UPLOAD</button>
                </div>
            </form>
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


