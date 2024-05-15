<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Project Worlds || TEST YOUR SKILL </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="js/jquery.js" type="text/javascript"></script>


  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value; var letters = /^[A-Za-z]+$/; if (y == null || y == "") { alert("Name must be filled out."); return false; } var z = document.forms["form"]["college"].value; if (z == null || z == "") { alert("college must be filled out."); return false; } var x = document.forms["form"]["email"].value; var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf("."); if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) { alert("Not a valid e-mail address."); return false; } var a = document.forms["form"]["password"].value; if (a == null || a == "") { alert("Password must be filled out"); return false; } if (a.length < 5 || a.length > 25) { alert("Passwords must be 5 to 25 characters long."); return false; }
      var b = document.forms["form"]["cpassword"].value; if (a != b) { alert("Passwords must match."); return false; }
    }
  </script>


</head>

<body>

  <div class="header">

    <div class="header-inside">

      <div>
        <span class="logo">
          <!-- <img style="width:90px" src="image\zeroip.webp"/> -->
        <img src="image\logo.png"/></span>
      </div>


      <div class="">
        <a href="#" class="pull-right index-signin" data-toggle="modal" data-target="#myModal">
          
          <span class="">
            <!-- <i class="all-icon bi bi-box-arrow-in-right"></i> -->
            <img src="image\exit.png" alt=""/>&nbsp;
            Sign in
          </span>
        </a>
      </div>


      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span>'
                </button>
              <h4 class="modal-title title1"><span style="color:black">Sign In</span></h4>
            </div>



            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>


                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email"></label>
                    <div class="col-md-6">
                      <input id="email" name="email" placeholder="Enter your email" class="form-control input-md"
                        type="email">

                    </div>
                  </div>


                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <input id="password" name="password" placeholder="Enter your Password"
                        class="form-control input-md" type="password">

                    </div>
                  </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-dark-index" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success-index">Sign in</button>
              </fieldset>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--sign in modal closed-->

    </div><!--header row closed-->
  </div>



  <div class="index-bg1">
    
    <div class="row index-main-box">

      <div class="col-md-6 index-bg-image">
         <img class="img-fluid" src="image\4119036.jpg"/>
      </div>

      <div class="col-md-6 index-panel">
        <!-- sign in form begins -->
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()"
          method="POST">
          <fieldset>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <select id="gender" name="gender" placeholder="Enter your gender" class="form-control">
                  <option value="Male">Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md"
                  type="text">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="email"></label>
              <div class="col-md-12">
                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md"
                  type="email">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="mob"></label>
              <div class="col-md-12">
                <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md"
                  type="number">

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md"
                  type="password">

              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md"
                  type="password">

              </div>
            </div>
            <?php if (@$_GET['q7']) {
              echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
            } ?>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12">
                <input type="submit" class="sub" value="sign up" class="btn" />
              </div>
            </div>

          </fieldset>
        </form>
      </div>
    </div>

  </div><!--container end-->



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
          <h4 class="modal-title"><span style="color:black">Developers</span></h4>
        </div>

        <div class="modal-body">
          <p>
          <div class="row">
            <div class="col-md-5">
              <img src="image/CAM00121.jpg" width=100 height=100 alt="Prakash " class="img-rounded">
            </div>
            <div class="col-md-3">
              <a href="#" style="color:#202020;font-size:15px" class="navbar-brand">
                <h5>Contact Me</h5>
                <h5>satyapraksah.od@gmail.com</h5>
                <h5>Lovely professional University, Phagwara</h5>
                </a>
            </div>
          </div>

          <div class="row pt-5">
            <div class="col-md-5">
              <img src="image\hamad3.jpg" width=100 height=100 alt="Prakash " class="img-rounded">
            </div>
            <div class="col-md-3">
              <a href="#" style="color:#202020;font-size:15px" class="navbar-brand">
                <h5>Contact Me</h5>
                <h5>hamadsaif.dev@gmail.com</h5>
                <h5>utkal University, BBSR</h5>
                </a>
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
          <h4 class="modal-title"><span style="color:black">Sign in</span></h4>
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
                  <input type="submit" name="login" value="Sign in" class="admin-btn btn-success-index" />
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