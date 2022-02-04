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
            <h2 class="title">Recent News</h2>
            <div class="row" style="padding-right: 50px; padding-left: 50px;">
                <div class="col-sm-4">
                    <div class="card">
                        <img id="crop" src="https://imgs.mongabay.com/wp-content/uploads/sites/20/2020/07/23143643/GP1SU5J0_PressMedia.jpg">
                        <div style="padding: 0 16px">
                            <h4 id="cardDetails" style="font-weight: bold">Amazon Has Burnt Down Again</h4>
                            <p id="cardDetails">jashdvjha ajshdva sdjhasjd a sdhabsdjjaks d s a sdasbabs a sda as da  d</p>
                            <button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img id="crop" src="https://i.insider.com/5e5d2aa1fee23d10847a28f8?width=700">
                        <div style="padding: 0 16px">
                            <h4 id="cardDetails" style="font-weight: bold">Trump Is An Idiot</h4>
                            <p id="cardDetails">jashdvjha ajshdva sdjhasjd a sdhabsdjjaks d s a sdasbabs a sda as da  d</p>
                            <button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img id="crop" src="https://lp-cms-production.imgix.net/2020-12/shutterstock_223165042.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850">
                        <div style="padding: 0 16px">
                            <h4 id="cardDetails" style="font-weight: bold">Australia Is Enforcing Laws Against Coal</h4>
                            <p id="cardDetails">jashdvjha ajshdva sdjhasjd a sdhabdsdjjaks d s a sdasbabs a sda as da  d</p>
                            <button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <p class='mouse' href='#' style="color: dodgerblue; text-align: center">View more</p>
        </div>
        
        <!-- Forum Discussions -->
        <div>
            <h2 class="title">Popular Discussions</h2>
            <p class="details">abisdb asiduabsd aosudubabkefvbwn jasbkdanbsdn asiudbkasbdnasbd asbdkajbs KASBDKABS AJb a sduahvJHVJas dJ asjhJB jasjd jhabsd nashdhba</p>
        </div>
        
        <!-- Charities -->
        <div>
            <h2 class="title"> Join the fight</h2>
            <p class="details">These are charities and movements you can support to help fight against global warming</p>
        </div>
        <?php include 'signUp.php'; ?>
        <?php include 'signIn.php'; ?>
    </body>
    <?php include 'footer.html'; ?>
</html>

