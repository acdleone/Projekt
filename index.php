<?php session_start();  $_SESSION['logged_in'] = true; ?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="Blog.css" type="text/css" rel="stylesheet">
    <title>Home</title>
<script>
    
    
    </script>

</head>



<body>
    <div id="skyline">

    </div>

    <div id="side">


        <div id="content">
            <h2>Welcome</h2>
            

        <form name="inputs" action="login.php">
            <input type="submit" name="submit" value="Login" class="button">
            <input type="button" onclick="window.location.href='register.php'" value="Registrieren" class="button">

        </form>
        </div>

    </div>



</body>

</html>