<?php
    require_once("php-helper/open-database.php");

    //If user is not logged in, prompt user to login
    if (!isset($_SESSION["usernameValue"])) {
        header("Location: get-started.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/Happening/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/Happening/favicon.ico" type="image/x-icon">

        <title>Happening Discover Page</title>
        <meta name="description" content="Happening App">
        <meta name="author" content="The Happening Team">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/input-field.css">        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/explore.css">
        <link rel="stylesheet" href="css/icon.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <script src="js/general-event-card.js"></script>
        <script src="js/interested.js"></script>
        <script src="js/follow-btn.js"></script>
    </head> 

    <body>
        
        <!--NAVIGATION BAR-->
        <div class="navbar navbar-default navbar-fixed-top">
            <a class="navbar-brand" href="explore.php">
                <img class="navbar-brand-logo" alt="Happening Logo" src="img/happening-logo.png">
            </a>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <span class="input input--hoshi navbar-search">
                        <input class="input__field input__field--hoshi navbar-search" id="search-input" type="text" placeholder="Search Event, User, or Tag"/>
                        <label class="input__label input__label--hoshi input__label--hoshi-color-1" id="search-underline"></label>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="host-nav" href="host.php">Host</a></li>
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="#explore">Explore</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>

        <div class="container main-content">
            <div class="row row-centered">
                <div id="col-restriction" class="col-sm-8 col-sm-offset-2">

                        <div class="search-query">
                            <h4>Search results for <b>"free food"</b></h4>
                        </div>

                    <!--SECONDARY NAV START-->
                    <div id="search-stream">	
                        <ul class="nav nav-pills center-pills">
                            <li class="active"><a href="#1b" data-toggle="tab">Top</a></li>
                            <li><a href="#2b" data-toggle="tab">Events</a></li>
                            <li><a href="#3b" data-toggle="tab">People</a></li>
                            <li><a href="#4b" data-toggle="tab">Tags</a></li>
                        </ul>
                        <!--SECONDARY NAV END-->


                        <div class="tab-content clearfix">
                            <!--TOP RESULTS START-->
                            <div class="tab-pane active" id="1b">

                                <!--NANDOS CARD START-->
                                <div class="card event-card">
                                    <div class="card-header">
                                        <div class="header-user">
                                            <img class="header-user-img" src="img/profile-photos/nandos-user.png" alt="">
                                        </div>
                                        <div class="header-text"><a class="user">nandos-cp</a></div>
                                    </div>
                                    <div class="img-container vertical-align">
                                        <img class="card-event-img" src="img/events/nandos.jpg" alt="Technica 2017">
                                    </div>
                                    <div class="event-size-indicator-small"></div>
                                    <div class="card-block">
                                        <div class="card-text-container">
                                            <h4 class="card-title"><a class="event-link">Free &#9679; Free Chicken at Nandos College Park!</a></h4>
                                            <p class="card-event-info">August 16 @ 6:00 PM &#183; 0.9 miles away</p>
                                            <p class="card-event-info">Small Event &#183; 278 attendees </p>
                                            <p class="card-text">mrshuly, fetnaa, and 32 others</p>
                                            <p class="card-tags">
                                                <a class="tags">#freefood</a>
                                            </p>
                                        </div>
                                        <div class="card-btn-container">
                                            <div class="card-btn">
                                                <img class="lit-rating" src="img/default-img/one-quarter-lit.png" alt="one quarter lit">
                                            </div>
                                            <div class="dropup-container">
                                                <div class="dropup div-inline">
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
                                <!--NANDOS CARD END-->

                                <!--BITCAMP CARD START-->
                                <div class="card event-card">
                                    <div class="card-header">
                                        <div class="header-user">
                                            <img class="header-user-img" src="img/profile-photos/bitcamp-user.png" alt="">
                                        </div>
                                        <div class="header-text"><a class="user">bitcamp</a></div>
                                    </div>
                                    <div class="img-container vertical-align">
                                        <img class="card-event-img" src="img/events/bitcamp.png" alt="Bitcamp 2017">
                                    </div>
                                    <div class="event-size-indicator-big"></div>
                                    <div class="card-block">
                                        <div class="card-text-container">
                                            <h4 class="card-title"><a class="event-link">Free &#9679; Bitcamp 2017</a></h4>
                                            <p class="card-event-info">Sat Apr 1 @ 5:00 PM &#183; 2 miles away</p>
                                            <p class="card-event-info">Big Event &#183; 489 attendees</p>
                                            <p class="card-text">yoyyenn, farahpg, and 10 others</p>
                                            <p class="card-tags">
                                                <a class="tags">#freefood</a> &#183; 
                                                <a class="tags">#freeswag</a>
                                            </p>
                                        </div>
                                        <div class="card-btn-container">
                                            <div class="card-btn">
                                                <img class="lit-rating" src="img/default-img/three-quarters-lit.png" alt="three quarters lit">
                                            </div>
                                            <div class="dropup-container">
                                                <div class="dropup div-inline">
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
                                <div class="card event-card">
                                    <div class="card-header">
                                        <div class="header-user">
                                            <img class="header-user-img" src="img/profile-photos/technica-user.png" alt="">
                                        </div>
                                        <div class="header-text"><a class="user">technica</a></div>
                                    </div>
                                    <div class="img-container vertical-align">
                                        <img class="card-event-img" src="img/events/technica.png" alt="Technica 2017">
                                    </div>
                                    <div class="event-size-indicator-medium"></div>
                                    <div class="card-block">
                                        <div class="card-text-container">
                                            <h4 class="card-title"><a class="event-link">$5.00 &#9679; Technica 2017</a></h4>
                                            <p class="card-event-info">Fri Nov 5 @ 10:00 AM &#183; 0.5 miles away</p>
                                            <p class="card-event-info">Medium Event &#183; 907 attendees </p>
                                            <p class="card-text">trishaaamazing, beaakahayon, and 58 others</p>
                                            <p class="card-tags">
                                                <a class="tags">#womenshackathon</a> &#183; 
                                                <a class="tags">#freefood</a>
                                            </p>
                                        </div>
                                        <div class="card-btn-container">
                                            <div class="card-btn">
                                                <img class="lit-rating" src="img/default-img/three-quarters-lit.png" alt="three quarters lit">
                                            </div>
                                            <div class="dropup-container">
                                                <div class="dropup div-inline">
                                                    <button class="btn card-btn interest-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i id="event-interest" class="card-icon icon-exclamation"></i>
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
                            <!--TOP RESULTS END-->

                            <!--EVENT RESULTS START-->
                            <div class="tab-pane" id="2b">
                                <div class="no-results">
                                    <h3 class="no-results-text"></h3>
                                </div>
                            </div>
                            <!--EVENT RESULTS END-->

                            <!--PEOPLE RESULTS START-->
                            <div class="tab-pane" id="3b">
                                <div class="people-results">
                                    
                                    <div class="user-card">
                                        <div class="user-img-container">
                                            <img class="user-img" src="img/profile-photos/gabe.png" alt="">
                                        </div> 
                                        <div class="user-info-container">
                                            <div class="username-text"><a class="user">@mrshuly</a></div>   
                                            <div class="fullname-text"><p>Gabriel Vallangca</p></div>
                                        </div>
                                        <div class="btn follow-btn">
                                            <div class="other-profile-following"></div>
                                        </div>
                                    </div>

                                    <div class="user-card">
                                        <div class="user-img-container">
                                            <img class="user-img" src="img/profile-photos/sani.png" alt="">
                                        </div> 
                                        <div class="user-info-container">
                                            <div class="username-text"><a class="user">@sanisideup</a></div>   
                                            <div class="fullname-text"><p>Sani Djaya</p></div>
                                        </div>
                                        <div class="btn follow-btn">
                                            <div class="other-profile-follow"></div>
                                        </div>
                                    </div>

                                    <div class="user-card">
                                        <div class="user-img-container">
                                            <img class="user-img" src="img/profile-photos/technica-user.png" alt="">
                                        </div> 
                                        <div class="user-info-container">
                                            <div class="username-text"><a class="user">@technica</a></div>   
                                            <div class="fullname-text"><p>Technica</p></div>
                                        </div>
                                        <div class="btn follow-btn">
                                            <div class="other-profile-follow"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--PEOPLE RESULTS END-->

                            <!--TAGS RESULTS START-->
                            <div class="tab-pane" id="4b">
                                <!--BITCAMP CARD START-->
                                <div class="card event-card">
                                    <div class="card-header">
                                        <div class="header-user">
                                            <img class="header-user-img" src="img/profile-photos/bitcamp-user.png" alt="">
                                        </div>
                                        <div class="header-text"><a class="user">bitcamp</a></div>
                                    </div>
                                    <div class="img-container vertical-align">
                                        <img class="card-event-img" src="img/events/bitcamp.png" alt="Bitcamp 2017">
                                    </div>
                                    <div class="event-size-indicator-big"></div>
                                    <div class="card-block">
                                        <div class="card-text-container">
                                            <h4 class="card-title"><a class="event-link">Free &#9679; Bitcamp 2017</a></h4>
                                            <p class="card-event-info">Sat Apr 1 @ 5:00 PM &#183; 2 miles away</p>
                                            <p class="card-event-info">Big Event &#183; 489 attendees</p>
                                            <p class="card-text">yoyyenn, farahpg, and 10 others</p>
                                            <p class="card-tags">
                                                <a class="tags">#freefood</a> &#183; 
                                                <a class="tags">#freeswag</a>
                                            </p>
                                        </div>
                                        <div class="card-btn-container">
                                            <div class="card-btn">
                                                <img class="lit-rating" src="img/default-img/three-quarters-lit.png" alt="three quarters lit">
                                            </div>
                                            <div class="dropup-container">
                                                <div class="dropup div-inline">
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
                                <div class="card event-card">
                                    <div class="card-header">
                                        <div class="header-user">
                                            <img class="header-user-img" src="img/profile-photos/technica-user.png" alt="">
                                        </div>
                                        <div class="header-text"><a class="user">technica</a></div>
                                    </div>
                                    <div class="img-container vertical-align">
                                        <img class="card-event-img" src="img/events/technica.png" alt="Technica 2017">
                                    </div>
                                    <div class="event-size-indicator-medium"></div>
                                    <div class="card-block">
                                        <div class="card-text-container">
                                            <h4 class="card-title"><a class="event-link">$5.00 &#9679; Technica 2017</a></h4>
                                            <p class="card-event-info">Fri Nov 5 @ 10:00 AM &#183; 0.5 miles away</p>
                                            <p class="card-event-info">Medium Event &#183; 907 attendees </p>
                                            <p class="card-text">trishaaamazing, beaakahayon, and 58 others</p>
                                            <p class="card-tags">
                                                <a class="tags">#womenshackathon</a> &#183; 
                                                <a class="tags">#freefood</a>
                                            </p>
                                        </div>
                                        <div class="card-btn-container">
                                            <div class="card-btn">
                                                <img class="lit-rating" src="img/default-img/three-quarters-lit.png" alt="three quarters lit">
                                            </div>
                                            <div class="dropup-container">
                                                <div class="dropup div-inline">
                                                    <button class="btn card-btn interest-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i id="event-interest" class="card-icon icon-exclamation"></i>
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

                                <!--NANDOS CARD START-->
                                <div class="card event-card">
                                    <div class="card-header">
                                        <div class="header-user">
                                            <img class="header-user-img" src="img/profile-photos/nandos-user.png" alt="">
                                        </div>
                                        <div class="header-text"><a class="user">nandos-cp</a></div>
                                    </div>
                                    <div class="img-container vertical-align">
                                        <img class="card-event-img" src="img/events/nandos.jpg" alt="Technica 2017">
                                    </div>
                                    <div class="event-size-indicator-small"></div>
                                    <div class="card-block">
                                        <div class="card-text-container">
                                            <h4 class="card-title"><a class="event-link">Free &#9679; Free Chicken at Nandos College Park!</a></h4>
                                            <p class="card-event-info">August 16 @ 6:00 PM &#183; 0.9 miles away</p>
                                            <p class="card-event-info">Small Event &#183; 278 attendees </p>
                                            <p class="card-text">mrshuly, fetnaa, and 32 others</p>
                                            <p class="card-tags">
                                                <a class="tags">#freefood</a>
                                            </p>
                                        </div>
                                        <div class="card-btn-container">
                                            <div class="card-btn">
                                                <img class="lit-rating" src="img/default-img/one-quarter-lit.png" alt="one quarter lit">
                                            </div>
                                            <div class="dropup-container">
                                                <div class="dropup div-inline">
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
                                <!--NANDOS CARD END-->
                            </div>
                            <!--TAGS RESULTS END-->

                        </div>
                    </div>
                </div>
            </div>

            <!--FOOTER START-->
            <div class="row">
                <div class="footer"> 
                    <h6><a>About Us</a></h6>
                    <h6>&copy; 2017 Happening</h6>
                    <h6><a>FAQ</a></h6>
                </div>
            </div>
            <!--FOOTER END-->
            
        </div>
    </body>
</html>