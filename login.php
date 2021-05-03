<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<head>
    <title>Log in</title>
    <link rel="icon" href="images/rupp.png" type="image/icon type">
</head>
<body class="hold-transition login-page" style="background-image: url('../dist/img/poster.jpg');background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;">
<section>
    <div class="page-header section-height-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8"  style="background-color: #E5E4E2;">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
                <form role="form text-left" action="verify.php" method="POST">
                  <label>Email</label>
                  <div class="input-group mb-3">
                  <span style="background: #FFFFFF; color: gray;" class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-at"></i></span>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="email-addon" required>
                  </div>
                  <label>Password</label>
                  <div class="input-group mb-3">
                  <span style="background: #FFFFFF; color: gray;" class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="login">Sign in</button>
                  </div>
                  <div class="row" style="margin-left:0.1%;">
                    <div class="text-center bg-gradient-warning w-30 mt-4 mb-0" style="border-radius: 4px;">
                      <a href="index.php" style="color: white; text-decoration: none ;"><i class="fa fa-home"></i>Home</a>
                      <!-- <a href="signup.php" style="color: white; text-decoration: none ;">Register</a><br> -->
                    </div>
                    <div class="text-center bg-gradient-primary w-60 mt-4 mb-0" style="margin-left: 7%;border-radius: 4px;">
                      <a href="password_forgot.php" style="color: white; text-decoration: none ;">Forgot Password</a><br>
                    </div>
                  </div>
                </form>
              </div>
              <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                </p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<!-- <div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="verify.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="password_forgot.php">Forgot Password</a><br>
      <a href="signup.php" class="text-center">Register a new membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i>Home</a>
  	</div> -->
</div>
<?php include 'includes/scripts.php' ?>
</body>
</html>