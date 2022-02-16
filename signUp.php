<body>
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" style="color: white; opacity: 1; font-size: 50px">&times;</span>
        <form class="modal-content" action="includes/signup.inc.php" method="post">
            <div style="padding-right: 20px; padding-left: 20px">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="name"><b>Full Name</b></label>
                <input class="signForm" type="text" placeholder="Full Name" name="name" required>
                
                <label for="email"><b>Email</b></label>
                <input class="signForm" type="text" placeholder="Enter Email" name="email" required>

                <label for="username"><b>Username</b></label>
                <input class="signForm" type="text" placeholder="Enter Username" name="uid" required>

                <label for="psw"><b>Password</b></label>
                <input class="signForm" type="password" placeholder="Enter Password" name="pwd" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input class="signForm" type="password" placeholder="Repeat Password" name="pwdrepeat" required>

                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn" name="submit">Sign Up</button>
                </div>
            </div>
        </form>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                } 
                else if ($_GET["error"] == "invaliduid"){
                    echo "<script>alert('Invalid username.')</script>";
                } 
                else if ($_GET["error"] == "invalidemail"){
                    echo "<script>alert('Invalid email.')</script>";
                }
                else if ($_GET["error"] == "passwordsdontmatch"){
                    echo "<script>alert('Passwords do not match.')</script>";
                }
                else if ($_GET["error"] == "usernametaken"){
                    echo "<script>alert('Username taken already. Please choose another name.')</script>";
                }
                else if ($_GET["error"] == "stmtfailed"){
                    echo "<script>alert('Something went wrong. Please try again.')</script>";
                }
                else if ($_GET["error"] == "none"){
                    echo "<script>alert('You have successfully signed up!')</script>";
                }
            }
        ?>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
    </script>
</body>

    