<?php
    session_start();
?>

<body id="top">
    <!-- Navigation Bar at the top -->
    <nav class="navbar navbar-default" style="background-color: #009966; margin: 0px; border: none; border-radius: 0px">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: white">CSAD</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php" style="color: white">Home</a></li>
                <li><a href="forum.php" style="color: white">Forum</a></li>
                <li><a href="#news" style="color: white">News</a></li>
                <li><a href="#helpUs" style="color: white">Help Us</a></li>
                <li><a href="#About" style="color: white">About</a></li>
                <!--<li><form action="phpSearchOption.php" method="post">
                    Search: <input type="text" name="search">
                    <select name="selectSearch">
                        <option value="usersUid">Username</option>
                        <option value="age">Age</option>
                        <option value="gender">Gender</option>
                    </select>
                    <input type="submit">
                    </form>
                </li>-->
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

