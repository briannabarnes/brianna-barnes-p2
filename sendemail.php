<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bombastic Bri</title>
    <!-- Bombastic Bri is my social media tag, so it's not weird. I also already have my own website by this name (bombasticbri.com)-->
    <link rel="shortcut icon" href="images/logo.jpeg">
    <meta name="description" content="art">
    <meta name="keywords" content="art, digital art, anime, fanart">
    <link rel="stylesheet" href="styles/styles.css">

</head>

<body>
    <div class="top">
        <header>
            <img src="images/logo.jpeg">
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="drawings.html">Digital Art</a></li>
                <li><a href="productart.html">Product Art</a></li>
                <li><a href="social.html">Social</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
    <form name="contact_form" id="contact_form">
		<fieldset>
    <legend>Contact Information</legend>
            <label for="first_name">First Name:</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
        <label for="verify">Verify Email:</label>
        <input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
			<label for="phone">Phone Number:</label>
			<input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
		</fieldset>
		<fieldset>
    <legend>Message Information</legend>
			<label for="reservation_date">Today's  Date:</label>
			<input type="date" name="reservation_date" id="reservation_date" value="<?php echo $_REQUEST['reservation_date'] ?>" disabled><br>
			<label for="subject">Subject:</label>
			<input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
			<label for="Message">Message:</label>
			<textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
		</fieldset>
        <p>
            <?php
                if (isset($_REQUEST['email'])) { 
                    $admin_email = "barnesb7@gmatc.matc.edu"; 
                    $email = $_REQUEST['email']; 
                    $phone = $_REQUEST['phone']; 
                    $subject = $_REQUEST['subject']; 
                    $message = $_REQUEST['message']; 
                    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
                    $body  = "From: " . $name . "\n"; 
                    $body .= "Email: " . $email . "\n"; 
                    $body .= "Phone: " . $phone . "\n"; 
                    $body .= "Message: " . $message;             
                mail($admin_email, $subject, $body, $headers); 
            echo "Thank you for reaching out!"; 
        } else  { 
            echo "ERROR";
                }
            ?>
    </p>
    </form>
    </div>
    <footer>
        <p>Bombastic Bri</p>
    </footer>
    </body>

    </html>