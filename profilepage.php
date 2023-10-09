<?php
    session_start();
    
    if(isset($_SESSION["username"])){
        $theEmail = $_SESSION["username"];
        $theName = $_SESSION["name"];
        $theSurname = $_SESSION["surname"];
        $theId = $_SESSION["userId"];
        $work = $_SESSION["work"];
        $birthday = $_SESSION["birthday"];
        $location = $_SESSION["location"];
        $relationship = $_SESSION["relationship"];
        $profilePic = $_SESSION["dp"];


    }
echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Genal | Profile</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/splashh.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/profile.css\">
</head>
<body>
<div class=\"preloader\">
        <!--Preloader div-->
    </div>
    
    <div class=\"header\">
        <div class=\"container\">
            <div class=\"navbar\">
                <a href=\"homepage.php\">
                    <h1>Genal</h1>
                </a>
            
                <nav>
                    <ul>
                        <li><a href=\"php/logout.php\">Log Out</a></li>
        
                    </ul>
                </nav> 
            </div>
        </div>
    </div>

    <div class=\"main\">
        <div class=\"container\">
            <div class=\"headerr profile-row\">
                <img src=\"images/".$profilePic."\" width=\"300\" height=\"300\" alt=\"\" />
                <div>
                    <h2>". $theName. " ". $theSurname ."</h2>
                    <a>
                    <div class=\"addphoto\">
                        
                            <img src=\"images/icons/icons8-camera-26.png\"/>
                            Edit Profile Picture
                            
                        
                    </div>
                    </a>
                </div>
            </div>

        <hr/>

            <h2>Profile Info</h2>
            <div class=\"profile-row2\">
                <div>
                    <h3>Work</h3>
                    <p>". $work ."</p>
                </div>
                <div>
                    <h3>Birthday</h3>
                    <p>". $birthday ."</p>
                </div>
                <div>
                    <h3>Relationship</h3>
                    <p>". $relationship ."</p>
                </div>
                <div>
                    <h3>Location</h3>
                    <p>". $location ."</p>
                </div>
                <div>
                    <a>
                        <img src=\"images/icons/icons8-edit-24.png\"/>
                        Update
                        
                    </a>
                </div>
                
            </div>
            <h2>Friends</h2>
            <div class=\"profile-row3\">
                <!-- Friends go here! -->
            </div>
            <h2>My Articles</h2>
            <div class=\"profile-row4\">
                <div class=\"myArticles\">
                    <!-- My Articles goes here-->
                </div>
                <div>
                    <a>
                        <img src=\"images/icons/icons8-add-30.png\"/>
                       New
                        
                    </a>
                </div>
                

            </div>


            <h2>Saved</h2>
            <div class=\"profile-row5\">
    
                <div class=\"article\">
                    <h3>What’s at Venice Film Festival? Fast Cars, Fake Noses, and (Some) Movie Stars.</h3>
                    <img src=\"images/articles/a3dac95d30d54d94503c413796e6e5a9e5-venice.rhorizontal.w700.webp\" alt=\"pandas\" width=\"200\" />
                    
                    <p>Not only can kids survive without meticulously packed lunches and screentime guidelines—they can thrive</p>
                    <p>Bilge Ebiri and Rachel Handler</p>
                </div>
    
                <div class=\"article\">
                    <h3>What Can Historical Clothing Reveal That Other Sources Cannot?</h3>
                    <img src=\"images/articles/Elizabeth I Fashion History Today.jpg\" alt=\"pandas\" width=\"200\" />
                    
                    <p>From Elizabeth I’s intimate attire to fabrics that threatened social hierarchies, clothes tell us about more than just their wearers.</p>
                    <p>Maria Hayward</p>
                </div>
                
            </div>
        </div>

    </div>

    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"col-footer\">
                    <h3>Resources</h3>
                    <ul>
                        <li>Get help</li>
                        <li>Advertise</li>
                        <li>Membership</li>
                    </ul>
                </div>
                <div class=\"col-footer\">
                    <h3>Company</h3>
                    <ul>
                        <li>About</li>
                        <li>Articles</li>
                        <li>Careers</li>
                    </ul>
                </div>
                <div class=\"col-footer\">
                    <h3>Contacts</h3>
                    <ul>
                        <li>Twitter</li>
                        <li>Facebook</li>
                        <li>Instagram</li>
                    </ul>
                </div>
                
            </div>

            <p class=\"copyright\">Copyright 2023 - Genal</p>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"javascript/profileScript.js\">
    </script>
</body>
</html>";