<html>
    <header>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/sigil.png">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
    <body id="top">
        <?php include 'header.php'; ?>
    
        <!-- Big Hero Image -->
        <div class="hero-image">
          <div class="hero-text">
            <h1 style="font-size:50px">Save Our Beaches</h1>
            <p>Things are getting worse and worse in SG...</p>
            <button type="button" onclick="window.location.href = 'charity.php';">Learn More</button>
          </div>
        </div>
        
        <!-- News Section -->
        <div>
            <h1 class="title">News</h1>
            <p class="details">Keep up with the latest news</p>
            <div class="row" style="padding-right: 50px; padding-left: 50px; padding-bottom: 2em; margin-right: 0px;">
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://static.mothership.sg/1/2022/02/east-coast-park-cny-day-1-crowded.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle" onclick="window.location.href = 'newsInfo.php';">NParks looking into ways to reduce impact of beachgoers on marine creatures</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://static.mothership.sg/1/2022/02/changi-beach-dig.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle" onclick="window.location.href = 'newsInfo.php';">Changi Beach crowded with people digging up sea animals again</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://www.straitstimes.com/multimedia/graphics/assets/facebook_images/2022/01/singapore-protect-sea-levels-rise/singapore-protect-sea-levels-rise.jpg?v=1">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle" onclick="window.location.href = 'newsInfo.php';">Concerns about rising sea levels</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img id="crop" src="https://global.unitednations.entermediadb.net/assets/mediadb/services/module/asset/downloads/preset/Libraries/Production+Library/28-07-2020_Unsplash_face-mask.jpg/image1170x530cropped.jpg">
                        <div style="padding: 0 16px">
                            <h3 class="newsTitle" onclick="window.location.href = 'newsInfo.php';">Healthcare waste from COVID threatens environment</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Forum Discussions -->
        <div class="row">
            <h1 class="title">Popular Discussions</h1>
            <p class="details">Join other users to discuss certain topics</p>
            <div class="col-sm-6 col-sm-offset-3">
                <div class="forumbox">
                    <p class="forumName">Asked by Miguel</p> 
                    <img src="images/noprofile.jpg" class="forumProfile"> 
                    <p class="time">3 hours ago</p> <br>
                    <h3 class="forumTitle">Taiwan Whale Incident</h3>
                    <p class="forumDetails">You know the incident in Taiwan where a huge whale washed up on shore and exploded?</p>
                    <p class="tag">Marine Animals</p>
                    <p style="clear: both"></p>
                    <span class="glyphicon glyphicon-arrow-up" style="margin-left: 10px">59</span>
                    <span class="glyphicon glyphicon-arrow-down" style="margin-left: 10px">-3</span>
                    <span class="glyphicon glyphicon-comment">109</span>
                </div>
                <div class="forumbox">
                    <p class="forumName">Asked by Mayazzz</p> 
                    <img src="images/noprofile.jpg" class="forumProfile"> 
                    <p class="time">15 hours ago</p> <br>
                    <h3 class="forumTitle">Fishing not allowed?</h3>
                    <p class="forumDetails">There are places in SG where people are not allowed to fish but I don't really understand why? Can someone explain to me?</p>
                    <p class="tag">Fishing</p>
                    <p style="clear: both"></p>
                    <span class="glyphicon glyphicon-arrow-up" style="margin-left: 10px">209</span>
                    <span class="glyphicon glyphicon-arrow-down" style="margin-left: 10px">-46</span>
                    <span class="glyphicon glyphicon-comment">2k</span>
                </div>
                <div class="forumbox">
                    <p class="forumName">Asked by Kim</p> 
                    <img src="images/noprofile.jpg" class="forumProfile"> 
                    <p class="time">3 days ago</p> <br>
                    <h3 class="forumTitle">Are NFTs bad?</h3>
                    <p class="forumDetails">Recently, there has been a lot of debate about these things called NFTs and I'm very confused as to what they are. But I've seen people claiming that NFTs harm the environment. Could someone enlighten me?</p>
                    <p class="tag">NFT</p> <p class="tag">Pollution</p>
                    <p style="clear: both"></p>
                    <span class="glyphicon glyphicon-arrow-up" style="margin-left: 10px">122</span>
                    <span class="glyphicon glyphicon-arrow-down" style="margin-left: 10px">-10</span>
                    <span class="glyphicon glyphicon-comment">1.2k</span>
                </div>
            </div>
        </div>
        <p style="clear: both"></p>
        <!-- Charities -->
        <div>
            <div class="row" style="margin-left: 10em; margin-right: 10em; padding: 5em;">
                <h2 class="title">Support Our Cause</h2>
                <p class="details">We need your help to save our beaches. Click <a class="mouse" href="charity.php">here</a> to find out more.</p>
                <div class="col-sm-6">
                    <div class="card" style="padding: 1em">
                        <h2 class="title">DONATE</h2>
                        <p class="details">For every $1, there is 1kg less of trash in our beaches</p>
                        <img class="donationImg center-block" src="https://cdn.statically.io/img/blog.repurpose.global/f=auto%2Cq=80/wp-content/uploads/2019/11/hb-cleanup10-0604_-2.jpg">
                        <button class="donateButt center-block" style="margin-bottom: 0.7em;" onclick="window.location.href = 'donation.php';">Click to Donate</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="padding: 1em">
                        <h2 class="title">VOLUNTEER</h2>
                        <p class="details">Clean up beaches with us!</p>
                        <form>
                            <label><b>Name</b></label>
                            <input class="volForms" type="text" placeholder="Name" required>
                            <label><b>Email</b></label>
                            <input class="volForms" type="text" placeholder="Email" required>
                            <label><b>Phone</b></label>
                            <input class="volForms" type="text" placeholder="Phone" required>
                            <button class="donateButt center-block" type="submit" onclick="volunteer()">Submit</button>
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
                    alert('You need to log in first.';
                    document.getElementById('id02').style.display='block';
                }
                else {
                    window.location.href = 'forumQn.php';
                }
            }
            
            function volunteer() {
                alert('Thank You For Signing Up With Us!');
            }
        </script>
    </body>
</html>

