<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Project Worlds || FEEDBACK </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <!--alert message-->
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <!--alert message end-->

</head>

<body>

  <!--header start-->
  <div class="feedback-header">

    <div class="">
      <span class="logo">
     <a href="index.php">
       <img src="image\logo.png"/>
      </a>
      </span>
    </div>

    <div class="">

    </div>
    
    <div class="">
      <?php
      include_once 'dbConnection.php';
      session_start();
      if ((!isset($_SESSION['email']))) {
        echo '<a href="#" class="pull-right btn feedback-icon2" style="color:black" data-toggle="modal" data-target="#myModal">
       
        <img src="image\exit.png" alt=""/>
        &nbsp;Signin</a>&nbsp;';
      } else {
        echo '<a href="logout.php?q=feedback.php" class="pull-right feedback-icon2" style="color:black; text-decoration="none";>
        <img src="image\log-out.png" alt=""/>
        &nbsp;Signout</a>&nbsp;';
      }
      ?>

      <a href="index.php" class="btn feedback-icon1" style="color:black">
        <!-- <span class="glyphicon glyphicon-home"
          aria-hidden="true"></span> -->
          <img src="image\home.png" alt=""/>
          &nbsp;Home
      </a>&nbsp;

    </div>
  </div>




  <!--sign in modal start-->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content title1">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title title1"><span style="color:black">Sign In</span></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="login.php?q=index.php" method="POST">
            <fieldset>


              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email"></label>
                <div class="col-md-6">
                  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"
                    type="email">

                </div>
              </div>

              <!-- Password input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="password"></label>
                <div class="col-md-6">
                  <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md"
                    type="password">

                </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark-index" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success-index">sign in</button>
          </fieldset>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--sign in modal closed-->

  <!--header end-->

  <div class="">
    <div class="row">
      
     
    <div class="feedback-panel row">
    <div class="col-md-6 feedback-image">
        <img src="image/feedback.jpg" alt="">
    </div>

    <div class="col-md-6">
        <h4 class="feedback-head">Feedback or report a problem</h4>
        <div class="feedback-div">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Retrieve and sanitize form inputs
              $name = htmlspecialchars(trim($_POST['name']));
              $subject = htmlspecialchars(trim($_POST['subject']));
              $email = htmlspecialchars(trim($_POST['email']));
              $feedback = htmlspecialchars(trim($_POST['feedback']));

              // Initialize an array to store errors
              $errors = [];

              // Validate inputs
              if (empty($name)) {
                $errors[] = "Name is required.";
              }
              if (empty($subject)) {
                $errors[] = "Subject is required.";
              }
              if (empty($email)) {
                $errors[] = "Email is required.";
              } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
              }
              if (empty($feedback)) {
                $errors[] = "Feedback is required.";
              }

              // Check if there are any errors
              if (empty($errors)) {
                // If no errors, display the thank you message
                echo '<span style="font-size:23px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Thank you for your feedback!</br></span>';
              } else {
                // Display errors
                foreach ($errors as $error) {
                  echo '<div style="color:red;">' . $error . '</div>';
                }
              }
            }

            if (empty($errors)) {
              echo 'You can send us your feedback through e-mail on the following e-mail id:<br/>
                <div class="row">
                    <div class="col-md-7"></div>
                    <div class="col-md-10">
                        <a href="mailto:contact@satyaprakash.me" style="color:#000000">contact@satyaprakash.me</a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <p align="left">Or you can directly submit your feedback by filling the entries below:-</p><br/>
                <form role="form" method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" class="pt-3">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="form-group pt-4">
                                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required><br />    
                                <input id="subject" name="subject" placeholder="Enter subject" class="form-control input-md" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>    
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows="3" cols="6" name="feedback" class="form-control" placeholder="Write feedback here..." required></textarea>
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="submit" value="Submit" class="feedback-btn">
                    </div>
                </form>';
            }
            ?>
        </div>
    </div>
</div>





    </div>
  </div>
  </div>






  <!--Footer start-->
  <footer class="footer">

  <div class="d-flex justify-content-center footer-img">
  <img src="image\zeroip-logo.png" alt="">
 </div>

<div class="footer-link">
  <div class="col-md-3 box">
    <a href="aboutus.php">About us</a>
  </div>
  <div class="col-md-3 box">
    <a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
  </div>
  <div class="col-md-3 box">
    <a href="aboutus.php">Developers</a>
  </div>
  <div class="col-md-3 box">
    <a href="feedback.php">Feedback</a>
  </div>
</div>


  <div>
  <p class="footer-copyright">copyright © 2024 by ZEROIP</p>
  </div>

</footer>




  
  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:black">Developers</span></h4>
        </div>

        <div class="modal-body">
          <p>
          <div class="row">
            <div class="col-md-4">
              <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
            </div>
            <div class="col-md-5">
              <a href="http://satyaprakash.me" style="color:#202020; font-family:'typo' ; font-size:18px"
                title="Find on Facebook">Satya Prakash</a>
              <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 7978849439</h4>
              <h4 style="font-family:'typo' ">contact@satyaprakash.me</h4>
              <h4 style="font-family:'typo' ">Lovely Professional University, Phagwara</h4>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-4">
              <img src="image\hamad3.jpg" width=100 height=100 alt="Prakash " class="img-rounded">
            </div>
            <div class="col-md-5">
              <a href="#" style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">Contact Me</h4>
                <h4 style="font-family:'typo' ">hamadsaif.dev@gmail.com</h4>
                <h4 style="font-family:'typo' ">utkal University, BBSR</h4>
            </div>
          </div>
          </p>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
              class="sr-only">Close</span></button>
          <h4 class="modal-title"><span>Sign in</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                </div>
                <div class="form-group" align="center">
                  <input type="submit" name="login" value="sign in" class="btn btn-success-index" />
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
        <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--footer end-->


</body>

</html>