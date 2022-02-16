<?php
    if (isset($_POST["fbsubmit"])){

        $fbname = $_POST["fbname"];
        $fbemail = $_POST["fbemail"];
        $fbtitles = $_POST["fbtitles"];
        $Details = $_POST["Details"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInput($fbtitles, $Details) !== false){
            header("location: ../feedback.php?error=emptyinput");
            exit();
        }

        createFeedback($conn, $fbname, $fbemail, $fbtitles, $Details);
    }
    else{
        header("location: ../feedback.php");
}

