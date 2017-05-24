<?php
if(isset($_POST['email'])) {
     
    $email_to = "jsloan1986@gmail.com";     
    $email_subject = "Message to Jonathan Sloan";
	
    function died($error) {
        // your error code can go here
        echo "<!DOCTYPE html>";
        echo "<html lang=\"en\">";
        echo "<head>";
                echo "<meta charset=\"utf-8\">";
                echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
                echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
                echo "<meta name=\"description\" content=\"\">";
                echo "<meta name="author" content="">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/assets/favicons/apple-icon-57x57.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/assets/favicons/apple-icon-60x60.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/assets/favicons/apple-icon-72x72.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/assets/favicons/apple-icon-76x76.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/assets/favicons/apple-icon-114x114.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/assets/favicons/apple-icon-120x120.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/assets/favicons/apple-icon-144x144.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/assets/favicons/apple-icon-152x152.png\">";
                echo "<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/favicons/apple-icon-180x180.png\">";
                echo "<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"/assets/favicons/android-icon-192x192.png\">";
                echo "<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/assets/favicons/favicon-32x32.png\">";
                echo "<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/assets/favicons/favicon-96x96.png\">";
                echo "<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/assets/favicons/favicon-16x16.png\">";
                echo "<title>Jonathan Sloan</title>";
                echo "<link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\">";
                echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/font-awesome.css\">";
                echo "<link href=\"assets/css/main.css\" rel=\"stylesheet\">";
                echo "<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>";
                echo "<script src=\"assets/js/hover.zoom.js\"></script>";
                echo "<script src=\"assets/js/hover.zoom.conf.js\"></script>";

        echo "</head>";

              echo "<body>";

                echo "<div class=\"navbar navbar-inverse navbar-static-top\">";
                  echo "<div class=\"container\">";
                    echo "<div class=\"navbar-header\">";
                      echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">";
                        echo "<span class=\"icon-bar\"></span>";
                        echo "<span class=\"icon-bar\"></span>"
                        echo "<span class=\"icon-bar\"></span>";
                      echo "</button>";
                      echo "<a class=\"navbar-brand\" href=\"index.html\">Jonathan Sloan</a>";
                    echo "</div>";
                    echo "<div class=\"navbar-collapse collapse\">";
                      echo "<ul class=\"nav navbar-nav navbar-right\">"
                        echo "<li><a href=\"#work\">Work</a></li>";
                        echo "<li><a href=\"assets/jonathan_sloan_resume.pdf\" target=\"_blank\">Resume</a></li>";
                        echo "<li><a href=\"#contact\">Contact</a></li>";
                      echo "</ul>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";

                echo "<div id=\"ww\">";
                    echo "<div class=\"container\">";
                        echo "<div class=\"row\">";
                            echo "<div class=\"col-lg-12\">";
                                echo "<div class=\"profile-pic hide-text\">";
                                    echo "A lovely picture of me, Jonathan Sloan.";
                                echo "</div>";
                                echo "<h1>About Me</h1>";
                                echo "<p>Hi I’m Jonathan Sloan. I’m a front-end web developer currently based in Columbia, SC. I graduated the <a href=\"http://www.theironyard.com\" target=\"_blank\">Iron Yard code academy</a> in May 2017. While I enjoy developing in any environment I primarily work in ReactJS.";
                                echo "</p>";
                                echo "<p>In my life away from the keyboard I am a photographer and a painter. My dog’s name is Melvin. That’s not relevant to this portfolio. I just love my dog.";
                                echo "</p>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                    
                echo "<div class=\"container work\">";
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-lg-12\">";
                            echo "<h3 id=\"work\">Work</h3>";
                            echo "<hr>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mt centered\">";
                        echo "<div class=\"col-lg-4\">";
                            echo "<a class=\"zoom green project dirt-cheap hide-text\" href=\"www.dirtcheapgames.github.io\" target=\"_blank\">Dirt Cheap Games</a>";
                            echo "<p>Dirt Cheap Games</p>";
                        echo "</div>";
                        echo "<div class=\"col-lg-4\">";
                            echo "<a class=\"zoom green project museum hide-text\" href=\"museum.html\">Columbia Museum of Art</a>";
                            echo "<p>Columbia Museum of Art</p>";
                        echo "</div>";
                        echo "<div class=\"col-lg-4\">";
                            echo "<a class=\"zoom green project shirts hide-text\" href=\"tshirts.html\">T-shirt Project</a>";
                            echo "<p>T-shirts</p>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                
                echo "<div class=\"container\">";
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-lg-6 col-lg-offset-3 centered\">";
                            echo "<h3 id=\"contact\">Say Hi</h3>";
                            echo "<hr>";
                        echo "</div>";
                    echo "</div>";
                    echo "<div class=\"row mt\">    ";
                        echo "<div class=\"col-lg-6 col-lg-offset-3 centered\">I'll be in touch! <i class=\"fa fa-smile-o\" aria-hidden="true"></i></div>";
                    echo "</div>";
                echo "</div>";
                            
                echo "<div id=\"footer\">";
                    echo "<div class=\"container\">";
                        echo "<div class=\"row\">";
                            echo "<div class=\"col-lg-12\">";
                                echo "<p>";
                                    echo "<a href=\"https://www.linkedin.com/in/jonathan-sloan-b97736114/\" target=\"_blank\">
                                        LinkedIn <i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a><a href=\"https://github.com/JonathanSloan\" target=\"_blank\">GitHub <i class=\"fa fa-github fa-4\" aria-hidden=\"true\"></i>";
                                    echo "</a>";
                                echo "</p>";

                            echo "</div>";
                        
                        echo "</div>";
                    
                    echo "</div>";
                echo "</div>";

                echo "<script src=\"assets/js/bootstrap.min.js\"></script>";
              echo "</body>";
            echo "</html>";
		
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<p>The Email Address you entered does not appear to be valid.</p>';
  }
  if(strlen($message) < 2) {
    $error_message .= '<p>The Comments you entered do not appear to be valid.</p>';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- place your own success html below -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="width=device-width" name="viewport">
<title>Graybear LLC - Interactive Design</title>
<meta content="web design, front end web, web development interactive design, flash, actionscript, flash consulting, freelance actionscript, Columbia, South Carolina, sc, creative, web video production, animation, flash design, flash programmers, flash programming" name="Keywords">
<meta content="Building the internet. Maybe you've heard of it." name="description">
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" />
        <script type="text/javascript" src="scripts/unitpngfix.js"></script>
  	<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Anton|Lato:700,400' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="css/screen.css?foo">
<link type="text/css" rel="stylesheet" href="css/media-queries.css?foo">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body class="interior">
    <div id="wrapper">
        <div id="content">
            <div id="nav">
                <ul id="menu">
                    <li id="first"><a href="/">Home</a></li>
                    <li id="second"><a href="work.html">Work</a></li>
                    <li id="third"><a href="contact.html">Contact</a></li>
                </ul>
                <br class="clear" />
            </div>
            <div id="subcontent">
        		<p>Thanks for reaching out. I'll be in touch with you soon... Unless I'm dead or trapped in an abandoned mine. In either of those cases I probably won't.</p>
                <br class="clear"/>        
            </div>
            <img id="logo" src="images/graybear_icon.png" />        
            <br class="clear" />
        </div>
    </div>
    <div id="background">&nbsp;</div>        
</body>
</html>

 
<?php
}
die();
?>
