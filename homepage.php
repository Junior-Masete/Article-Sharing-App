<?php
    session_start();
    
    if(isset($_SESSION["username"])){
        $theEmail = $_SESSION["username"];
        $theName = $_SESSION["name"];
        $theSurname = $_SESSION["surname"];
        $profilePic = $_SESSION["dp"];
    }
   

   echo "<!DOCTYPE html>
   <html lang=\"en\">
   <head>
       <meta charset=\"UTF-8\">
       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
       <title>Genal | Home</title>
       <link rel=\"stylesheet\" type=\"text/css\" href=\"css/splashh.css\">
       <link rel=\"stylesheet\" type=\"text/css\" href=\"css/home.css\">
   </head>
   <body>
   <div class=\"preloader\">
        <!--Preloader div-->
    </div>
       
       <div class=\"header\">
           <div class=\"container\">
               <div class=\"navbar\">
               <h1>Genal</h1>
               
                   <nav>
                       <a href=\"profilepage.php\"><img src=\"images/".$profilePic."\" alt=\"\" width=\"90\" height=\"90\" style=\"border-radius: 50%;\"></a>
                   </nav> 
               </div>
           </div>
       </div>
   
       <div class=\"main\">
           <div class=\"container\">
   
               <div class=\"create\">
                   <button>Create Article</button>
               </div>
           <div class=\"container2\">
           <div class=\"thefeed\">
               <h2>Feed</h2>

               <!--    Article by friends here   -->


           </div>
   
           <div class=\"sidebar\">
               <h2>People you may Know</h2>
               <div class=\"friend\">
                   <div>
                   <img src=\"images/profiles/pexels-ahmed-satti-3223552.jpg\" alt=\"\" width=\"100\" />
                   <h3>Junior Masete</h3>
                   </div>
                   <button class=\"inviteBtn\">Invite</button>
               </div>
   
               <div class=\"friend\">
                   <div>
                   <img src=\"images/profiles/pexels-daniel-xavier-1239291.jpg\" alt=\"\" width=\"100\" />
                   <h3>Willam Johnson</h3>
                   </div>
                   <button class=\"inviteBtn\">Invite</button>
               </div>
   
               <div class=\"friend\">
                   <div>
                   <img src=\"images/profiles/pexels-rfstudio-3886347.jpg\" alt=\"\" width=\"100\" />
                   <h3>Tasha Dikm</h3>
                   </div>
                   <button class=\"inviteBtn\">Invite</button>
               </div>
   
               <div class=\"friend\">
                   <div>
                   <img src=\"images/profiles/pexels-samson-katt-5255233.jpg\" alt=\"\" width=\"100\" />
                   <h3>Bernard Silver</h3>
                   </div>
                   <button class=\"inviteBtn\">Invite</button>
               </div>
   
               
           </div>
           </div>
   
           <div class=\"interests\">
               <h2>You may like</h2>
               <p>Food</p>
               <p>Cars</p>
               <p>Education</p>
               <p>Fashion</p>
   
               <p>Politics</p>
               <p>Movies</p>
               <p>Philosophy</p>
           </div>
           </div>
           <a href=\"php/logout.php\"><div>Log Out</div></a>
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
       
       <script src=\"javascript/homescript.js\"></script>
   </body>
   </html>";

   /*
   
    <div class=\"article myart\">
                   <h3>Less Is More: The ‘Laziest’ Ways to Be a Great Parent</h3>
                   <img src=\"images/articles/https __s3.amazonaws.com_pocket-collectionapi-prod-images_db7cac38-191d-4bb4-90cf-020d2203b62d.png\" alt=\"pandas\" width=\"200\" />
                   
                   <p>Not only can kids survive without meticulously packed lunches and screentime guidelines—they can thrive</p>
                   <p>Amy Maoz</p>
   
                   <div class=\"save-read\">
                    
                       <button>Save</button>
                   </div>
                   <hr/>
               </div>
   
               <div class=\"article myart\">
                   <h3>‘He Drives Me Mad!’ Why Don’t We Dump Toxic Friends?</h3>
                   <img src=\"images/articles/623e493658986.png\" alt=\"pandas\" width=\"200\" />
                   
                   <p>According to psychologists, ‘ambivalent’ relationships can cause us more stress than being with people we actively dislike. Is it time to let go—or can these friendships be salvaged?</p>
                   <p>Elle Hunt</p>
   
                   <div class=\"save-read\">
                   
                       <button>Save</button>
                   </div>
                   <hr/>
               </div>
   
               <div class=\"article myart\">
                   <h3>What’s at Venice Film Festival? Fast Cars, Fake Noses, and (Some) Movie Stars.</h3>
                   <img src=\"images/articles/a3dac95d30d54d94503c413796e6e5a9e5-venice.rhorizontal.w700.webp\" alt=\"pandas\" width=\"200\" />
                   
                   <p>Not only can kids survive without meticulously packed lunches and screentime guidelines—they can thrive</p>
                   <p>Bilge Ebiri and Rachel Handler</p>
   
                   <div class=\"save-read\">
                     
                       <button>Save</button>
                   </div>
                   <hr/>
               </div>
   */