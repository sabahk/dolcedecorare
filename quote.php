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
    <link rel="stylesheet" type="text/css" href="style_2.css">
    <title>Dolce Event Decor</title>
</head>

<body>
<div class="topnav" id="myTopnav">
        <div class="navLink">
            <a href="index.html">HOME</a>
            <a href="gallery.html">GALLERY</a>

            <div class="dropdown">
                <button class="dropbtn">SERVICES
                    <i class="fas fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="desserts.html">DESSERTS</a>
                    <a href="rental.html">RENTALS</a>
                    <a href="snapchatandwedding.html">SNAPCHAT & WEBSITE</a>
                    <a href="packagesandprices.html">DECORATING PACKAGES & PRICING</a>
                    <a href="quote.php">REQUEST A QUOTE!</a>
                </div>
            </div>
            <a class="active" href="contact.php">CONTACT</a>
        </div>

        <div class="brand"><img src="Images/navLogo.png"></div>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    
    <div class="center" id="contact">
        <h1>REQUEST A QUOTE</h1>
        <h3>Please provide as much detail as you can and we will reach out within 24 hours.</h3>
        <div id="dis" class="conInfo center">
            <!--add * to required fields-->
            <form method="POST" action="#" id="form" name="form" onsubmit="Success()">
                <input type="text" class="formboxes" name="vname" placeholder="Name" required>
                <br/>
                <input type="email" class="formboxes" name="vemail" placeholder="Email" required>
                <br/>
                <input type="tel" class="formboxes" name="vphonenumber" placeholder="Phone Number">
                <br/>
                <input name="sub" class="formboxes" placeholder="Subject" type="text" value="">
                <br/>
                <div>
                    <input type="checkbox" id="desserttable" name="feature"
                        value="desserttable" checked />
                    <label for="scales">Dessert Table Setup</label>
                </div>
                <div>
                    <input type="checkbox" id="backdrop" name="feature"
                        value="backdrop" checked />
                    <label for="scales">Backdrop Setup</label>
                </div>
                <div>
                    <input type="checkbox" id="scales" name="feature"
                        value="scales" checked />
                    <label for="scales">Guest Table setup</label>
                </div>
                <div>
                    <input type="checkbox" id="rental" name="feature"
                        value="rental" checked />
                    <label for="scales">Rental of Items</label>
                </div>
                <div>
                    <input type="checkbox" id="other" name="feature"
                        value="other" checked />
                    <label for="scales">Other:</label>
                </div>
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