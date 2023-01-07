<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="./assets/css/registerForm.css">
    
</head>
<body>
    <?php 
        if (isset($_GET['error'])) {
            echo "<script>alert('Trung email roi')</script>";
        }
    ?>
    <div class="container">
        <h1>Register</h1>
        <form action="process_signup.php" method="POST" enctype="multipart/form-data">
            <div class="control">
                <input type="text" placeholder="Username" id="name" name="name">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="text" placeholder="Sex" id="sex" name="sex">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="number" placeholder="Year Of Birth" id="date" name="date">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="file" name="avatar">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="email" placeholder="Email" id="email" name="email">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="password" placeholder="Password" id="password" name="password">
                <span></span>
                <small></small>
            </div>
            <div class="control">
                <input type="password" placeholder="Confirm Password" id="password2">
                <span></span>
                <small></small>
            </div>
            <button>Sign Up</button>
            <div class="bonus">
                <input type="checkbox" name="" >
                <div class="signup">Tôi đồng ý với<a href="#"> điều khoản và chính sách bảo mật</a></div>
                <small></small>
            </div>
        </form>
    </div>
    <!-- <script src="assets/css/app.js"></script> -->
</body>
</html>