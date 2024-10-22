<?php 
  
?>
<html>
<body>
    <div class="login_container">
        <link rel="stylesheet" href="./css/global.css" type="text/css">
        <h1>Login</h1>
        <form action="check_login.php" method="post" class="form">
            <input type="text" id="username" name="username" id="input_field" placeholder="Enter Username"><br>
            <input type="password" id="password" name="password" id="input_field" placeholder="Enter Password"><br>
            <input type="submit" value="Login">
            <div id="email_error"></div>
            <div id="email_success"></div>
        </form>
    </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>