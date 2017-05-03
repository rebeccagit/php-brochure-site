<?php include 'includes/headers.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Company A - Contact Us - Company A in Tomball and Spring, TX
</title>
<meta name="description" content="We offer many services in Tomball and Spring, TX." />
<meta name="keywords" content="Company." />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="scripts/bootstrap/bootstrapcss.css">
<link rel="stylesheet" href="scripts/css/main.css">
<script src="scripts/jquery/jquery.js"></script>
<script src="scripts/bootstrap/bootstrap.js"></script>
<script src="scripts/angular/angular.min.js"></script>

<script>
    var app = angular.module('contactApp', []);
    app.controller('formValid', function($scope) {
        $scope.name = '';
        $scope.email = '';
        $scope.phone = '';
        $scope.message = '';
    });
</script>

</head>
<body>
<div id="body">
    <div id="container" class="container-fluid">
    <?php include 'includes/header.php';?>
    <?php include 'includes/menubar.php';?>
    <div id="main" class="row">
        <div class="col-md-12">
			<br /><br />
			<p><h2>CONTACT US</h2></p>
		</div>
	</div>
	<div id="main" class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br />				
            <p class="pgcontentheader">713-121-1212<br />mail@mail.com</p>
        </div>
		<div class="col-md-2"></div>	
	</div>


    <div id="main" class="row">
        <div class="col-md-12">
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
              $nameErr = $emailErr = $phoneErr = $messageErr = "";
              $name = $email = $phone = $message = "";

            if (empty($_POST["name"]))
              {$nameErr = "Name is required.";}
            else
              {
              $name = test_input($_POST["name"]);
              if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                $nameErr = "Only letters and white space allowed.";
                }
                else{ $okname = $name;}
              }

            
            if (empty($_POST["email"]))
              {$emailErr = "Email is required.";}
            else
              {
              $email = test_input($_POST["email"]);
              if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
                {
                $emailErr = "Invalid email format"; 
                }
                else{$okemail = $email;}
              }

            if (empty($_POST["message"]))
              {$messageErr = "Message is required.";}
            else
              {$messagetext = test_input($_POST["message"]);
                if (!preg_match("/^[A-Za-z0-9-.?!, ]*$/",$messagetext))
                {
                $messageErr = "Only letters and white space allowed."; 
                }
                else{$okmessage = $messagetext;}
                }

            if (empty($_POST["phone"]))
              {$phoneErr = "Phone is required.";}
                else
                {$phone = test_input($_POST["phone"]);
                if(!preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i",$phone))
                {$phoneErr = "This isn't a valid phone.";}
                else{$okphone = $phone;}
          }}

          function test_input($data)
          {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
          }
          ?>

          <?php
          //send email
            if($okname && $okemail && $okphone && $okmessage)
            {
            $email = $okemail;
            $subject = "Contact Form Email";
            $message = "Name: ".$okname."\n";
            $message .= "Phone: ".$okphone."\n";
            $message .= "Message: ".$okmessage."\n";
            mail("llllllll@programmers.com", $subject, $message, "From:" . $email);
            echo "<h4>Thank you! Your email has been sent!<br /><br /></h4>";
            }
          ?>

          <p><span class="error">* required field.</span></p>
              <form ng-app="contactApp" ng-controller="formValid" role="form" name="contactForm" id="contactform" 
                method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate> 
                <p id="error1"></>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="Enter email" ng-model="email" required autofocus>
                </div>
                    <span ng-show="contactForm.email.$dirty && contactForm.email.$invalid">
                    <span ng-show="contactForm.email.$error.required"><span class="error">Email is required.</span></span>
                    <span ng-show="contactForm.email.$error.email"><span class="error">Invalid email address.</span></span>
                    </span>
                <br><br>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter Name" ng-model="name" required>
                    <span ng-show="contactForm.name.$dirty && contactForm.name.$invalid">
                    <span ng-show="contactForm.name.$error.required"><span class="error">Name is required.</span></span>
                    </span>
                </div>
                <br><br>    
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input class="form-control" type="text" name="phone" placeholder="Enter Phone" ng-model="phone" required>
                </div>
                <span ng-show="contactForm.phone.$dirty && contactForm.phone.$invalid">
                <span ng-show="contactForm.phone.$error.required"><span class="error">Phone number is required.</span></span>
                </span>
                <br><br>   
                <div class="form-group">
                    <label for="message">Message:</label><br />
                    <textarea class="form-control" name="message" placeholder="Enter Message" rows="5" ng-model="message" required></textarea>
                </div>
                <span ng-show="contactForm.message.$dirty && contactForm.message.$invalid">
                <span ng-show="contactForm.message.$error.required"><span class="error">Message is required.</span></span>
                </span>
                <br><br>   
                <div class="form-group">
                    <input type="submit"
                                  ng-disabled="contactForm.name.$dirty && contactForm.name.$invalid ||  
                                  contactForm.email.$dirty && contactForm.email.$invalid ||  
                                  contactForm.phone.$dirty && contactForm.phone.$invalid ||   
                                  contactForm.message.$dirty && contactForm.message.$invalid ||
                                  contactForm.name.$untouched || contactForm.email.$untouched || 
                                  contactForm.phone.$untouched || contactForm.message.$untouched">
                    <input type="reset" name="reset" value="Reset"> 
                </div>
            </form>
          <br /><br /><br /><br /><br />
        </div>
    </div>      

    <div class="row">
        <div class="col-md-12"><br /><br /><br /></div>
    </div>
      <?php include 'includes/footer.php';?>
    </div>
</div>

</body></html>