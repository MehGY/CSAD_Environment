<?php
    session_start();
?>
<!-- Navigation Bar at the top -->
<nav class="navbar navbar-default" style="background-color: #009966; margin: 0px; border: none; border-radius: 0px">
    <div class="container-fluid">
        <div class="navbar-header">
            <img class="navbar-brand" src="images/sigil.png">
            <a class="navbar-brand" href="index.php" style="color: white">CSAD</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php" style="color: white">Home</a></li>
            <li><a href="forum.php" style="color: white">Forum</a></li>
            <li><a href="charity.php" style="color: white">#TeamBeaches</a></li>
            <li><a href="about.php" style="color: white">About Us</a></li>
            <li><a href="donation.php" style="color: white">Donations</a></li>
            <li><form action="phpSearchOption.php" method="post" style="color: white; margin-top: 0.9em;">
                    Search: 
                    <input type="text" name="search" style="border-radius: 10px; color: black">
                    <input type="submit" style="border-radius: 5px; color: black">
                </form>
            </li>
        </ul>
        <ul class="nav navbar-nav" style="float: right">
            <?php
                if(isset($_SESSION["useruid"])){
                    echo "<li><a href='profile.php' style='color: white'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php' style='color: white'>Log out</a></li>";
                }
                else {
                    echo '<li><a onclick="document.getElementById(\'id02\').style.display=\'block\'" style="color: white">Login</a></li>';
                    echo '<li><a onclick="document.getElementById(\'id01\').style.display=\'block\'" style="color: white">Sign Up</a></li>';
                }
            ?>

        </ul>
    </div>
</nav>

