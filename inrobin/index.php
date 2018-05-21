<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inrobin Industry</title>
    <link rel="stylesheet" type="text/css" href="inrobinstyle.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/icons/favicon.ico" />
</head>
<body>

<header position ="relative" >
      <div id="logo" class="menuUp" >
        <h1>
          <a style="text-decoration: none" href="index.php">
              <img id="navToggle" class="smicon" src="logo/logo.png" style="margin-top:8%;margin-bottom:1%;">
          </a>
        </h1>
        <div id="navToggle" style="margin-top:2%;margin-right:3%">
          <a href="index.php"><img id="menu" src="images/menu.png" style="margin-top:15%;margin-right:3%;width: 90px;"></a>
        </div>
      </div>

      <nav>
          <ul>
              <li>
                  <a href="#">Industries <span class="toggle">Expand</span><span class="caret"></span></a>
                  <nav style="width:134px;margin-right:30%;">
                      <ul>
                          <li><a href="Inrobin_industries.html">Overview</a></li>
                          <li><a href="Inrobin_pulp.php">Biorefinery</a></li>
                      </ul>
                  </nav>
              </li>
              <li>
                  <a href="Inrobin_company.html">Product <span class="toggle">Expand</span><span class="caret"></span></a>
                  <nav style="width:197px;margin-right:25%;">
                      <ul>
                          <li><a href="Inrobin_company.html">Our platform</a></li>
                          <li><a href="Inrobin_company.html#keyfeatures">Key features</a></li>
                          <li><a href="Inrobin_company.html#starttopper">For manufacturers</a></li>
                          <li><a href="Inrobin_company.html#starttopinsu">For insurers</a></li>
                      </ul>
                  </nav>
              </li>
              <li>
                  <a href="#">About <span class="toggle">Expand</span><span class="caret"></span></a>
                  <nav style="width:123px;margin-right:30%;">
                      <ul>
                          <li><a href="Inrobin_about.html">About us</a></li>
                          <li><a href="Inrobin_careers.html">Careers</a></li>
                          <li><a href="http://rbsprivate.contentlive.co.uk/content/9ed483a9-b940-8439-b364-a8259f40e35e">Press</a></li>
                          <li><a href="https://medium.com/@Inrobin">Blog</a></li>
                          <li><a href="Inrobin_FAQs.html">FAQs</a></li>
                      </ul>
                  </nav>
              </li>
              <li><a href="Inrobin_contact.html">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              <li style = "margin-top: 1.1%;margin-bottom: 1%"><div class="dropdown3" ><a  href="http://dashboard.inrobin.com">Get started</a></div></li>
          </ul>
      </nav>
  </header>

<div class="forste" name="top" style="background-image: url(images/net.jpg);background-repeat: no-repeat;">

    <p class="title" style="line-height: 1.1;margin-top:0%;">
        Predict<br>
        Optimise<br>
        Insure<br>
    </p>
    <p class="textbox" style="width: 80%;padding:2% 0 2% 1%;">
        ML & IIoT insurance platform for industrial assets
    </p>

    <form action="index.php" name="emailform" method="post">
        <input type="text" name="emailtext" placeholder="name@company.com" id="email" class ="email">
        <input type="submit" value="Get started" class="startbutton" name="submit">
    </form>

     <!--THIS IS FOR SAVE FORM EMAILS-->
     <?php

       // TO SEND WELCOME EMAIL
       function sendEmail($to) {

               $subject = 'Welcome to Inrobin!' ;
               $from = 'alarms@inrobin.com';
               $message = $_POST [ "message" ] ;
               $headers = 'From: ' . $_POST[ "from" ] . PHP_EOL ;
               mail ( $to, $subject, $message, $headers ) ;

               echo '<p class="textboxtop" style = "margin-top: -15%;padding-left:1%"> ¡Se ha enviado tu e-mail! </p>';
       }

      function saveEmail() {
              $emailText = $_POST["emailtext"];
              $pattern ='/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
              //pattern to validate FORMAT email by Michael Rushton
              if (preg_match($pattern, $emailText) === 1) {
                // Get credentials
                $myfile = fopen("/kunden/homepages/41/d563189338/htdocs/mysql/bd.txt", "r+") or die("Unable to open file!");
                $servername = trim(fgets($myfile));
                $username = trim(fgets($myfile));
                $password = trim(fgets($myfile));
                $dbname = trim(fgets($myfile));
                fclose($myfile);
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                   echo ("Connection failed: " . $conn->connect_error);
                }
                $sql = "INSERT INTO emails (email) VALUES ('" . $emailText . "');";
                if ($conn->query($sql) === TRUE) {
                    echo '<p class="textboxtop" style = "margin-top: -15%;padding-left:1%"> New email added succesfully</p>';
                } else {
                    echo '<p class="textboxtop" style = "margin-top: -15%;padding-left:1%"> Error: ' . $sql . '<br>' . $conn->error. '</p>';
                }
                $conn->close();

                // SEND WELCOME EMAIL
                sendEmail($emailText);

              } else {
                echo '<p class="textboxtop" style = "margin-top: -15%;padding-left:1%"> Error: invalid email address </p>';
              }
       }

       // IF SUBMIT BUTTON PRESSED
       if(isset($_POST['submit'])) {
           saveEmail();
       }
     ?>

    <div style="text-align: center;">
        <a href="#blocks">
            <img src="images/blackarrow.gif" style="width: 100px;">
        </a>
    </div>

