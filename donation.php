<html>
    <head>
        <title>Donate With PayPal</title>
        <link rel="stylesheet" type="text/css" href="css/donation.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/charity.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <?php include 'header.php'; ?>
    <body>
        <div id = "main">
            <h1 style="color: white">Donate With PayPal</h1>
            <div id = "container" style="padding-bottom: 5em; margin-bottom: 10em;">
                <h2 class="donationH2">Our beaches need your support to recover!</h2>
                <hr/> 
                <center>
                    <h3>Donate using the button below and start helping today!</h3>
                    <form action="https://www.sandbox.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="hosted_button_id" value="VLRDQM33YK8J6" />
                        <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_SG/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                    <h3>Alternatively, you can scan the QR code below as well!</h3>
                    <?php 
                        echo "<img src='images/QR Code.png' alt='paypal' />"; 
                    ?>
                </center>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                <script src="js/jquery.flexslider.js"></script>
                <!-- code for sliders -->
                <script type="text/javascript" charset="utf-8">
                    $(window).load(function() {
                        $('.flexslider').flexslider();
                    });
                </script>
                <script src="js/jquery.simplePopup.js" type="text/javascript"></script>
                <!-- call popup -->
                <script type="text/javascript">
                    function show(id) {
                    $('#charity_id').val(id);
                    $('.box-shadow-preview').css("opacity", "0.1");
                    $('#pop2').simplePopup();
                    }
                </script>
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

