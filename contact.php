<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Event Decorating">
    <meta name="keywords" content="event, dessert, decorate, decorator, 
            dessert table, wedding, birthday, desi, indian, pakistani,
            dholki, mehndi, bridal shower">
    <meta name="author" content="Sabah Khan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style_2.1.css">
    <title>Dolce Event Decor | Decorating and Rentals</title>
</head>

<body>
<div class="topnav" id="myTopnav">
        <div class="navLink">
            <a href="index.html">Home</a>
            <a href="gallery.html">Gallery</a>

            <div class="dropdown">
                <button class="dropbtn">Services
                    <i class="fas fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="desserts.html">Desserts</a>
                    <a class="active" href="#">Rentals</a>
                    <a href="packages.html">Decorating & Pricing</a>
                    <a href="web.html">Snapchat & Website</a>
                </div>
            </div>
            <a href="contact.php">Contact</a>
        </div>

        <div class="brand"><img src="Images/navLogo.png"></div>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>

    
    <div class="center" id="contact">
        <h1>CONTACT</h1>
        <h3>LET'S GET IN TOUCH!</h3>
        <a href="https://www.facebook.com/DolceEventDecor/" target="_blank" sizes="64x364">
            <i class="fab fa-facebook-square fa-3x"></i>
        </a>
        <a href="mailto:dolceeventdecor@gmail.com?Subject=Event%20Inquiry" target="_blank" sizes="64x364">
            <i class="fas fa-envelope-square fa-3x"></i>
        </a>
        <a href="tel:734-747-4994" target="_blank" sizes="64x364">
            <i class="fas fa-phone-square fa-3x"></i>
        </a>
        <div id="dis" class="conInfo center">
        <p>(all fields are required)</p>
            <form method="POST" action="#" id="form" name="form" onsubmit="Success()">
                <input type="text" class="formboxes" name="vname" placeholder="Name" required>
                <br/>
                <input type="email" class="formboxes" name="vemail" placeholder="Email" required>
                <br/>
                <input name="sub" class="formboxes" placeholder="Subject" type="text" value="">
                <br/>
                <textarea name="msg" class="formboxes" placeholder="Message" rows="5" required></textarea>
                <br/>
                <input id="send" class="submitButton" name="submit" type="submit" value="Submit">
            </form>

            <?php

            if(isset($_POST["submit"])){

                // Checking For Blank Fields..
                if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
                echo "Fill All Fields..";
                }else{
                // Check if the "Sender's Email" input field is filled out
                $email=$_POST['vemail'];
                // Sanitize E-mail Address
                $email =filter_var($email, FILTER_SANITIZE_EMAIL);
                // Validate E-mail Address
                $email= filter_var($email, FILTER_VALIDATE_EMAIL);
                if (!$email){
                echo "Invalid Sender's Email";
                }
                else{
                $subject = $_POST['sub'];
                $message = "Dolce Request Form " . $_POST['msg'];
                $headers = 'From:'. $email;  // Carbon copy to Sender
                // Message lines should not exceed 70 characters (PHP rule), so wrap it
                $message = wordwrap($message, 70);
                // Send Mail By PHP Mail Function
                mail("dolceeventdecor@gmail.com", $subject, $message, $headers);
                }
                }
                }

            ?>


        </div>
    </div>

    

    <div class="footer">
            <p id="firstP">Dolce Event Decor | <a href="mailto:dolceeventdecor@gmail.com">dolceeventdecor@gmail.com</a></p>
    </div>

    <script>
        function Success(){
            return document.getElementById("dis").innerHTML = "Thank you for reaching out! <br /> someone will be in contact within the next 24 hours!";
        }
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>