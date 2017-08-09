<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/Happening/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/Happening/favicon.ico" type="image/x-icon">

        <title>Home</title>
        <meta name="description" content="Happening App">
        <meta name="author" content="The Happening Team">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/icon.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <script src="js/card.js"></script>
    </head> 

    <body>
        
        <!--NAVIGATION BAR START-->
        <div class="navbar navbar-default navbar-fixed-top">
            <a class="navbar-brand" href="explore.html">
                <img class="navbar-brand-logo" alt="Happening Logo" src="img/happening-logo.png">
            </a>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="navbar-search" placeholder="Search Event or User">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="host-nav" href="host.php">Host</a></li>
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="explore.html">Explore</a></li>
                <li><a href="profile.html">Profile</a></li>
            </ul>
        </div>
        <!--NAVIGATION BAR END-->

        <!--EVENT CARDS-->
        <div class="container main-content">
            <div class="row row-centered">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--MOONRISE CARD START-->
                    <div class="card">
                        <div class="card-header">
                            <div class="header-user">
                                <img class="header-user-img" src="img/events/moonrise-user.jpg" alt="">
                            </div>
                            <div class="header-text"><a class="user">moonrise</a></div>
                        </div>
                        <div class="img-container vertical-align">
                            <img class="card-event-img" src="img/events/moonrise.jpg" alt="Moonrise Festival 2017">
                        </div>
                        <div class="event-size-indicator-huge"></div>
                        <div class="card-block">
                            <div class="card-text-container">
                                <h4 class="card-title"><a class="event-link">$109.50 &#9679; Moonrise Festival 2017</a></h4>
                                <p class="card-event-info">Sat Aug 12 @ 10:00 am &#183; 26 miles away</p>
                                <p class="card-event-info">Huge Event &#183; 724 attendees</p>
                                <p class="card-text">anhnestle, beefsta, and 48 others</p>
                                <p class="card-tags">
                                    <a class="tags">#musicfestival</a>
                                </p>
                            </div>
                            <div class="card-btn-container">
                                <div class="card-btn">
                                    <img class="lit-rating" src="img/really-lit.png" alt="It's lit">
                                </div>
                                <div class="dropdown-container">
                                    <div class="dropdown div-inline">
                                        <button class="btn card-btn interest-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i id="event-interest" class="card-icon icon-checkmark"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="interest-item not-interested">Not Interested</a>
                                            <a class="interest-item interested">Interested</a>
                                            <a class="interest-item going">Going</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--MOONRISE CARD END-->

                    <!--BITCAMP CARD START-->
                    <div class="card">
                        <div class="card-header">
                            <div class="header-user">
                                <img class="header-user-img" src="img/events/bitcamp.png" alt="">
                            </div>
                            <div class="header-text"><a class="user">bitcamp</a></div>
                        </div>
                        <div class="img-container vertical-align">
                            <img class="card-event-img" src="img/events/bitcamp.png" alt="Bitcamp 2017">
                        </div>
                        <div class="event-size-indicator-large"></div>
                        <div class="card-block">
                            <div class="card-text-container">
                                <h4 class="card-title"><a class="event-link">Free &#9679; Bitcamp 2017</a></h4>
                                <p class="card-event-info">Sat Apr 1 @ 5:00 PM &#183; 2 miles away</p>
                                <p class="card-event-info">Large Event &#183; 489 attendees</p>
                                <p class="card-text">yoyyenn, farahpg, and 10 others</p>
                                <p class="card-tags">
                                    <a class="tags">#freefood</a> &#183; 
                                    <a class="tags">#freeswag</a>
                                </p>
                            </div>
                            <div class="card-btn-container">
                                <div class="card-btn">
                                    <img class="lit-rating" src="img/three-quarters-lit.png" alt="three quarters lit">
                                </div>
                                <div class="dropdown-container">
                                    <div class="dropdown div-inline">
                                        <button class="btn card-btn interest-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i id="event-interest" class="card-icon icon-star"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="interest-item not-interested">Not Interested</a>
                                            <a class="interest-item interested">Interested</a>
                                            <a class="interest-item going">Going</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BITCAMP CARD END-->

                    <!--TECHNICA CARD START-->
                    <div class="card">
                        <div class="card-header">
                            <div class="header-user">
                                <img class="header-user-img" src="img/events/technica-user.png" alt="">
                            </div>
                            <div class="header-text"><a class="user">technica</a></div>
                        </div>
                        <div class="img-container vertical-align">
                            <img class="card-event-img" src="img/events/technica.png" alt="Technica 2017">
                        </div>
                        <div class="event-size-indicator-midsize"></div>
                        <div class="card-block">
                            <div class="card-text-container">
                                <h4 class="card-title"><a class="event-link">$5.00 &#9679; Technica 2017</a></h4>
                                <p class="card-event-info">Fri Nov 5 @ 10:00 AM &#183; 0.5 miles away</p>
                                <p class="card-event-info">Midsize Event &#183; 907 attendees </p>
                                <p class="card-text">trishaaamazing, beaakahayon, and 58 others</p>
                                <p class="card-tags">
                                    <a class="tags">#womenshackathon</a> &#183; 
                                    <a class="tags">#freefood</a>
                                </p>
                            </div>
                            <div class="card-btn-container">
                                <div class="card-btn">
                                    <img class="lit-rating" src="img/three-quarters-lit.png" alt="three quarters lit">
                                </div>
                                <div class="dropdown-container">
                                    <div class="dropdown div-inline">
                                        <button class="btn card-btn interest-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i id="event-interest" class="card-icon icon-star-grey"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="interest-item not-interested">Not Interested</a>
                                            <a class="interest-item interested">Interested</a>
                                            <a class="interest-item going">Going</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--TECHNICA CARD END-->

                </div>
            </div>

            <!--FOOTER START-->
            <div class="row">
                <div class="footer"> 
                    <h6><a>About Us</a></h6>
                    <h6>&copy; 2017 Happening</h6>
                    <h6><a>Contact</a></h6>
                </div>
            </div>
            <!--FOOTER END-->
            
        </div>
    </body>
</html>