</div>

 <!--THIS IS THE FOUR COLOURED BLOCKS-->
<div style="overflow: visible" id="blocks">


    <div class="row" style="height: 400px;">
        <div class="fjerde" id="fjerde" style="padding:0;background: linear-gradient(to right, rgb(0, 90, 90), rgb(50, 120, 117))">

            <a class="negsmalltitle" style="float:left;width:50%;cursor: pointer;padding:13% 0 5% 10%;" onclick="showHide('tredje');showHide('predict')">
                Predict
            </a>

            <img src="network_white.png" style="height:220px;cursor:pointer;padding-top:7%;" onclick="showHide('tredje');showHide('predict')">

            <p class="question" style="padding:0% 0 5% 10%;" onclick="showHide('tredje');showHide('predict')" >
                Detect future machinery breakdowns & inefficiencies.
            </p>

        </div>

        <div id="optimise" style="display: none;animation: rightmove  2s 1;" class="slider">
            <div class="tredje" style=";height:400px;padding:0;background: linear-gradient(to right,  rgb(140, 202, 200), rgb(148, 181, 180))">
                <div style="text-align: right;">
                    <p onclick="showHide('fjerde');showHide('optimise')" class="negseemore" style="padding:2%;">
                        x
                    </p>
                </div>

                <p class="negtextbox" style="text-align:left;padding:10% 10% 5% 10%;">
                    Our ML algorithms pinpoint variables which are most important for production. The platform is
                    designed to help manufacturers to improve preventive maintenance, reliability & insurance
                    premia as more data is processed.
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="height:400px;">
        <div class="tredje" id="tredje" style="padding:0; background: linear-gradient(to right, rgb(148, 181, 180), rgb(140, 202, 200))">


            <a class="negsmalltitle" style="float:left;width:50%;cursor: pointer;;padding:13% 0 5% 10%;" onclick="showHide('fjerde');showHide('optimise')">
                Optimise
            </a>

            <img src="cloud_white.png"  style="height:220px;cursor:pointer;padding-top:7%;" onclick="showHide('fjerde');showHide('optimise')">

            <p class="question" style="padding:0% 0 5% 10%;" onclick="showHide('fjerde');showHide('optimise')">
                Use ML results for your scheduled work & maintenance.
            </p>

        </div>


        <div id="predict" style="display: none;z-index: 1;" class="slider">
            <div class="fjerde" style="height:400px;padding:0;background: linear-gradient(to right, rgb(50, 120, 117), rgb(0, 90, 90))">
                <div style="text-align: right;">
                    <p onclick="showHide('tredje');showHide('predict')" class="negseemore" style="padding:2%;">
                        x
                    </p>
                </div>
                <p class="negtextbox" style="text-align: left;margin:0;padding:10% 10% 5% 10%;">
                    Inrobin's IIoT platform applies ML techniques to manufacturer's machinery data acquired through
                    MQTT Brokers. This allows manufacturers to detect risks and inefficiencies before they occur,
                    visualizing data comprehensively and improving current KPIs.
                </p>
            </div>
        </div>


    </div>

    <div class="row1" style="height:400px;">
        <div class="andre" style="padding:0;background: linear-gradient(to right, rgb(240, 75, 50), rgb(222, 46, 48))">
            <a class="negsmalltitle" style="float:left;width:50%;cursor: pointer;;padding:13% 0 5% 10%;" onclick="showHide('insure');showHide('femte')">
                Insure
            </a>

            <img src="hand_white.png"  style="height:250px;cursor:pointer;padding-top:5%;" onclick="showHide('insure');showHide('femte')">

            <button class="question" style="padding:0% 0 5% 10%;" onclick="showHide('insure');showHide('femte')">
                Underwrite industrial risks and increase margins.
            </button>

        </div>

    </div>

    <div class="row1" style="height:400px">
        <div class="femte" style="background-image: url(images/bits.jpeg);padding:0; background-repeat: no-repeat" id="femte">
            <p class="textbox" style="padding:18% 10% 2% 10%;">
                Bringing a mixture of data science, IIoT, industrial engineering & insurance analytics from which both manufacturers and insurers benefit.
            </p>
            <a href="Inrobin_company.html" class="question" style="color: rgb(0, 90, 90);padding:0 0 5% 10%;">
               Learn more
            </a>
        </div>


        <div id="insure" style="display: none;height:400px;" class="slider">
            <div class="andre" style="padding:0;background: linear-gradient(to right, rgb(222, 46, 48), rgb(240, 75, 50))">
                <div style="text-align: right;">
                    <p onclick="showHide('femte');showHide('insure')" class="negseemore" style="padding:2%;">
                        x
                    </p>
                </div>
                <p class="negtextbox" style="text-align: left;margin:0;padding:15% 10% 5% 10%;">
                    Manufacturers access the service by insuring their assets and connecting to an insurance carrier,
                    broker or agent. This helps optimising costs by adjusting premia
                    and cutting underwriting expenditure.
                </p>
            </div>
        </div>

    </div>

