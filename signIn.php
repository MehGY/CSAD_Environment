<body>
    <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal" style="color: white; opacity: 1; font-size: 50px">&times;</span>
        <form class="modal-content" action="/action_page.php">
            <div style="padding-right: 20px; padding-left: 20px">
                <h1>Sign In</h1>
                <p id="message">Please fill in this form to login.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input class="signForm" type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input class="signForm" type="password" placeholder="Enter Password" name="psw" required>

                <label>
                  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign In</button>
                </div>
                
                <p class='mouse' style="text-align: center">Don't have an account? Click <a onclick="create()" style="color:dodgerblue">here</a> to create one.</p>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        };
        
        function create() {
            modal.style.display = "none";
            document.getElementById('id01').style.display = 'block';
        }
    </script>
</body>

    

