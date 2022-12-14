<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="login.php">Login</a></p>

            <?php if(isset($_SESSION['duplicate_email_address_error'])): ?>
            <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">undone</i></div>
                <div class="alert-content">
                    <span class="alert-title">Error!</span>
                    <span class="alert-text"><?= $_SESSION['duplicate_email_address_error'] ?></span>
                </div>
            </div>
            <?php endif; ?>
            <form action="register_post.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control <?= (isset($_SESSION['name_error'])) ? 'is-invalid' : '' ?>" placeholder="Enter Name" name="name" value="<?= (isset($_SESSION['old_name'])) ? $_SESSION['old_name'] : '' ?>">
                    <?php
                        if(isset($_SESSION['name_error'])) {
                        // if(isset($_SESSION['name_error'])):
                        ?>
                            <div class="form-text m-b-md text-danger"><?=$_SESSION['name_error'] ?></div>
                        <?php
                            // unset($_SESSION['name_error']);
    // ------[avabe o unset kora jay / page ar sasha {session_unset();} likle o hoy]------

                            // endif;
                        }
                    ?>
                    <label class="form-label">Email address</label>
                    <input type="text" class="form-control <?= (isset($_SESSION['email_error'])) ? 'is-invalid' : '' ?>" placeholder="example@neptune.com" name="email_address" value="<?= (isset($_SESSION['old_email_address'])) ? $_SESSION['old_email_address'] : '' ?>">
                    <?php
                        if(isset($_SESSION['email_error'])):
                        ?>
                            <div class="form-text m-b-md text-danger"><?php echo $_SESSION['email_error']; ?></div>
                        <?php
                            // unset($_SESSION['email_error']);
                        endif; ?>
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" placeholder="017xxxxxxxx" name="phone_number" value="">

                    <label class="form-label">Password</label>
                    <input id="password_field" type="password" class="form-control <?= (isset($_SESSION['password_error'])) ? 'is-invalid' : ''?>" placeholder="password" name="password" value="<?= (isset($_SESSION['old_password'])) ? $_SESSION['old_password'] : '' ?>" >
                    <label for="show_password"><input id="show_password" type="checkbox" onclick="myFunction()"> Show Password</label><br><br>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("password_field");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <?php
                        if(isset($_SESSION['password_error'])):
                            echo "<span class='text-danger'>".$_SESSION['password_error']. "</span><br>"; 
                            // unset($_SESSION['password_error']);
                        endif;
                    ?>

                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control <?= (isset($_SESSION['confirm_password_error'])) ? 'is-invalid' : '' ?>" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="confirm_password">
                    <?php
                    if(isset($_SESSION['confirm_password_error'])):
                       ?>
                        <div class="form-text text-danger"><?php echo $_SESSION['confirm_password_error']; ?></div>
                       <?php
                        // unset($_SESSION['confirm_password_error']);
                    endif;
                    ?>
                </div>
                
                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <div class="divider"></div>            
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>

<?php
session_unset();
?>