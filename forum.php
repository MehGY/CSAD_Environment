<html lang="en">
    <header>
        <title>Forum</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
    <?php include 'header.html'; ?>
    
    <!-- List of questions  -->
    <div class="col-sm-6" style="margin-left: 60px; margin-right: 30px">
        <h2>All Questions</h2>
        <button type="button" onclick="askQn()" class="btn btn-primary" style="float: right">Ask a question</button>
        <p style="clear: both"></p>
        
        <!-- Questions (each one starts with class="forumbox") -->
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Miguel</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 hours ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Usage of Nuclear Power</h3>
            <p id="cardDetails">I've heard a lot of mixed responses when asking about nuclear power. Some say it good, some say it bad. What are the good and bad about nuclear power?</p>
            <p class="tag">Nuclear</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">59</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-3</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">109</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Mayazzz</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">15 hours ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Why is Australia's government so bad???</h3>
            <p id="cardDetails">For years, the government has done nothing to reduce our carbon footprint, overlook coal companies and essentially tax people for being environmentally friendly??? WTF australia</p>
            <p class="tag">Politics</p> <p class="tag">CO2 emissions</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">209</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-46</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Kim</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 days ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Are NFTs bad?</h3>
            <p id="cardDetails">Recently, there has been a lot of debate about these things called NFTs and I'm very confused as to what they are. But I've seen people claiming that NFTs harm the environment. Could someone enlighten me?</p>
            <p class="tag">NFT</p> <p class="tag">Pollution</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">122</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-10</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.2k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div class="forumbox">
            <p id="cardDetails" style="float: left">Asked by Annon</p> 
            <img src="images/noprofile.jpg" class="forumProfile"> 
            <p class="time">3 minutes ago</p> <br>
            <h3 id="cardDetails" style="font-weight: bold; margin-top: 10px;">Dummy Test</h3>
            <p id="cardDetails">ksjad akdq kqj djw qiqbdv wmhw msd,aiskjd adajdoj dkdqwkd qwdj qwkdjq wd</p>
            <p class="tag">Charity</p> <p class="tag">Donation</p>
            <p style="clear: both"></p>
            <p id="votes" style="margin-left: 5px">2k</p><span id="votes" class="glyphicon glyphicon-arrow-up" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">-34</p><span id="votes" class="glyphicon glyphicon-arrow-down" style="margin-left: 10px"></span>
            <p id="votes" style="margin-left: 5px">1.4k</p><span id="votes" class="glyphicon glyphicon-comment"></span>
        </div>
        <div>
            <p id="currentPage">1</p> <p class="pageNum">2</p> <p class="pageNum">3</p> <p class="pageNum">4</p> <p class="pageNum">5</p> <p style="float:left; margin-left: 10px; margin-top: 13px">...</p>
            <button type="button" class="pageNum" style="float: right">Next</button>
        </div>
    </div>
    
    <!-- Things on the right hand side  -->
    <div class="col-sm-4" style="margin-right: 60px;">
        <div class="forumbox" style="margin-top: 106px">
            
            <!-- Search Bar  -->
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" id="txtSearch">
                <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit" style="height: 34px">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </div>
            
            <!-- Filter Options -->
            <button type="button" data-toggle="collapse" data-target="#filters" style="color: dodgerblue; background: none; border: none; margin-top: 10px">
                <span class="glyphicon glyphicon-chevron-down" style="margin-right: 5px; float: left; padding-top: 3px;"></span> Filters
            </button>
            <div id="filters" class="collapse">
                <div class="row" style="margin: 10px">
                    <!-- Sorting Options -->
                    <div class="col-sm-6">
                        <h4 style="margin-bottom: 0px">Sort by</h4>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Newest</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Oldest</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Most Votes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Least Votes</label>
                        </div>
                    </div>

                    <!-- Filter by Tags -->
                    <div class="col-sm-6">
                        <h4 style="margin-bottom: 0px">Filter by tags</h4>
                        <p style="margin-bottom: 0px">Exclude following tags</p>
                        <input type="text" style="margin-bottom: 10px" placeholder="Eg.Global Warming">
                        <p style="margin-bottom: 0px">Include following tags</p>
                        <input type="text" style="margin-bottom: 10px" placeholder="Eg.Global Warming">
                    </div>
                </div>
                <hr>
                
                <!-- Filter Buttons -->
                <div class="row" style="margin: 10px">
                    <button id="applyFilter" type="submit" class="btn btn-primary" style="margin-bottom: 10px">Apply Filter</button>
                    <button type="button" class="btn btn-primary" style="margin-bottom: 10px; float: right" data-toggle="collapse" data-target="#filters">Cancel</button>
                </div>
            </div>
        </div>
        
        <!-- List of Popular Tags -->
        <div class="forumbox">
            <h4>Popular Tags</h4>
            <p class="tag">Politics</p> <p class="tag">NFT</p> <p class="tag">Nuclear</p> <p class="tag">TeamTrees</p> <p class="tag">Charity</p>
            <p style="clear: both"></p>
            <p class="mouse" style="color: dodgerblue">More related tags</p>
        </div>
    </div>
    <?php include 'signIn.php'; ?>
    <?php include 'signUp.php'; ?>
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
    <?php include 'footer.html'; ?>
</html>

