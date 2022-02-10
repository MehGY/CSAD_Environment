<html lang="en">
    <header>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
        <?php include 'header.html'; ?>
    
        <!-- Big Hero Image -->
        <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px">Save Our Planet</h1>
            <p>Global warming is getting worse year by year but we can still do something...</p>
            <button type="button">Learn More</button>
          </div>
        </div>
        
        <!-- News Section -->
        <div>
            <h1 class="title">Recent News</h1>
            <div class="row" style="padding-right: 50px; padding-left: 50px; margin-right: 0px;">
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://imgs.mongabay.com/wp-content/uploads/sites/20/2020/07/23143643/GP1SU5J0_PressMedia.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">Amazon Has Burnt Down Again</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://i.insider.com/5e5d2aa1fee23d10847a28f8?width=700">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">Trump Is An Idiot</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://lp-cms-production.imgix.net/2020-12/shutterstock_223165042.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">Australia Enforcing Laws Against Coal</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://global.unitednations.entermediadb.net/assets/mediadb/services/module/asset/downloads/preset/Libraries/Production+Library/28-07-2020_Unsplash_face-mask.jpg/image1170x530cropped.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">Healthcare waste from COVID threatens environment</h3>
                        </div>
                    </div>
                </div>
            </div>
            <p class='mouse' href='#' style="color: dodgerblue; text-align: center">View more</p>
        </div>
        
        <!-- Forum Discussions -->
        <div>
            <h1 class="title">Popular Discussions</h1>
            <p class="details">abisdb asiduabsd aosudubabkefvbwn jasbkdanbsdn asiudbkasbdnasbd asbdkajbs KASBDKABS AJb a sduahvJHVJas dJ asjhJB jasjd jhabsd nashdhba</p>
        </div>
        
        <!-- Charities -->
        <div>
            <h1 class="title"> Join the fight</h1>
            <p class="details">These are charities and movements you can support to help fight against global warming</p>
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

