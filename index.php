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
        <?php include 'header.php'; ?>
    
        <!-- Big Hero Image -->
        <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px">Save Our Beaches</h1>
            <p>Things are getting worse and worse in SG...</p>
            <button type="button">Learn More</button>
          </div>
        </div>
        
        <!-- News Section -->
        <div>
            <h1 class="title">News</h1>
            <div class="row" style="padding-right: 50px; padding-left: 50px; margin-right: 0px;">
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://static.mothership.sg/1/2022/02/east-coast-park-cny-day-1-crowded.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">NParks looking into ways to reduce impact of beachgoers on marine creatures</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://static.mothership.sg/1/2022/02/changi-beach-dig.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">Changi Beach crowded with people digging up sea animals again</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://www.straitstimes.com/multimedia/graphics/assets/facebook_images/2022/01/singapore-protect-sea-levels-rise/singapore-protect-sea-levels-rise.jpg?v=1">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle">Concerns about rising sea levels</h3>
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

