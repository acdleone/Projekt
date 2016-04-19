
<html>

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="Blog.css" type="text/css" rel="stylesheet">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<body>
  <!--  <div id="skyline">

    </div>-->
    <div id="side">

        <ul id="navigation" class="Menu">
            <li><a href="Blogs.php">Blog</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Registrieren</a></li>
        </ul>

        <!-- Zeigt den Blog an-->
        <h1>Blogs</h1>
          <?php
  
  $contents = file("blogs.txt");

  foreach($contents as $line)
  {
    $arr = explode(',', $line);
    $title = $arr[0];
    $subtitle = $arr[1];
    $content = $arr[2];
  ?>

  <br>
  <div id = "tweet">  
  <h2> <?php echo $title; ?>  <small></small></h2>
  <hr />
  <p class="untertitel"><?php echo $subtitle; ?></p>
  <p class="text"><?php echo $content; ?></p>
  
  </div>

<?php
  }
?>  
     

</body>

</html>