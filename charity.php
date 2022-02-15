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
        <?php include 'header.php'; ?>
    
        <!-- Big Hero Image -->
        <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px">Save Our Beaches</h1>
          </div>
        </div>
        
        <div style="margin-right: 100px; margin-left: 100px; margin-top: 5em;">
            <h1 class="title" style="color: white">WHAT IS #TEAMBEACHES?</h1>
            <p class="details" style="color: white">#TeamBeaches is an ambitious project aiming to clean SG beaches in order to protect our marine life - and here's how we're doing it. Scroll down to see more information about local volunteer groups, clean up ships and marine preservation.</p><br>
            <img class="center-block" src="https://assets01.teamassets.net/assets/images/logo-ocean-conservancy.png" width="240"><br>
            <iframe class="center-block" width="560" height="315" src="https://www.youtube-nocookie.com/embed/gAm8eNL8XjQ?rel=0&showinfo=0&modestbranding=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
            
            <div class="row" style="margin-right: 0px; margin-top: 20px;">
                <div class="col-sm-6">
                    <h2 class="title center-block" style="color: #ffcc00; ">THE BIG IDEA</h2>
                    <img class="center-block" src="https://assets01.teamassets.net/assets/images/icon-the-big-idea.png" alt="beach cleanups" width="120"/>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="padding: 15px;">
                        <p class="details">With <b>YOUR</b> help, #TeamBeaches and their partners will go around SG to remove thousands of plastic waste thrown into the ocean and beaches. Professionals will also be there to clean the oceans with the latest technology.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-top: 20px;">
                <div class="col-sm-6">
                    <div class="card vcenter" style="padding: 15px; margin-top: 2em;">
                        <p class="details">Our dear singaporeans are also welcomed to join the team for a cleaner and safer coastline.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2 class="title center-block" style="color: #ffcc00; ">LOCAL HELP</h2>
                    <img class="center-block" src="https://assets01.teamassets.net/assets/images/icon-local-collection.png" alt="accumulation" width="120"/>
                </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-top: 20px;">
                <div class="col-sm-6">
                    <h2 class="title center-block" style="color: #ffcc00; ">PROFESSIONAL ASSISTANCE</h2>
                    <img class="center-block" src="https://assets01.teamassets.net/assets/images/icon-costal-collection.png" alt="extraction" width="120"/>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="padding: 15px;">
                        <p class="details">#TeamBeaches is partnered with the Public Hygiene Council who will provide the necessary equipment for cleanup and its best science to efficiently clean our coastlines.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-right: 0px; margin-top: 20px; margin-bottom: 10em;">
                <div class="col-sm-6">
                    <div class="card vcenter" style="padding: 15px; margin-top: 2em;">
                        <p class="details">The gathered trash will be sent to the appropriate facilities for recycling, otherwise it will be properly disposed of in fashion that will not harm the environment.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2 class="title center-block" style="color: #ffcc00; ">RECYCLING[IF APPLICABLE]</h2>
                    <img class="center-block" src="https://assets01.teamassets.net/assets/images/icon-recycling.png" alt="extraction" width="120"/>
                </div>
            </div>
            
            <h1 class="title" style="color: white; margin-bottom: 1.5em;">JOIN OUR CAUSE</h1>
            <div class="row" style="margin-bottom: 5em;">
                <div class="col-sm-6">
                    <div class="card">
                        <h2 class="title">DONATE</h2>
                        <p class="details">For every $1, there is 1kg less of trash in our beaches</p>
                        <form>
                            <label><b>Amount of money</b></label>
                            <input class="forumbox" type="text" placeholder="Amount" required>
                            <label><b>Name</b></label>
                            <input class="forumbox" type="text" placeholder="Name" required>
                            <label><b>Email</b></label>
                            <input class="forumbox" type="text" placeholder="Email" required>
                            <button class="donateButt center-block" type="submit">Next</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h2 class="title">VOLUNTEER</h2>
                        <p class="details">Clean up beaches with us!</p>
                        <form>
                            <label><b>Name</b></label>
                            <input class="forumbox" type="text" placeholder="Name" required>
                            <label><b>Email</b></label>
                            <input class="forumbox" type="text" placeholder="Email" required>
                            <label><b>Phone</b></label>
                            <input class="forumbox" type="text" placeholder="Phone" required>
                            <button class="donateButt center-block" type="submit">Next</button>
                        </form>
                    </div>
                </div>
            </div>
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