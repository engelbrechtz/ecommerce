<?php 
    session_start();

    include('../db/db_connect.php');

    if(isset($_POST['signup'])){

        // Create user account
            $create_user = $_POST['username'];
            $create_pass = $_POST['password'];
            $user_id = random_num(22);

            $sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com')";

            $result = mysqli($sql);
    }
?>
<html>
<body>
    <div class="login_container">
        <link rel="stylesheet" href="./css/global.css" type="text/css">
        <h1>Signup</h1>
        <form action="signup.php" method="post" class="form">
   
            <input type="text" id="username" name="username" id="input_field" placeholder="Create Username"><br>
            <input type="password" id="password" name="password" id="input_field" placeholder="Create Password"><br>
            <input type="submit" value="Login">
            <div id="email_error"></div>
            <div id="email_success"></div>
        </form>
    </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>

