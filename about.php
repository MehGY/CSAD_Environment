<html>
    <header>
        <title>About Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icon" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="css/about.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
    <body id="top">
        <?php include 'header.php'; ?>
        <h1 class="title" style="color: white; margin-top: 2em;">About Us</h1>
        <img class="center-block" src="images/sigil.png" style="width: 10%;">
        <div class="card col-sm-6 col-sm-offset-3" style="margin-bottom: 10em; margin-top: 2em;">
            <p class="details">We are non-profit organization that aims to clean SG's local beaches and protect local marine life.</p>
            <p class="details">We hope that by creating this website that our dear singaporeans will be more aware of the current environmental situation and take action to protect our coastlines.</p>
        </div>
        <div class="row" style="padding-right: 5em; padding-left: 5em;">
            <div class="col-sm-5">
                <h2 class="title" style="color:white; text-align: left">Where we work</h2>
                <div class="card">
                    <p class="details">When this website was made, we were studying at Singapore Polytechnic. This website was made as a group project.</p>
                    <button class="butt" onclick="window.location.href = 'feedback.php';">Contact Us</button>
                </div>
            </div>
            <div class="col-sm-7">
                <iframe class="center-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.775867638826!2d103.77536081431613!3d1.309781062068798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a602ff17c15%3A0xa9545dd23993859e!2sSingapore%20Polytechnic!5e0!3m2!1sen!2ssg!4v1645022336544!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <h1 class="title" style="margin-top: 5em; color: white">Profiles</h1>
        <div class="row" style="padding-right: 5em; padding-left: 5em; margin-bottom: 10em;">
            <div class="col-sm-4">
                <div class="card" style="padding: 0px">
                    <img class="crop" src="images/GY.jpg">
                    <h3 class="title" style="margin-top: 1em;">Ngai Gin Young</h3>
                    <p class="details" style="margin-left: 10px; opacity: 0.5; font-size: 1em;">P2032159</p>
                    <p class="details" style="margin-left: 10px; margin-right: 10px">Group Leader, he likes games and anime I guess?</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="padding: 0px">
                    <img class="crop" src="images/JX.jpeg">
                    <h3 class="title" style="margin-top: 1em;">Peh Jun Xiang</h3>
                    <p class="details" style="margin-left: 10px; opacity: 0.5; font-size: 1em;">P2032287</p>
                    <p class="details" style="margin-left: 10px; margin-right: 10px">Group Member, he watches basketball and anime.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="padding: 0px">
                    <img class="crop" src="images/ZS.jpeg">
                    <h3 class="title" style="margin-top: 1em;">Koay Zhi Song</h3>
                    <p class="details" style="margin-left: 10px; opacity: 0.5; font-size: 1em;">P2033121</p>
                    <p class="details" style="margin-left: 10px; margin-right: 10px">Group Member, suffers in gacha hell (especially Genshin).</p>
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
        </script>
    </body>
</html>
