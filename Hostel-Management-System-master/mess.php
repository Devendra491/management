<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    
    <h1>Mess Registration</h1>
    <div class=" w3l-login-form">
        <h2>Sign Up Here</h2>
        <form action="signup_data.php" method="GET">

        <div class=" w3l-form-group">
                <label>username</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="v1" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Full Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="v2" placeholder="Full Name" required="required" />
                </div>
            </div>
            <!-- <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="v3" placeholder="Last Name" required="required" />
                </div>
            </div> -->
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="v4" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="v5" placeholder="Department" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Address</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="v6" placeholder="Address" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Paid Fees</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="text" class="form-control" name="v6" placeholder="Paid Fees" required="required" />
                </div>
            </div>

          <!--  <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="mail" placeholder="Email" required="required" />
                </div>
            </div>-->

            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="v7" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="v8" placeholder="Confirm Password" required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2018 DBMS Project. All Rights Reserved | Design by <a href="https://www.linkedin.com/in/bharat-reddy/">Bharat-Prajwal-Rakesh</a></p>
    </footer>

</body>

</html>