</div>

<!--THIS IS JOIN THE TEAM-->
<div class="tredje" style="text-align: center;height:100%;width:100%;">
    <p class="negsmalltitle" style="width:100%;padding: 0 0 5% 0">
     Join the team
    </p>

    <div class="careers">
        <a class="careersen" href="Inrobin_careers.html">
            Careers
        </a>
    </div>

</div>

<footer>
    <a href="index.php" style="padding: 0 100% 0 6%;width:100%;">
        <img src="logo/logo.png" alt="Inrobin logo"  style="height:30px;margin-bottom: -0%;">
    </a>

    <div class="feet">
        <p>Industries</p>

        <a class="foot" href="Inrobin_company.html">
            <p class="feeter">
                Overview
            </p>
        </a>
        <a  class="foot" href="Inrobin_industries.html">
            <p class="feeter">
                Biorefinery
            </p>
        </a>

    </div>



    <div class="feet">
        <p>Product</p>

        <a class="foot" href="Inrobin_company.html">
            <p class="feeter">
                Our solutions
            </p>
        </a>
        <a class="foot" href="Inrobin_company.html">
            <p class="feeter">
                Key features
            </p>
        </a>
        <a class="foot" href="Inrobin_company.html#tredje">
            <p class="feeter">
                For manufacturers
            </p>
        </a>
        <a class="foot" href="Inrobin_company.html#fjerde">
            <p class="feeter">
                For insurers
            </p>
        </a>
    </div>


    <div class="feet">
        <p>About</p>

        <a class="foot" href="Inrobin_about.html">
            <p class="feeter">
                About us
            </p>
        </a>
        <a class="foot" href="Inrobin_careers.html">
            <p class="feeter">
                Careers
            </p>
        </a>
        <a class="foot" href="http://rbsprivate.contentlive.co.uk/content/9ed483a9-b940-8439-b364-a8259f40e35e">
            <p class="feeter">
                Press
            </p>
        </a>
        <a class="foot" href="https://medium.com/@Inrobin">
            <p class="feeter">
                Blog
            </p>
        </a>
        <a class="foot" href="Inrobin_FAQs.html">
            <p class="feeter">
                FAQs
            </p>
        </a>
    </div>

    <div class="feet">
        <p>Location</p>
        <p class="feeter">
            Inrobin LTD<br>
            11 Crichton Street<br>
            Edinburgh<br>
            EH8 9LE<br><br>
        </p>
    </div>

    <div class="feet">
        <p>Contact us</p>
        <p class="feeter">
            <a href="mailto:mailto:hello@inrobin.com" class="feeter">hello@inrobin.com<br></a>
        </p>
    </div>



</footer>


<!--Responsive header script-->
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "right") {
        x.className += " responsive";
    } else {
        x.className = "right";
    }
}
</script>


<!--ShowHide SCROLLING SCRIPT-->
<script>
function showHide(theDiv) {
    var x = document.getElementById(theDiv);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<!--SMOOTH SCROLLING SCRIPT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      //event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<!--MENU SCRIPT-->
<script>
$(document).ready(function() {
    $("#navToggle a").click(function(e){
        e.preventDefault();

        $("header > nav").slideToggle("medium");
        $("#logo").toggleClass("menuUp menuDown");
    });

    $(window).resize(function() {
        if($( window ).width() >= "1000") {
            $("header > nav").css("display", "block");

            if($("#logo").attr('class') == "menuDown") {
                $("#logo").toggleClass("menuUp menuDown");
            }
        }
        else {
            $("header > nav").css("display", "none");
        }
    });

    $("header > nav > ul > li > a").click(function(e) {
      if($( window ).width() <= "1000") { if($(this).children() ) {
                $(this).siblings().slideToggle("fast")
                $(this).children(".toggle").html($(this).children(".toggle").html() == 'close' ? 'expand' : 'close');
            }
        }
    });
});
</script>
</body>
</html>
